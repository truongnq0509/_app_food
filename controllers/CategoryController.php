<?php
loadModel('ProductModel');
loadModel('CategoryModel');
$data = null;

function index()
{
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
			'categoryUrl' => $category,
		]
	]);
}


function filters()
{
	global $data;
	$id = $_GET['id'] ?? false;
	$categorys = getAllCategory();
	if ($id) {
		$category = getCategory($id);
	}
	$products = filterProduct($_POST['option'], $category['id'] ?? false);


	view('layouts/index', [
		'title' => 'Danh Mục',
		'content' => 'categorys/index',
		$data = [
			'products' => $products,
			'categorys' => $categorys,
			'categoryUrl' => $category ?? [],
		]
	]);
}
