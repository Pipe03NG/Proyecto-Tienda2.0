<?php

require_once 'models/productoModels.php';

class productoController{
    public function index(){
        $producto = new ProductoModels();
        $productos = $producto->getAll(6);
        
        require_once 'views/producto/destacados.php';
    }
}
?>