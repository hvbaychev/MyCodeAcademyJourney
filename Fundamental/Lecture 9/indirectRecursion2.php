<?php

/*--------------------------------------------------------------------------
Напишете функция, която проверява дали даден низ е палиндром, използвайки
непряка рекурсия. Функцията трябва да се извиква рекурсивно с първия и
последния символ на низа, докато достигне средата на низа.
---------------------------------------------------------------------------*/
/*------------------------------------------------------------------------------------------------
function palindrome($input, $x = 0){
    $newInput = str_split($input);
    $countArr = count($newInput);
    $newString = [];
    for ($x = 0; $x < $countArr / 2; $x++){
        $newString[] =  $newInput[$countArr - $x - 1];
    }
    return implode('',$newString);
    
}-----------------------------------------------------------------------------------------------------

*/
/*
function palindrome($input, $x = 0){
    $newInput = str_split($input);
    $countArr = count($newInput);
    if ($x == $countArr / 2) {
        return "";
    }
    return  $newInput[($countArr / 2) - $x - 1] . palindrome2($input, $x + 1);
    //return palindrome($input, $x + 1) . $newInput[($countArr / 2) - $x - 1] ;
}



function palindrome2($input, $x = 0){
    $newInput = str_split($input);
    $countArr = count($newInput);
    if ($x == $countArr / 2) {
        return "";
    }
    return  $newInput[($countArr / 2) + $x] . palindrome($input, $x + 1);
}

echo palindrome2("zabcho");
echo palindrome("zabcho");

------------------------------------------------------------------------------------------------------------
*/ 

/*
WRONG BUT A LOT OF LOGIC I WILL SAFE FOR LATER :)
------------------------------------------------------------------------------------------------------------*/