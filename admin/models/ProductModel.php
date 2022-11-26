<?php

    define('tableNameProduct','products');

function getAllProduct(){
    $data = all(tableNameProduct);
    // var_dump($data);die;
    return $data;
}


function getOneProduct(){
    $id = $_GET['id'];
    return find(tableNameProduct,$id);

}


function insert(){
    // var_dump($_POST);die;
    create(tableNameProduct,[
            'category_id' => $_POST['category_id'],
            'name' => $_POST['name'],
            'price' => $_POST['price'],
            'sale' => $_POST['sale'],
            'image' => $_FILES['image']['name'],
            'description' => $_POST['description'],
            'quantity' => $_POST['quantity'],
            'created_date' => $_POST['created_date']
    ]);

    move_uploaded_file($_FILES["image"]["tmp_name"], "../upload/" . $_FILES["image"]["name"]);
}
    function deleteProduct(){
        $id = $_GET['id'];
        remove(tableNameProduct,$id);

    }

    function updateProduct(){
        global $image;

        // echo "<pre>";
        // var_dump($_FILES);
        // var_dump($_POST);die;

        $image = $_FILES['image']['name'];
        // var_dump($image);die;

        if($image == ""){
            $image = $_POST['hinhcu'];

        } else{
            move_uploaded_file($_FILES["image"]["tmp_name"], "../upload/" . $_FILES["image"]["name"]);
        }

        $id = $_POST['id'];

        // var_dump($_POST['id']);die;
        updateData(tableNameProduct,$id,[
            'category_id' => $_POST['category_id'],
            'name' => $_POST['name'],
            'price' => $_POST['price'],
            'sale' => $_POST['sale'],
            'image' => $image,
            'description' => $_POST['description'],
            'quantity' => $_POST['quantity'],
            'created_date' => $_POST['created_date']
        ]);
    }

?>