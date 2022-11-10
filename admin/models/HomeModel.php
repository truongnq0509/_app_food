<?php 

define('tableCategory', 'category');
define('tableProduct', 'product');

function getCategory() {
    return all(tableCategory);
}

function getProduct() {
    return all(tableProduct);
}


?>