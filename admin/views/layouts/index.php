<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <!--favicon-->
    <link rel="icon" href="../public/back-end/assets/images/favicon-32x32.png" type="image/png" />
    <!-- Vector CSS -->
    <link href="../public/back-end/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!--plugins-->
    <link href="../public/back-end/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="../public/back-end/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="../public/back-end/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="../public/back-end/assets/css/pace.min.css" rel="stylesheet" />
    <script src="../public/back-end/assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../public/back-end/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&amp;family=Roboto&amp;display=swap" />
    <!-- Icons CSS -->
    <link rel="stylesheet" href="../public/back-end/assets/css/icons.css" />
    <!-- App CSS -->
    <link rel="stylesheet" href="../public/back-end/assets/css/app.css" />


</head>

<body class="bg-theme bg-theme6">
    <div class="wrapper">
        <?php
        if (!isset($_SESSION['user'])) {
            view('login/index');
        } else {
            require_once './views/blocks/header.php';
            view($content, $data[0]);
            require_once './views/blocks/sidebar.php';
        }
        ?>
    </div>
    <?php
    require_once './views/blocks/theme.php';
    ?>


    <script src="../public/back-end/assets/js/jquery.min.js"></script>
    <script src="../public/back-end/assets/js/popper.min.js"></script>
    <script src="../public/back-end/assets/js/bootstrap.min.js"></script>
    <!--plugins-->
    <script src="../public/back-end/assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="../public/back-end/assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="../public/back-end/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <!-- Vector map JavaScript -->
    <script src="../public/back-end/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="../public/back-end/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../public/back-end/assets/plugins/vectormap/jquery-jvectormap-in-mill.js"></script>
    <script src="../public/back-end/assets/plugins/vectormap/jquery-jvectormap-us-aea-en.js"></script>
    <script src="../public/back-end/assets/plugins/vectormap/jquery-jvectormap-uk-mill-en.js"></script>
    <script src="../public/back-end/assets/plugins/vectormap/jquery-jvectormap-au-mill.js"></script>
    <script src="../public/back-end/assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
    <script src="../public/back-end/assets/js/index.js"></script>
    <!-- App JS -->
    <script src="../public/back-end/assets/js/app.js"></script>
    <script src="../public/back-end/assets/js/validator.js"></script>
    <script>
        Validator('#product-form')
        Validator('#product-form--edit')
        Validator('#category-form')
        Validator('#category-form--edit')
        Validator('#blog-form')
        Validator('#blog-form--edit')
        Validator('#login-form')
    </script>
</body>

</html>