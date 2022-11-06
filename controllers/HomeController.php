<?php 
loadModel('HomeModel');
$data = null;

function index() {
    global $data;
    $categorys = getCategory();
    $products = getProduct();
    view('layouts/index', [
        'content' => 'home/index',
        $data = [
            'categorys' => $categorys,
        ]
    ]);
}

?>