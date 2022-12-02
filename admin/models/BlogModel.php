<?php
define('tableNameBlog', 'blogs');

function getAllBlog()
{
    $data = all(tableNameBlog);
    return $data;
}
function getOneBlog()
{
    $id = $_GET['id'];
    return find(tableNameBlog, $id);
}

function insert()
{
    // Ma hoa file anh
    $fileName = $_FILES['image']['name'];
    $fileName = explode('.', $fileName);
    $ext = end($fileName);
    $newFile = md5(uniqid()) . '.' . $ext;

    create(tableNameBlog, [
        'title' => $_POST['title'],
        'image' => $newFile,
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


function updateBlog($input)
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

    $id = $input['id'];
    updateData(tableNameBlog, $id, [
        'title' => $input['title'],
        'image' => $newFile,
        'description' => $input['description'],
        'created_date' => $input['created_date'],
    ]);
}
