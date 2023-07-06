<?php

/*
1.Създайте скрипт, който изчислява обиколката и площта на кръг, като използва константата
M_PI за стойността на pi.

*/

$rad = 10;

$pi = M_PI;   // константата

$circ = 2 * $pi * $rad;
$area = $pi * $rad * $rad;


echo "The circumference of the circle is: " . number_format($circ, 2, '.') .PHP_EOL; // константата
echo "The area of the circle is: " . number_format($area, 2, '.') .PHP_EOL; // константата