
<?php 
loadModel('ProductModel');
    function index(){
        // echo "hello";die;
        // echo "<pre>";
        // var_dump($_SESSION);die;

        global $data;
        $product = getAllProduct();
        view('layouts/index',[
            'content' => 'products/index',
           $data = [
                'products' => $product
            ]
        ]);
    }

    function add(){

        global $data;
        view('layouts/index',[
            'content' => 'products/form',
            $data = []
        ]);
    }
    function saveadd(){
        
        insert();

        header("location: index.php?controller=product&action=index");
    }
    function delete(){
   
        deleteProduct();
        header("location: index.php?controller=product&action=index");
    }

    function edit(){
        // var_dump($_GET);die;
        global $data;
        $product = getOneProduct();
        // echo "<pre>";
        // var_dump($product);die;

        view('layouts/index',[
            'content' => 'products/edit',
           $data = [
                'products' => $product
            ]
        ]);
    }

    function update(){
        // global $oldImage;
        // $oldImage = $_POST['hinhcu'];
        // if($oldImage = ""){
        //     $oldImage = $_POST['hinhcu'];
        // } else{
        //     move_uploaded_file($_FILES["image"]["tmp_name"], "../upload/" . $_FILES["image"]["name"]);
        // }
        // var_dump($_POST['hinhcu']);
        // var_dump($_POST);die;
        updateProduct();
        header("location: index.php?controller=product&action=index");
    }


?>