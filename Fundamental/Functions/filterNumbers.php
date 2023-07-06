<?php

declare(strict_types=1);


$num = [1, 4, 100, 22, 334, 28, 250];

$filterNum = array_filter($num, function($number){
    return $number > 100;
});

var_dump($filterNum);