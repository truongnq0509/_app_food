<?php

define('tableCategory', 'categorys');
define('tableProduct', 'products');

function getAllCategory()
{
	$data = all(tableCategory);
	return $data;
}

function getOneCategory()
{
	$id = $_GET['id'];
	return find(tableCategory, $id);
}

function deleteCategory($id)
{
	movie(tableProduct, $id);
	remove(tableCategory, $id);
}

function addCategory()
{
	create(tableCategory, $_POST);
}

function updateCategory()
{
	$id = $_POST['id'];
	updateData(tableCategory, $id, [
		'name' => $_POST['name'],
		'id' => $_POST['id'],
	]);
}
