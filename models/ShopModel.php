<?php 

define('tableProduct', 'product');
define('tableCategory', 'category');

function getAllProducts() {
    $data = all(tableProduct);
    return $data;
}

function getAllCategory() {
    $data = all(tableCategory);
    return $data;
}

?>