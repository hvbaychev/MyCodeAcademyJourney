<?php

$number = intval(readline());   // if we receive str we can calculate directly w/o parse and shut be echo getAverage($number);
$newArray = strval($number);   // if we receive int or float, need to parse to str and give for (function echo getAverage($newArray);)  

function getAverage($num){    // make a function
    $average = 0;  // value of average
    for ($i = 0; $i < strlen($num); $i++){  // for cycle and $i < strlen($num) this show how is long the string/int/float 
        $average += $num[$i];  // when $i incr we receive the index of element ($num[$i]) and the value of it (ex. if number is 123 for first iteration shut be 1,second 2, tr - 3)
    } // and we collect the all sum in $average
    $average /= strlen($num);  // we need to take average of number ... the lenght of number take from strlen and receive the average by len

    return $average;
}   
echo getAverage($newArray);  // we call the function