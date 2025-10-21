<?php

    class Datbase{
        //Conexion local
        //prueba

        $db = new msqly('localhost','root','','tienda');
        $db->query("SET NAMES 'UTF8'");
        return $db;
    }