<?php

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];

$countTimes = 0;

foreach ($arr as $value) {
    if ($value % 2 === 0){
        if ($value == 10){
            continue;
        }
        elseif ($countTimes == 5) {
            break;
        }
        $countTimes++;
        echo $value.PHP_EOL;
    }
}