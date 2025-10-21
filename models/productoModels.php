<?php
//require_once 'models/productoModels.php';//

class productocontroller{
    public function index(){
        $producto = new Producto();
        $productos = $producto->getRandom(6);
        require_once 'views/producto/destacados.php';
    }
}