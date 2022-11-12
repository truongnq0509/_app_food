<?php 
loadModel('ProductModel');
loadModel('CategoryModel');
$data = null;

function index() {
    global $data;
    $products = getAllProducts();
    $categorys = getAllCategory();
    view('layouts/index', [
        'title' => 'Trang Chủ',
        'content' => 'home/index',
        $data = [
            'products' => $products,
            'categorys' => $categorys
        ]
    ]);
}

?>