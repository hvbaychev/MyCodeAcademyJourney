<?php
/*------------------------------------------------------------------------------
Създайте функция, която приема индексиран масив от числа като параметър и връща
сумата от всички числа в масива.1
---------------------------------------------------------------------------------*/


function sumArray($array){
    $newArr = array_map('intval', str_split($array));
    $sum = 0;
    if ($array >= 0){
    foreach ($newArr as $number) {
        $sum += $number;
        }
    }
    if ($array < 0){
        foreach ($newArr as $number) {
        $sum -= $number;
        }
    }
    return $sum;
}

echo sumArray(-912);
