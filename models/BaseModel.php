<?php

// thực hiện câu lệnh delete, update, insert
function execute($sql)
{
    global $conn;
    connectDB();
    $conn->query($sql);
    return $conn->lastInsertId();
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
function all($table, $limit = 99)
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

// Lấy 2 bam ghi
function findAll($table, $category_id, $id = null)
{
    if ($id) {
        $sql = "SELECT * FROM $table WHERE category_id = $category_id AND id != $id";
    } else {
        $sql = "SELECT * FROM $table WHERE category_id = $category_id";
    }
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
    // echo $sql;
    // exit;
    return execute($sql);
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

function updateQuantity($table, $products, $id)
{
    $updateString = '';
    foreach ($products as $product) {
        $updateString .= " WHEN id = " . $product['id'] . " THEN quantity - " . $_SESSION['cart'][$product['id']] . " ";
    }

    execute("UPDATE {$table} SET quantity = CASE " . $updateString . " END WHERE id IN($id)");
}

// Tìm kiếm sản phẩm
function filter($table, $value)
{
    $products = executeSingle("SELECT * FROM {$table} WHERE name LIKE '%$value%'");
    return $products;
}
