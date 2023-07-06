<?php

$input = readline();

function  is_palindrome($a):bool{
    $revStr = strrev($input);
    if ($a === $revStr){
        return True;
    }
    return False;
}

if (is_palindrome($input, $newInput)){
    echo 'is palindrome';
}
else{
    echo 'is not palindrome';
}