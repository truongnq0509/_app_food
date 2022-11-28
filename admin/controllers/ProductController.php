<?php
loadModel('ProductModel');

function index()
{
    // echo "hello";die;
    // echo "<pre>";
    // var_dump($_SESSION);die;

    global $data;
    $products = getAllProduct();
    view('layouts/index', [
        'content' => 'products/index',
        $data = [
            'products' => $products
        ]
    ]);
}

function add()
{

    global $data;
    view('layouts/index', [
        'content' => 'products/form',
        $data = []
    ]);
}
function saveadd()
{

    insert();

    header("location: index.php?controller=product&action=index");
}
function delete()
{

    deleteProduct();
    header("location: index.php?controller=product&action=index");
}

function edit()
{
    global $data;
    $product = getOneProduct();
    view('layouts/index', [
        'content' => 'products/edit',
        $data = [
            'product' => $product
        ]
    ]);
}

function update()
{
    updateProduct();
    header("location: index.php?controller=product&action=index");
}
