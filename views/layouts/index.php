<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Trang Chủ</title>
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Panda - Ultimate eCommerce Template">
    <meta name="author" content="D-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="./public/front-end/images/icons/favicon.png">
    <!-- Preload Font -->
    <link rel="preload" href="./public/front-end/vendor/fontawesome-free/webfonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="./public/front-end/vendor/fontawesome-free/webfonts/fa-brands-400.woff2" as="font" type="font/woff2" crossorigin="anonymous">

    <script>
        WebFontConfig = {
            google: {
                families: ['Josefin Sans:300,400,600,700']
            }
        };
        (function(d) {
            var wf = d.createElement('script'),
                s = d.scripts[0];
            wf.src = 'js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>
    <link rel="stylesheet" type="text/css" href="./public/front-end/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="./public/front-end/vendor/animate/animate.min.css">
    <!-- Plugin CSS File -->
    <link rel="stylesheet" type="text/css" href="./public/front-end/vendor/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="./public/front-end/vendor/magnific-popup/magnific-popup.min.css">
    <link rel="stylesheet" type="text/css" href="./public/front-end/vendor/nouislider/nouislider.min.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" type="text/css" href="./public/front-end/css/demo1.min.css">
    <link rel="stylesheet" type="text/css" href="./public/front-end/css/style.min.css">
</head>

<body>
    <div class="page-wrapper">
        <?php
            require_once './views/blocks/header.php';
            view($content, $data[0]);
            require_once './views/blocks/footer.php';
        ?>
    </div>
    <?php 
        require_once './views/blocks/responsive.php'
    ?>
</body>

</html>