<?php
loadModel('CartModel');
loadModel('ProductModel');
$data = null;

function index() {
	global $data;
	$products = [];
	if (isset($_SESSION['cart'])) {
		$productsId = implode(',', array_keys($_SESSION['cart']));
		if ($productsId) {
			$products = getProductByIn($productsId);
		}
	}
	
	view('layouts/index', [
		'title' => 'Giỏ Hàng',
		'content' => 'cart/index',
		$data = [
			'products' => $products,
		]
	]);
}

// Thêm vào giỏ hàng 
function store()
{
	$quantityDetail = 1;
	$productId = $_GET['id'] ?? null;

	if (!array_key_exists($productId, $_SESSION['cart'] ?? [])) {
		$_SESSION['cart'][$productId] = $quantityDetail;
	} else {
		$quantityDetail += $_SESSION['cart'][$productId];
		$_SESSION['cart'][$productId] = $quantityDetail;
	}
	header('location: index.php?controller=cart');
}

function delete()
{
	$productId = $_GET['id'] ?? null;
	unset($_SESSION['cart'][$productId]);
	header('location: index.php?controller=cart');
}

function update()
{
	foreach ($_POST['quantity'] as $id => $quantity) {
		if ($quantity == 0) {
			unset($_SESSION['cart'][$id]);
		} else {
			$product = getProduct($id);
			$_SESSION['cart'][$id] = $quantity;

			if ($product['quantity'] < $_SESSION['cart'][$id]) {
				$_SESSION['cart'][$id] = $product['quantity'];
			}
		}
	}
	header('location: index.php?controller=cart');
}
