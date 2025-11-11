<?php

require_once 'views/layout/header.php';
require_once 'views/layout/sidebar.php';
require_once 'views/producto/destacados.php';
require_once 'config/parameters.php';
require_once 'autoload.php';

function show_erro(){
    $error = new errorController();
    $error->index();
}

if(isset($_GET['controller'])) {
    $nombre_controlador = $_GET['controller'] . 'Controller';
} elseif(!isset($_GET['controller']) && !isset($_GET['action'])) {
    $nombre_controlador = controller_default;
} else{
    show_erro();
    exit();
}

if(class_exists($nombre_controlador)){
    $controller = new $nombre_controlador();

    if(isset($_GET['action']) && method_exists($controller, $_GET['action'])){
        $action = $_GET['action'];
        $controller->$action();
    } elseif(!isset($_GET['controller']) && !isset($_GET['action'])) {
        $action_default = action_default;
        $controller->$action_default();
    } else{
        show_erro();
    }
} else{
    show_erro();
}

require_once 'views/layout/footer.php';