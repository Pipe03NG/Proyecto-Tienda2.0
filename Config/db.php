<?php

    class Datbase{
        public static function connect(){
            
        //Conexion local
        
        $db = new mysqli('localhost','root','','tienda');
        $db->query("SET NAMES 'UTF8'");
        return $db;
        }
    }

