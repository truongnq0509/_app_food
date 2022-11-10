<?php 
loadModel('HomeModel');
$data = null;

function index() {
    global $data;
    $categorys = getCategory();
    view('layouts/index', [
        'content' => 'home/index',
        $data = [
            'categorys' => $categorys,
        ]
    ]);
}

?>