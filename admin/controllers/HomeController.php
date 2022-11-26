<?php
loadModel('HomeModel');
$data = null;

function index()
{
    global $data;

    $products = getAllProduct();
    $category = getAllCategory();
    $orders = getAllOrder();
    $blogs = getAllBlog();
    $users = getAllUser();
    $topProduct = getTop5();

    view('layouts/index', [
        'content' => 'home/index',
        $data = [
            'products' => $products,
            'topProduct' => $topProduct,
            'category' => $category,
            'orders' => $orders,
            'blogs' => $blogs,
            'users' => $users,
        ]
    ]);
}
