<?php
loadModel('OrderModel');
loadModel('ProductModel');
require './mail/sendemail.php';
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
		$html = '';
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
				]);
			}
			// Update số lượng trong kho
			updateQuantityProduct($products, $productsId);

			// Gửi email đến khách Hàng
			$title = 'Bạn đã đặt hàng tại Dev Food thành công !!!';
			$content = '<p>Cảm ơn bạn đã đặt hàng &#10084; &#10084; &#10084;</p>';
			$email = $_SESSION['user']['email'];

			foreach ($products as $product) {
				if ($product['sale']) {
					$price = $product['sale'];
				} else {
					$price = $product['price'];
				}

				$quantity = $_SESSION['cart'][$product['id']];

				$content .=
					'
				<div style="border-bottom: 1px solid #ccc; margin-top: 6px; width: 400px;"> 
					<p style="margin-left: 16px;">&#10003; ' . $product['name'] . ' &#10007; ' . $quantity . '</p>
					<p style="margin-left: 16px;">&#8858; ' . number_format($price, 0, ',', '.') . ' VNĐ</p>
				</div>
				';
			}
			$content .= '<div style="margin-top: 16px;">Tổng tiền: ' . number_format($total, 0, ',', '.') . ' VNĐ</div>';

			Mailer($email, $title, $content);
			header('location: index.php?controller=order&action=checkout');
		}
	} else {
		echo "<script>alert('Vui lòng đăng nhập để đặt hàng hoặc là trong giỏ không có hàng')</script>";
		echo '<script>window.location="index.php?controller=order"</script>';
	}
}

function checkout()
{
	global $data;
	$productsId = implode(',', array_keys($_SESSION['cart'] ?? []));

	if ($productsId) {
		$products = getProductByIn($productsId);
	}

	view('layouts/index', [
		'title' => 'Hoàn Thành Đơn Hàng',
		'content' => 'order/check',
		$data = [
			'products' => $products,
		]
	]);
}
