<?php 
define('tabelBlog', 'blogs');
define('tabelUser', 'users');
$data = null;

function getAllBlog() {
	global $data;
	$data = all(tabelBlog);
	return $data;
}

function getBlog($id) {
	global $data;
	$data = find(tabelBlog, $id);
	return $data;
}

function getAdmin($id) {
	global $data;
	$data = find(tabelUser, $id);
	return $data;
}

?>