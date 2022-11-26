<?php 
define('tableNameUser','users');

function getAllUser(){
     $data = all(tableNameUser);
     // var_dump($data);die;
     return $data;
}
function deleteUser(){
     $id = $_GET['id'];
     // var_dump($id);die;
     remove(tableNameUser,$id);
}




?>