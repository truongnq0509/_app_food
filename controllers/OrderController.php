<?php
loadModel('OrderModel');
loadModel('ProductModel');
$data = null;

function index()
{
	global $data;
	$productsId = implode(',', array_keys($_SESSION['cart'] ?? []));
	if ($productsId) {
		$products = getProductByIn($productsId);
	} else {
		$products = [];
	}

	view('layouts/index', [
		'title' => 'Đặt Hàng',
		'content' => 'order/index',
		$data = [
			'products' => $products,
		]
	]);
};

function add()
{

	if (!empty($_SESSION['user']) && !empty($_SESSION['cart'])) {
		$total = 0;
		$productsId = implode(',', array_keys($_SESSION['cart']));

		if ($productsId) {
			$products = getProductByIn($productsId);
			// Đặt đơn hàng
			foreach ($products as $product) {
				if ($product['sale']) {
					$price = $product['sale'];
					$total += $_SESSION['cart'][$product['id']] * $product['sale'];
				} else {
					$price = $product['price'];
					$total += $_SESSION['cart'][$product['id']] * $product['price'];
				}
			}
			$_POST['total_money'] = $total;
			$orderId = addOrder($_POST);
			// Đặt chi tiet
			foreach ($products as $product) {
				if ($product['sale']) {
					$price = $product['sale'];
				} else {
					$price = $product['price'];
				}
				addOrderDetail([
					'order_id' => (int)$orderId,
					'product_id' => $product['id'],
					'price' => $price,
					'quantity' => $_SESSION['cart'][$product['id']],
					'total_money' => $price
				]);
			}
			// Update số lượng trong kho
			updateQuantityProduct($products, $productsId);
			// Remove giỏ hàng
			unset($_SESSION['cart']);
			header('location: index.php?controller=order');
			echo "<script>alert('Bạn đã đặt hàng thành công')</script>";
		}
	} else {
		echo "<script>alert('Vui lòng đăng nhập để đặt hàng hoặc là trong giỏ không có hàng')</script>";
		echo '<script>window.location="index.php?controller=order"</script>';
	}
}
