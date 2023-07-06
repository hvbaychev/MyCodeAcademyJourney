<?php

function number(int $n, string $bits){
    if ($n === 0){
        echo $bits.PHP_EOL;
        return;
    }
    for ($i = 0; $i < 9; $i++){
        number($n - 1, $bits . $i);
    }
}   

echo number(2, '');