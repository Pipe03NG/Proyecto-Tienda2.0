<?php

class Producto{
    private $id;
    private $nombre;
    private $descripcion;
    private $precio;
    private $stock;
    private $categoria_id;
    private $imagen;

    private $db;

    public function __construct(){

        $this->db = Database::connect();
    }

// GETTERS
    function getId(){
        return $this->id;
    }

    function getNombre(){
        return $this->nombre;
    }

    function getDescripcion(){
        return $this->descripcion;
    }

    function getPrecio(){
        return $this-> precio;
    }

    function getStock(){
        return $this-> stock;
    }

    function getoferta(){
        return $this-> oferta;
    }

    function getImagen(){
        return $this-> imagen;
    }
    function getid_categoria(){
        return $this-> id_categoria;
    }


// SETTERS
    function setId($id){
        $this->id = $id;
    }

    function setNombre($nombre){
        $this->nombre = $nombre;
    }

    function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }

    function setPrecio($precio){
        $this->precio = $precio;
    }

    function setStock($stock){
        $this->stock = $stock;
    }

    function setoferta($oferta){
        $this->oferta = $oferta;
    }

    function setImagen($imagen){
        $this->imagen = $imagen;
    }

    function setid_categoria($id_categoria){
        $this->id_categoria = $id_categoria;
    }

    public function getAll(){
        $productos = $this->db->query("SELECT * FROM t_productos ORDER BY id_producto DESC;");
        return $productos;
    }


}