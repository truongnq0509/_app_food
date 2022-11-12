<?php 
define('tableCategory', 'categorys');
$data = null;

function getAllCategory() {
    $data = all(tableCategory);
    return $data;
}

function getCategory($id) {
    $data = find(tableCategory, $id);
    return $data;
}


?>