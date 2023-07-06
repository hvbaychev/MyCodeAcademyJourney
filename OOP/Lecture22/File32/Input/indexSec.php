<?php

spl_autoload_register('myAutoLoader');


function myAutoLoader($className){
    $path = '\StructureSecond\\';
    $extension = '.class.php';
    $fullPath = __DIR__ . $path . $className. $extension;

    if (!file_exists($fullPath)){
        return false;
    }

    include $fullPath;
}



$globals = new GlobalSecond();
$globals['post'] = ['name' => 'Hristo', 'email' => 'hristo@post.bg'];

var_dump($globals->post);

