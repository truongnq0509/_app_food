<?php
loadModel('HomeModel');
loadModel('DetailModel');
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
    // $total = totalOrder();

    view('layouts/index', [
        'content' => 'home/index',
        $data = [
            'products' => $products,
            'topProduct' => $topProduct,
            'category' => $category,
            'orders' => $orders,
            'blogs' => $blogs,
            'users' => $users,
            // 'total' => $total,
        ]
    ]);
}

function login()
{
    global $data;
    $_POST['password'] = md5($_POST['password']);
    $_POST['role_id'] = 1;

    $user = getAdmin($_POST);

    if (!empty($user)) {
        $_SESSION['user'] = $user;
    }
    echo '<script>window.location.assign("index.php")</script>';
}

function logout()
{
    if (!empty($_SESSION['user'])) {
        unset($_SESSION['user']);
        echo '<script>window.location.assign("index.php")</script>';
    }
}
