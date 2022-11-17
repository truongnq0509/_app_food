<?php 
define("tabelOrder", 'orders');
define("tabelProduct", 'products');
define("tabelOrderDetail", 'order_detail');

function getOrderNo() {
	$data = findColumn(tabelOrder, 'status', 0);
	return $data;
}

function getOrderDone() {
	$data = findColumn(tabelOrder, 'status', 1);
	return $data;
}

function getOrder($id) {
	$data = find(tabelOrder, $id);
	return $data;
}

function getOrderDetail($id) {
	$data = findColumn(tabelOrderDetail, 'order_id', $id);
	return $data;
}

function getProducts($id) {
	$data = getIn(tabelProduct, $id);
	return $data;
}

function updateOrder($input, $id) {
	updateData(tabelOrder, $id, [
		'fullname' => $input['fullname'],
		'phone' => $input['phone'],
		'address' => $input['address'],
		'note' => $input['note'],
		'order_date' => $input['order_date'],
		'status' => $input['status'][0],
	]);
	updateQuantity(tabelProduct, [
		'order_id' => $id,
		'quantity' => $input['quantity'],
	]);
}

function deleteOrder($id) {
	remove(tabelOrder, $id);
}


?>