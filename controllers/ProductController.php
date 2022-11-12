<?php 
loadModel('ProductModel');
loadModel('CategoryModel');
$data = null;

function index() {
    global $data;
    $products = getAllProducts();
    $categorys = getAllCategory();

    view('layouts/index', [
		'title' => 'Tất Cả',
        'content' => 'products/index',
        $data = [
            'products' => $products,
            'categorys' => $categorys,
        ]
    ]);
}


function detail() {
	global $data;
	$id = $_GET['id'];
	$product = getProduct($id);
	$productByCategory = getProductByCategory($product['id'], $product['category_id']);

	view('layouts/index', [
		'title' => 'Chi Tiết Sản Phẩm',
		'content' => 'products/_detail',
		$data = [
			'product' => $product,
			'productByCategory' => $productByCategory
		]
	]);
}

?>