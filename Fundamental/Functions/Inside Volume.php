<?php

$input = readline();

function pointInCordSystem($input) {
    
    $x1 = 10;
    $x2 = 50;
    $y1 = 20;
    $y2 = 80;
    $z1 = 15;
    $z2 = 50;
    
    $array = explode(" ", $input);
    $inputCount = count($array);

    for ($i = 0; $i < $inputCount; $i += 3) {
        $x = floatval($array[$i]);
        $y = floatval($array[$i + 1]);
        $z = floatval($array[$i + 2]);

        
        if ($x >= $x1 && $x <= $x2 && $y >= $y1 && $y <= $y2 && $z >= $z1 && $z <= $z2) {
            return true;
        }
    }

    return false;
}


if (pointInCordSystem($input)) {
    echo 'Inside';
} else {
    echo 'Outside';
}
