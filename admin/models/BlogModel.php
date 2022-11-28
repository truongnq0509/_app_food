<?php
define('tableNameBlog','blogs');

function getAllBlog(){
     $data = all(tableNameBlog);
    return $data;
}
function getOneBlog(){
    $id = $_GET['id'];
    return find(tableNameBlog,$id);
}

function insert(){
    // echo "<pre>";
    // var_dump($_FILES);
    // var_dump($_POST);die;

    create(tableNameBlog,[
        'user_id' => $_POST['user_id'],
        'title' => $_POST['title'],
        'image' => $_FILES['image']['name'],
        'description' => $_POST['description'],
        'created_date' => date("Y-m-d", time()),
    ]);
    move_uploaded_file($_FILES["image"]["tmp_name"], "../upload/" . $_FILES["image"]["name"]);
}

function deleteBlog()
{
    $id = $_GET['id'];
    remove(tableNameBlog, $id);
}


function updateBlog()
{
    global $image;

    $image = $_FILES['image']['name'];

    if ($image == "") {
        $image = $_POST['hinhcu'];
    } else {
        move_uploaded_file($_FILES["image"]["tmp_name"], "../upload/" . $_FILES["image"]["name"]);
    }

    $id = $_POST['user_id'];

    updateData(tableNameBlog, $id, [
        'user_id' => $_POST['user_id'],
        'title' => $_POST['title'],
        'image' => $image,
        'description' => $_POST['description'],
        'created_date' => date("Y-m-d", time()),
    ]);
}







?>