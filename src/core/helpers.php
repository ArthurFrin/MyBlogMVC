<?php

function dump(...$vars){

    foreach($vars as $var){
        echo '<pre>';
        var_dump($var);
        echo '</pre>';
    }
}

function getClassBasename($class){
    $lastBackslash = strripos($class, '\\');
    return substr($class, $lastBackslash + 1);
}

function getNamespace($class){
    $lastBackslash = strripos($class, '\\');
    return substr($class, 0, $lastBackslash);
}

function getSlug($string){
    return str_replace(' ', '-', strtolower(trim($string)));
}
