<?php
loadModel('BlogModel');
loadModel('UserModel');


function index(){
    global $data;
    $blog = getAllBlog();

    view('layouts/index',[
        'content' => 'blogs/index',
            $data = [
                'blogs' => $blog
            ]
        ]);

    
}
function add(){
    global $data;

    view('layouts/index',[
        'content' => 'blogs/form',
        $data = [

        ]
    ]);
}

function saveadd(){
    insert();
    header("location: index.php?controller=blog");
}

function delete(){
    deleteBlog();
    header("location: index.php?controller=blog");
}
function edit(){
    global $data;
    $blog = getOneBlog();
    $user = getAllUser();
    // echo "<pre>";
    // var_dump($user);
    // var_dump($blog);die;

    view('layouts/index',[
        'content' => 'blogs/edit',
       $data = [
            'blog' => $blog,
            'user' => $user
        ]
    ]);
}

function update(){
    
    updateBlog();
    header("location: index.php?controller=blog");

}





?>