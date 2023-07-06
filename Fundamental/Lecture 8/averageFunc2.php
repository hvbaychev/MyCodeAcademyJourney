<?php

$number = intval(readline());
$newArray = strval($number);

function getAverage($num){
    $average = 0;
    for ($i = 0; $i < strlen($num); $i++){
        $average += $num[$i];
    }
    $average /= 2;   // same but we take average only by /2

    return $average;
}   
echo getAverage($newArray);