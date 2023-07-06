<?php

$matrix = [[1,3,4], [7,6,14], [23,67,89]];

$biggestNumber = $matrix[0][0];
$minNumber = $matrix[0][0];

foreach ($matrix as $row) {
    foreach ($row as $column){
        if ($column > $biggestNumber){
            $biggestNumber = $column;
        }
        if ($column < $minNumber){
            $minNumber = $column;
        }
    }
}
echo $biggestNumber.PHP_EOL;
echo $minNumber.PHP_EOL;
var_dump($matrix).PHP_EOL;