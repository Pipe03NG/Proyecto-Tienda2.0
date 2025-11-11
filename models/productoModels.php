<?php

require_once 'config/db.php';

class ProductoModels
{
    private $id_producto;
    private $nombre_producto;
    private $descripcion;
    private $precio;
    private $stock;
    private $oferta;
    private $fecha;
    private $imagen;
    private $id_categoria;
    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    public function getIdProducto()
    {
        return $this->id_producto;
    }

    public function getNombreProducto()
    {
        return $this->nombre_producto;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function getStock()
    {
        return $this->stock;
    }

    public function getOferta()
    {
        return $this->oferta;
    }

    public function getFecha()
    {
        return $this->fecha;
    }

    public function getImagen()
    {
        return $this->imagen;
    }

    public function getIdCategoria()
    {
        return $this->id_categoria;
    }

    public function setIdProducto($id_producto)
    {
        $this->id_producto = $id_producto;
    }

    public function setNombreProducto($nombre_producto)
    {
        $this->nombre_producto = $nombre_producto;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }

    public function setStock($stock)
    {
        $this->stock = $stock;
    }

    public function setOferta($oferta)
    {
        $this->oferta = $oferta;
    }

    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
    }

    public function setIdCategoria($id_categoria)
    {
        $this->id_categoria = $id_categoria;
    }

    public function getAll(){
        $productos = $this->db->query("SELECT * FROM t_productos ORDER by id_producto DESC");
        return $productos;
    }
}