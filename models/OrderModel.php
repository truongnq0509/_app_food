<?php 
define("tableOrder", 'orders');
define("tableOrderDetail", 'order_detail');
date_default_timezone_set('Asia/Ho_Chi_Minh');


function addOrder($input) {
	$order = create(tableOrder, [
		'user_id' => $input['user_id'],
		'fullname' => $input['fullname'],
		'email' => $input['email'],
		'phone' => $input['phone'],
		'address' => $input['address'],
		'note' => $input['note'],
		'order_date' => date("Y-m-d H:i:s", time()),
		'total_money' => $input['total_money'],
		'status' => 0
	]);
	return $order;
}

function addOrderDetail($input) {
	$orderDetail = create(tableOrderDetail, [
		'order_id' => $input['order_id'],
		'product_id' => $input['product_id'],
		'price' => $input['price'],
		'quantity' => $input['quantity'],
	]);
	return $orderDetail;
}

function updateQuantityProduct($products, $id) {
	updateQuantity(tableProduct, $products, $id);
}
