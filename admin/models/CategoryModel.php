<?php 

define('tableCategory', 'categorys');
define('tableProduct','products');

function getAllCategory() {
	$data = all(tableCategory);
	return $data;
}

function deleteCategory($id) {
	movie(tableProduct,$id);
	remove(tableCategory, $id);
}

function addCategory(){
	create(tableCategory,$_POST);
}


?>