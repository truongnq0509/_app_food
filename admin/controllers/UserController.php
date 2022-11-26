<?php
loadModel('UserModel');

function index(){

    global $data;
        $user = getAllUser();
        
        view('layouts/index',[
            'content' => 'users/index',
            $data = [
                'users' => $user
            ]
        ]);
}

function delete(){
    // var_dump($_GET['id']);
    // var_dump($_GET);die;
    deleteUser();
    header("location: index.php?controller=user");

}


?>