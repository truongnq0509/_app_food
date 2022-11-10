<?php 

// thực hiện câu lệnh delete, update, insert
function execute($sql) {
    global $conn;
    connectDB();
    $conn->query($sql);
    disconnect();
}

// thực hiện câu lệnh select
// $isSingle = true là lấy ra 1 bản ghi
// $isSingle = false là lấy ra từ 2 bản ghi trở lên
function executeSingle($sql, $isSingle = false) {
    global $conn;
    connectDB();
    $result = $conn->query($sql);
    if($isSingle) {
        $data = null;
        while($row = $result->fetch()) {
            $data = $row;
        }
    } else {
        $data = [];
        if($result->rowCount() > 0) {
            while($row = $result->fetch()) {
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
function all($table, $limit = 12) {
    $sql = "SELECT * FROM $table LIMIT $limit";
    return executeSingle($sql);
}

// lấy 1 bản ghi

function find($table ,$id) {
    $sql = "SELECT * FROM $table WHERE id = $id";
    return executeSingle($sql, true);
}

?>