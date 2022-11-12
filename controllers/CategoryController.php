<?php 
loadModel('ProductModel');
loadModel('CategoryModel');
$data = null;

function index() {
	global $data;
	$id = $_GET['id'];
	$categorys = getAllCategory();
	$category = getCategory($id);
	$product = getProduct($id);
    $products = getProductByCategory($product['id'], $category['id']);

	view('layouts/index', [
		'title' => 'Danh Mục',
		'content' => 'categorys/filter',
		$data = [
			'products' => $products,
			'categorys' => $categorys,
			'category' => $category,
		]
	]);
	
}


?>