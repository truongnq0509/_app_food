<?php 
loadModel('HomeModel');
$data = null;

function index() {
    global $data;
    view('layouts/index', [
        'content' => 'home/index',
        $data = []
    ]);
}

?>