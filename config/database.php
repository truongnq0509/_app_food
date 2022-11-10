<?php 

function connectDB() {
    global $conn;
    if(!$conn) {
        try{
            $conn = new PDO("mysql:host=localhost;dbname=devfood_db;chartset=utf8", 'root', '');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo 'Kết nối database ree thất bại lêuuu lêuuu :))'. $e->getMessage();
        }
    }
}

function disconnect() {
    global $conn;
    if($conn) {
        $conn = null;
    }
}


?>