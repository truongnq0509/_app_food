<?php 

define('tableCategory', 'categorys');

function getAllCategory() {
	$data = all(tableCategory);
	return $data;
}

function deleteCategory($id) {
	remove(tableCategory, $id);
}


?>