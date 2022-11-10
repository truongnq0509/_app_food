<?php 
loadModel('DetailModel');
$data = null;


function index() {
	global $data;
	$product = getProduct();

	view('layouts/index', [
		'content' => 'detail/index',
		$data = [
			'product' => $product,
		]
	]);
}
