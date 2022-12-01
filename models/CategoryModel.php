<?php
define('tableCategory', 'categorys');
$data = null;

function getAllCategory()
{
    $data = executeSingle("SELECT * FROM categorys WHERE id != 15");
    return $data;
}

function getCategory($id)
{
    $data = find(tableCategory, $id);
    return $data;
}

function filterProduct($option)
{
    $option = (int)$option;

    switch ($option) {
        case 1:
            // giá tăng dần
            $data = executeSingle("SELECT * FROM products ORDER BY sale ASC");
            break;

        case 2:
            // giá giảm dần
            $data = executeSingle("SELECT * FROM products ORDER BY sale DESC");
            break;

        case 3:
            // tên a-z
            $data = executeSingle("SELECT * FROM products ORDER BY name ASC");
            break;

        case 4:
            // tên z-a
            $data = executeSingle("SELECT * FROM products ORDER BY name DESC");
            break;

        case 5:
            // sản phẩm cũ nhất
            $data = executeSingle("SELECT * FROM products ORDER BY id ASC");
            break;

        case 6:
            // sản phẩm mới nhất
            $data = executeSingle("SELECT * FROM products ORDER BY id DESC");
            break;

        case 7:
            // tồn kho giảm dần
            $data = executeSingle("SELECT * FROM products ORDER BY quantity DESC");
            break;

        default:
            echo 'Nothing';
            break;
    }

    return $data;
}
