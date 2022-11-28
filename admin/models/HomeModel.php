<?php
define('tableCategory', 'categorys');
define('tableProduct', 'products');
define('tableUser', 'users');
define('tableBlog', 'blogs');
define('tableOrders', 'orders');


function getAllCategory()
{
	$data = all(tableCategory);
	return $data;
}

function getAllProduct()
{
	$data = all(tableProduct);
	return $data;
}

function getAllUser()
{
	$data = all(tableUser);
	return $data;
}

function getAllBlog()
{
	$data = all(tableBlog);
	return $data;
}

function getAllOrder()
{
	$data = all(tableOrders);
	return $data;
}

function getTop5()
{
	$data = all(tableProduct, 5);
	return $data;
}

function getAdmin($input)
{
	$data = check('users', $input);
	return $data;
}

function getOrderDone()
{
	$data = findColumn(tableOrders, 'status', 1);
	return $data;
}
