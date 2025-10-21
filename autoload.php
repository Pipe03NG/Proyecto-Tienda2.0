<?php


    function controller_autoload($classname){
        include_once 'controllers/'.$classname.'.php';
    }
    spl_autoload_register('controller_autoload');