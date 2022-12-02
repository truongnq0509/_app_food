<?php


define('tableNameGalery', 'galery');

function getAllGalery($id)
{
	$data = findColumn(tableNameGalery, 'product_id', $id);
	return $data;
}


function getOneGalery()
{
	$id = $_GET['id'];
	return find(tableNameGalery, $id);
}



function insert($id)
{
	// Ma hoa file anh
	$file = $_FILES['image'];
	$fileNames = $file['name'];

	if (!empty($fileNames)) {
		foreach ($fileNames as $key => $item) {
			$array = explode('.', $item);
			$ext = end($array);
			$newFile = md5(uniqid());
			$newFile .= $newFile . '.' . $ext;

			$fileTmp = $file['tmp_name'][$key];

			move_uploaded_file($fileTmp, "../upload/" . $newFile);
			create(tableNameGalery, [
				'image' => $newFile,
				'product_id' => $id,
			]);
		}
	}
}

function deleteGalery()
{
	$id = $_GET['id'];
	remove(tableNameGalery, $id);
}

function updateGalery($galeryId, $productId)
{
	$newFile = null;
	$fileName = $_FILES['image']['name'];

	if ($fileName == "") {
		$newFile = $_POST['hinhcu'];
	} else {
		$fileName = explode('.', $fileName);
		$ext = end($fileName);
		$newFile = md5(uniqid()) . '.' . $ext;
		move_uploaded_file($_FILES["image"]["tmp_name"], "../upload/" . $newFile);
	}

	updateData(tableNameGalery, $galeryId, [
		'image' => $newFile,
	]);
}
