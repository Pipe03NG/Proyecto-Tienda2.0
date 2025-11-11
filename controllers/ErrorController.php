<?php
require_once 'views/layout/header.php';
require_once 'views/layout/sidebar.php';
require_once 'views/producto/destacados.php';
require_once 'config/parameters.php';
require_once 'autoload.php';

    class errorController{
        
        public function index(){
            echo "<h1>La pagina que buscas no existe</h1>";
        }
    }

?>