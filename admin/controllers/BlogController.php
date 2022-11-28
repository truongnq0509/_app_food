<?php
loadModel('BlogModel');
loadModel('UserModel');


function index()
{
    global $data;
    $blogs = getAllBlog();

    view('layouts/index', [
        'content' => 'blogs/index',
        $data = [
            'blogs' => $blogs
        ]
    ]);
}
function add()
{
    global $data;
    view('layouts/index', [
        'content' => 'blogs/form',
        $data = []
    ]);
}

function saveadd()
{
    insert();
    header("location: index.php?controller=blog");
}

function delete()
{
    deleteBlog();
    header("location: index.php?controller=blog");
}
function edit()
{
    global $data;
    $blog = getOneBlog();
    $user = getAllUser();
    view('layouts/index', [
        'content' => 'blogs/edit',
        $data = [
            'blog' => $blog,
            'user' => $user
        ]
    ]);
}

function update()
{
    updateBlog($_POST);
    header("location: index.php?controller=blog");
}
