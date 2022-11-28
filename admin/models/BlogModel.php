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
    create(tableNameBlog, [
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


function updateBlog($input)
{
    global $image;

    $image = $_FILES['image']['name'];

    if ($image == "") {
        $image = $_POST['hinhcu'];
    } else {
        move_uploaded_file($_FILES["image"]["tmp_name"], "../upload/" . $_FILES["image"]["name"]);
    }

    $id = $input['id'];
    updateData(tableNameBlog, $id, [
        'title' => $input['title'],
        'image' => $image,
        'description' => $input['description'],
        'created_date' => $input['created_date'],
    ]);
}
