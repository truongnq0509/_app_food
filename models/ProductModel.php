<?php 
define('tableProduct', 'products');

function getAllProducts() {
    $data = all(tableProduct);
    return $data;
}

function getProduct($id) {
	$data = find(tableProduct, $id);
	return $data;
}

// Lấy sản phẩm liên quan
function getProductByCategory($id, $category_id) {
	$data = findAll(tableProduct, $category_id, $id);
	return $data;
}

// Lấy sản phẩm theo nhiều ID
function getProductByIn($value) {
	if($value) {
		$data = getIn(tableProduct, $value);
	}
	return $data;
}

?>