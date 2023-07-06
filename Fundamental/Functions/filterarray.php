<?php

$names = ['hristo', 'pesho', 'kremena', 'georgi', 'ivan', 'petq', 'desi'];

function filter(array $array, callable $filterFunction):array {
    $result = [];
    foreach ($array as $value) {
        if ($filterFunction($value) === true){
            $result[] = $value;
        }
    }
    return $result;
}

$some = filter($names, function($name){
    if ($name[0]=='p'){
        return true;
    }
    return false;
});


var_dump($some);