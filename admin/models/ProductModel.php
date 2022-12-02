<?php

define('tableNameProduct', 'products');

function getAllProduct()
{
    $data = all(tableNameProduct);
    // var_dump($data);die;
    return $data;
}


function getOneProduct()
{
    $id = $_GET['id'];
    return find(tableNameProduct, $id);
}


function insert()
{
    // Ma hoa file anh
    $fileName = $_FILES['image']['name'];
    $fileName = explode('.', $fileName);
    $ext = end($fileName);
    $newFile = md5(uniqid()) . '.' . $ext;

    create(tableNameProduct, [
        'category_id' => $_POST['category_id'],
        'name' => $_POST['name'],
        'price' => $_POST['price'],
        'sale' => $_POST['sale'],
        'image' => $newFile,
        'description' => $_POST['description'],
        'quantity' => $_POST['quantity'],
    ]);

    move_uploaded_file($_FILES["image"]["tmp_name"], "../upload/" . $newFile);
}
function deleteProduct()
{
    $id = $_GET['id'];
    remove(tableNameProduct, $id);
}

function updateProduct()
{
    $id = $_POST['id'];
    $newFile = null;
    $fileName = $_FILES['image']['name'];

    if ($fileName == "") {
        $newFile = $_POST['hinhcu'];
    } else {
        $fileName = explode('.', $fileName);
        $ext = end($fileName);
        $newFile = md5(uniqid()) . '.' . $ext;
        move_uploaded_file($_FILES["image"]["tmp_name"], "../upload/" . $newFile);
    }

    updateData(tableNameProduct, $id, [
        'category_id' => $_POST['category_id'],
        'name' => $_POST['name'],
        'price' => $_POST['price'],
        'sale' => $_POST['sale'],
        'image' => $newFile,
        'description' => $_POST['description'],
        'quantity' => $_POST['quantity'],
    ]);
}
