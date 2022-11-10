<?php 
loadModel('ShopModel');

$data = null;

function index() {
    global $data;
    $products = getAllProducts();
    $categorys = getAllCategory();

    view('layouts/index', [
        'content' => 'shop/index',
        $data = [
            'products' => $products,
            'categorys' => $categorys,
        ]
    ]);
}


?>