<?php

declare(strict_types=1);


$num = [1, 3, 2, 5, 6, 8, 7, 9, 4];

usort($num, function($a, $b) {
    return $a > $b;
});

var_dump($num);