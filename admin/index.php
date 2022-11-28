<?php 
    // connect database
    session_start();
    require '../config/database.php';
    require './models/BaseModel.php';
    require './controllers/BaseController.php';

    $controllerName = (ucfirst($_GET['controller'] ?? 'home')) . 'Controller';
    $actionName = $_GET['action'] ?? 'index';

    require "./controllers/$controllerName.php";

    $actionName();

    ?>
</body>


