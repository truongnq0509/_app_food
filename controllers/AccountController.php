<?php 
loadModel('AccountModel');
$data = null;

function index() {
	global $data;
    $isCheck = false;
    $message = true;
    view('layouts/index', [
        'title' => 'Tài Khoản',
        'content' => 'account/index',
		$data = [
            'isCheck' => $isCheck,
            'message' => $message
        ]
    ]);
}

function login() {
    global $data;
    $_POST['password'] = md5($_POST['password']);
    $isCheck = false;
    $message = checkUser($_POST);

    view('layouts/index', [
        'title' => 'Đăng Nhập',
        'content' => 'account/index',
        $data = [
            'message' => $message,
            'isCheck' => $isCheck
        ]
    ]);

    if($message) {
        echo '<script>window.location="index.php"</script>';
    }
}

function logout() {
    global $data;
    $isCheck = false;
    $message = false;
    if(!empty($_SESSION['user'])) {
        unset($_SESSION['user']);
        unset($_SESSION['cart']);
        $message = true;
    }

    view('layouts/index', [
        'title' => 'Đăng Nhập',
        'content' => 'account/index',
        $data = [
            'message' => $message,
            'isCheck' => $isCheck
        ]
    ]);
}

function register() {
    global $data;
    $_POST['password'] = md5($_POST['password']);
    $message = true;
    $isCheck = addUser($_POST);

    view('layouts/index', [
        'title' => 'Đăng Nhập',
        'content' => 'account/index',
        $data = [
            'isCheck' => $isCheck,
            'message' => $message
        ]
    ]);
    echo '<script>window.location="index.php?controller=account"</script>';
}

?>