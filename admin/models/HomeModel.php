<?php

// function getHome(){
//     $sql = "SELECT products.image,products.name,products.price,products.sale, order_detail.quantity FROM products INNER JOIN order_detail ORDER BY order_detail.quantity DESC LIMIT 3";
//     // var_dump($sql);die;
//     $data = executeSingle($sql);

//     return $data;
// }

function getHome(){
    $sql = "SELECT * FROM products ORDER BY quantity DESC LIMIT 3";
    // var_dump($sql);die;
    $data = executeSingle($sql);

    return $data;
}





?>