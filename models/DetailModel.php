<?php 

define('tableProduct', 'products');

function getProduct() {
	$id = $_GET['id'];
	$data = find(tableProduct, $id);
	return $data;
}

?>