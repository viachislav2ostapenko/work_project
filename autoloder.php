<?php

spl_autoload_register(function ($class) {
    $parts = explode('_',$class);
    $parts = array_map('lcfirst',$parts);
    $parts[] = ucfirst(array_pop($parts)).'.php';
    $path = BASE_PATH .'/'. implode('/',$parts);
    if(file_exists($path)){
        include $path;
    }

});