<?php 
loadModel('ProductModel');
loadModel('CategoryModel');
$data = null;

function index() {
	global $data;
	$id = $_GET['id'];
	$categorys = getAllCategory();
	$category = getCategory($id);
    $products = getProductByCategory(null, $id);

	view('layouts/index', [
		'title' => 'Danh Mục',
		'content' => 'categorys/index',
		$data = [
			'products' => $products,
			'categorys' => $categorys,
			'category' => $category,
		]
	]);
}


function filters() {
	global $data;
	$categorys = getAllCategory();
	$products = filterProduct($_POST['option']);
	
	view('layouts/index', [
		'title' => 'Danh Mục',
		'content' => 'categorys/filter',
		$data = [
			'categorys' => $categorys,
			'products' => $products,
		]
	]);
}


?>