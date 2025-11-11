<?php
function project_autoload($classname){
    if(file_exists('controllers/' . $classname . '.php')){
        include_once 'controllers/' . $classname . '.php';
    } elseif(file_exists('models/' . $classname . '.php')){
        include_once 'models/' . $classname . '.php';
    }
}
spl_autoload_register('project_autoload');
?>