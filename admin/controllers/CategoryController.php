<?php 
loadModel('CategoryModel');
$data = null;

function index() {
	global $data;
	$categorys = getAllCategory();

	view('layouts/index', [
		'content' => 'category/index',
		$data = [
			'categorys' => $categorys
		]
	]);
}

function delete() {
	$id = $_GET['id'];
	deleteCategory($id);
	header('location: index.php?controller=category');
}

function add() {
	global $data;
	
	view("layouts/index", [
		'content' => 'category/form',
		$data = []
	]);
	
}


?>