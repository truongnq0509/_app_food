<?php 
loadModel('HomeModel');
$data = null;

function index() {
    global $data;
    $products = getAllProducts();
    $categorys = getAllCategory();
    view('layouts/index', [
        'content' => 'home/index',
        $data = [
            'products' => $products,
            'categorys' => $categorys
        ]
    ]);
}

?>