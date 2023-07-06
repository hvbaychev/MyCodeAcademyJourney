<?php

function bit(int $n, string $bits){
    if ($n === 0){
        echo $bits.PHP_EOL;
        return;
    }
    bit($n - 1, $bits . "0");
    bit($n - 1, $bits . "1");

}

echo bit(3, ' ');