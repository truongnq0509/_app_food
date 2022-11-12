<?php 
define("tableUser", 'users');
$data = null;

function checkUser($input) {
	$isCheck = false;
	$user = check(tableUser, $input);
	if(!empty($user)) {
		$_SESSION['user'] = $user;
		$isCheck = true;
	}
	return $isCheck;
}

function addUser($input) {
	create(tableUser, $input);
	return true;
}

?>