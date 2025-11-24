<?php

require_once 'models/categoriaModels.php';
require_once 'models/productoModels.php';

class categoriaController{
    
    public function index(){
        require_once 'views/categoria/categoria.php';
    }

}