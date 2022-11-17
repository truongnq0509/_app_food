<?php

// thực hiện câu lệnh delete, update, insert
function execute($sql)
{
    global $conn;
    connectDB();
    $conn->query($sql);
    disconnect();
}

// thực hiện câu lệnh select
// $isSingle = true là lấy ra 1 bản ghi
// $isSingle = false là lấy ra từ 2 bản ghi trở lên
function executeSingle($sql, $isSingle = false)
{
    global $conn;
    connectDB();
    $result = $conn->query($sql);
    if ($isSingle) {
        $data = null;
        while ($row = $result->fetch()) {
            $data = $row;
        }
    } else {
        $data = [];
        if ($result->rowCount() > 0) {
            while ($row = $result->fetch()) {
                $data[] = $row;
            }
        }
    }

    return $data;
    disconnect();
}

/**
 * lấy tất cả bản ghi
 */
function all($table, $limit = 12)
{
    $sql = "SELECT * FROM $table LIMIT $limit";
    return executeSingle($sql);
}

// lấy 1 bản ghi
function find($table, $id)
{
    $sql = "SELECT * FROM $table WHERE id = $id";
    return executeSingle($sql, true);
}

function findColumn($table, $column, $value)
{
    $sql = "SELECT * FROM $table WHERE {$column} = {$value}";
    return executeSingle($sql);
}

function getIn($table, $value)
{
    $sql = "SELECT * FROM $table WHERE `id` IN($value)";
    return executeSingle($sql);
}

// Thêm dữ liệu
function create($table, $data = [])
{
    $columns = implode(', ', array_keys($data));
    $values = array_map(function ($value) {
        return "'" . $value . "'";
    }, array_values($data));

    $valuesNew = implode(', ', $values);
    $sql = "INSERT INTO {$table}({$columns}) VALUES({$valuesNew})";
    execute($sql);
}

// Update dữ liệu
function updateData($table, $id, $data = [])
{
    $values = [];
    foreach ($data as $key => $value) {
        array_push($values, "{$key} = '{$value}'");
    }

    $valuesNew = implode(', ', $values);
    $sql = "UPDATE {$table} SET {$valuesNew} WHERE id = {$id}";
    execute($sql);
}

// Xóa dữ liệu
function remove($table, $id)
{
    $sql = "DELETE FROM {$table} WHERE id = $id";
    execute($sql);
}

function check($table, $data)
{
    $values = [];
    foreach ($data as $key => $value) {
        array_push($values, "{$key} = '{$value}'");
    };

    $valueNews = implode(' AND ', $values);
    $sql = "SELECT * FROM {$table} WHERE $valueNews";
    return executeSingle($sql, true);
}

function updateQuantity($table, $data = [])
{
    $total = 0;
    $totalMoney = 0;
    $updateProductString = '';
    $updateOrderDetailString = '';
    $orderId = (int)$data['order_id'];
    $array = $data['quantity'];
    $productId = implode(', ', array_keys($array));
    // Lấy ra sản phẩm trong đơn hàng
    $products = getIn($table, $productId);

    
    foreach ($products as $product) {
        // insert order_detail
        $orderDetail = check('order_detail', [
            'order_id' => $orderId,
            'product_id' => $product['id']
        ]);

        $total = $orderDetail['price'] * $array[$product['id']];

        // update lại số lượng trong order_detail
        $updateOrderDetailString .= "WHEN product_id = " . $product['id'] . " THEN " . $array[$product['id']] . " ";


        // Trừ số lượng trong kho nếu số lượng update nhiều hơn
        if ($array[$product['id']] > $orderDetail['quantity']) {
            $updateProductString .= "WHEN id = " . $product['id'] . " THEN quantity - " . (int)($array[$product['id']] - $orderDetail['quantity']) . " ";

            // Cộng số lượng lại trong kho nếu số lượng update ít hơn
        } else if ($array[$product['id']] < $orderDetail['quantity']) {
            $updateProductString .= "WHEN id = " . $product['id'] . " THEN quantity + " . (int)($orderDetail['quantity'] - $array[$product['id']]) . " ";

            // Xóa sản phẩm có số lượng 0
        } else if ($array[$product['id']] == 0) {
            $updateProductString .= " WHEN id = " . $product['id'] . " THEN quantity + " . $orderDetail['quantity'] . " ";
            execute("DELETE FROM order_detail WHERE product_id = " . $product['id'] . " AND order_id = $orderId");
        } else {
            $updateProductString .= "WHEN id = " . $product['id'] . " THEN " . $product['quantity'] . " ";
        }

        $totalMoney += $total;
    }

    // update total_money order
    execute("UPDATE orders SET total_money = $totalMoney WHERE id = $orderId");
    // update order_detail
    execute("UPDATE order_detail SET quantity = CASE " . $updateOrderDetailString . " END WHERE order_id = $orderId");
    // update quantity product
    execute("UPDATE products SET quantity = CASE " . $updateProductString . " END WHERE id IN ($productId)");
}
