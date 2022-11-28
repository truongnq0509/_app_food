<?php
loadModel('OrderModel');
$data = null;

// Đơn hàng chưa xác nhận
function no()
{
	global $data;
	$orders = getOrderNo();

	view('layouts/index', [
		'content' => 'order/index',
		$data = [
			'orders' => $orders
		]
	]);
}

// Đơn hàng đã xác nhận
function done()
{
	global $data;
	$orders = getOrderDone();
	view('layouts/index', [
		'content' => 'order/index',
		$data = [
			'orders' => $orders
		]
	]);
}

// Form cập nhật đơn hàng
function edit()
{
	global $data;
	$id = $_GET['id'];
	$order = getOrder($id);
	$orderDetail = getOrderDetail($id);

	// Lấy ra id sản phẩm từ chi tiết đơn hàng
	$productId = implode(', ', array_map(function ($value) {
		return $value['product_id'];
	}, $orderDetail));
	$products = getProducts($productId);

	view('layouts/index', [
		'content' => 'order/form',
		$data = [
			'order' => $order,
			'orderDetail' => $orderDetail,
			'products' => $products,
		]
	]);
}

// Cập nhập đơn hàng
function update()
{
	$id = (int)$_GET['id'];
	updateOrder($_POST, $id);
	header('location: index.php?controller=order&action=done');
}

function delete()
{
	$id = (int)$_GET['id'];
	deleteOrder($id);
	header('location: index.php?controller=order&action=no');
}

function info()
{
	global $data;
	$id = $_GET['id'];
	$order = getOrder($id);
	$orderDetail = getOrderDetail($id);

	// Lấy ra id sản phẩm từ chi tiết đơn hàng
	$productId = implode(', ', array_map(function ($value) {
		return $value['product_id'];
	}, $orderDetail));
	$products = getProducts($productId);

	view('layouts/index', [
		'content' => 'order/info',
		$data = [
			'order' => $order,
			'orderDetail' => $orderDetail,
			'products' => $products,
		]
	]);
}
