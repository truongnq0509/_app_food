<?php 
loadModel('ProductModel');

$data = null;

function index() {
    global $data;
    $products = getAll();
    $product = getProduct();

    view('layouts/index', [
        'content' => 'products/index',
        $data = [
            'products' => $products,
            'product' => $product,
        ]
    ]);
}


?>