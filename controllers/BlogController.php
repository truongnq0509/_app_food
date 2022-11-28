<?php 
loadModel('BlogModel');
$data = null;

function index() {
	global $data;
	$blogs = getAllBlog();
	view('layouts/index', [
		'title' => 'Bài Viết',
		'content' => 'blogs/index',
		$data = [
			'blogs' => $blogs,
		]
	]);
}

function detail() {
	global $data;
	$id = $_GET['id'];
	$blog = getBlog($id);
	view('layouts/index', [
		'title' => 'Chi Tiết Bài Viết',
		'content' => 'blogs/_detail',
		$data = [
			'blog' => $blog,
		]
	]);
}
