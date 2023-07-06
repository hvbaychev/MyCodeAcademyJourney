<?php

/* Напишете функция, която отпечатва стринг в обратен ред, използвайки head recursion.
Функцията трябва да се самоизвиква с останалите символи и да отпечатва текущият знак в края! 
*/

/*  ------------------------------------------------->>> normal function for practice
function reverseString($input){
    $newInput = str_split($input);
    $count = count($newInput);
    $newString = [];
    for ($i = 0; $i < $count; $i++){
        $newString[] = $newInput[$count - $i - 1]; 
    }
    return implode('',$newString);
}

echo reverseString("zabcho");
*/


function reverseString($input, $i = 0){
    $newInput = str_split($input);
    $countArr = count($newInput);
    if ($i == $countArr) {
        return "";
    }
    return  $newInput[$countArr - $i - 1]. reverseString($input, $i + 1);  // if return reverseString($input, $i + 1) . $newInput[$countArr - $i - 1] text shut be zabcho
}


echo reverseString("zabcho");




function reverseString($input) {
    $newInput = str_split($input);
    $countArr = count($newInput);
    if ($countArr == 0) {
        return "";
    }
    return reverseString(substr($input, 1)) . $newInput[0];
}

echo reverseString("zabcho");
