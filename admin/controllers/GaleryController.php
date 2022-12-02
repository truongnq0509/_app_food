<?php
loadModel('GaleryModel');

function index()
{
	global $data;
	$id = $_GET['id'];
	$galerys = getAllGalery($id);
	view('layouts/index', [
		'content' => 'galery/index',
		$data = [
			'galerys' => $galerys,
			'id' => $id
		]
	]);
}


function form()
{

	global $data;
	$id = $_GET['id'];
	view('layouts/index', [
		'content' => 'galery/form',
		$data = [
			'id' => $id
		]
	]);
}

function saveadd()
{
	$productId = $_GET['id'];
	insert($productId);
	header("location: index.php?controller=galery&id=$productId");
}

function delete()
{
	$productId = $_GET['pId'];
	deleteGalery();
	header("location: index.php?controller=galery&id=$productId");
}

function edit()
{
	global $data;
	$id = $_GET['pId'];
	$galery = getOneGalery();
	view('layouts/index', [
		'content' => 'galery/edit',
		$data = [
			'galery' => $galery,
			'id' => $id
		]
	]);
}

function update()
{
	$galeryId = $_POST['id'];
	$productId = $_GET['pId'];
	updateGalery($galeryId, $productId);
	header("location: index.php?controller=galery&id=$productId");
}
