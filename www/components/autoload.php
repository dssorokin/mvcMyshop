<?php
/**
 * Created by PhpStorm.
 * User: proJS
 * Date: 16.06.2016
 * Time: 19:46
 */
spl_autoload_register(function($class){
    $paths = array(
        "/models/",
        "/components/"
    );
    foreach($paths as $path){
        $file = ROOT . $path . $class . ".php";
        if(file_exists($file)){
            include_once ($file);
        }
    }

});