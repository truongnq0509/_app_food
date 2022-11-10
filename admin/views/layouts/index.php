<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chu</title>
</head>
<body>
    <?php 
        require_once './views/blocks/header.php';
        view($content, $data[0]);
        require_once './views/blocks/sidebar.php';
    ?>
</body>
</html>