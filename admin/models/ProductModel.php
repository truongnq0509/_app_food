<?php 

define('tableName', 'product');

function getAll() {
    $data = all(tableName, 5);
    return $data;
}

function getProduct() {
    $id = (int)$_GET['id'];
    $data = find(tableName, $id);
    return $data;
}

?>