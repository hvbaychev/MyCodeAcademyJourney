<?php

/*-----------------------------------------------------------------------
Помислете как с цикъл можете да минете през цифрите на едно число и да ги
изпишете една по една, т.е. за числото 2563 трябва да изпишете 2, 5, 6, 3
------------------------------------------------------------------------*/


$number = 2563;

$str_number = strval($number);  // change from number to string
$new_arr = str_split($str_number); // take $str_number and make array and separate each element from others [2, 5, 6, 3]
$str = null; // empty string


foreach ($new_arr as $value) {
    $str .= $value . ",";    // collect information in $str
}

$str = rtrim($str, ",");  // trim last comma element 

echo $str; // 2, 5, 6, 3