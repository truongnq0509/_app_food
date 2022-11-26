<?php 
loadModel('HomeModel');
$data = null;

function index() {
    global $data;
    $data = getHome();
    // echo "<pre>";
    // var_dump($data);die;
    view('layouts/index', [
        'content' => 'home/index',
        $data = [
            'homes' => $data
        ]
    ]);
}

?>