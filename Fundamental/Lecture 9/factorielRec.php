<?php


function factorial_recursion($num){
    if ($num < 2){
        return 1;
    }
    return $num * factorial_recursion($num-1);
    
}

echo factorial_recursion(10);