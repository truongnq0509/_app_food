<?php 

define('tableProduct', 'products');
define('tableCategory', 'categorys');

function getAllProducts() {
    $data = all(tableProduct);
    return $data;
}

function getAllCategory() {
    $data = all(tableCategory);
    return $data;
}


?>