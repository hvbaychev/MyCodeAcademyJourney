<?php

$y = 5;

$fn1 = fn($x) => $x + $y;   // arrow or fn
$fn2 = function ($x) use ($y) {  //anonymous
};

var_export($fn1(3).PHP_EOL);

var_export($fn2(3));
?>