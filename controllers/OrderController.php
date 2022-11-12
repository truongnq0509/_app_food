<?php 
loadModel('OrderModel');
loadModel('ProductModel');
$data = null;

function index() {
	global $data;
	$productsId = implode(',', array_keys($_SESSION['cart']));

	if($productsId) {
		$products = getProductByIn($productsId);
	} else {
		$products = [];
	}

	view('layouts/index', [
		'title' => 'Đặt Hàng',
		'content' => 'order/index',
		$data = [
			'products' => $products,
		]
	]);
};


?>
