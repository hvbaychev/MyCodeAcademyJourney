<?php

/*
Напишете програма, която да провери в няколко последователни стъпки (без
използване на оператори за цикъл, и if) дали посоченото число е просто, като се
отпечатват резултатите от всяка проверка. Числа: n1=4, n2=7
Просто число е това, което се дели на себе си и на единица
*/


$number1 = 4;
$number2 = 7;

echo "check: $n1:\n";
echo ($number1 > 1 && $number1 % 2 != 0 && $number1 % $number1 == 0 && $number1 % 1 == 0) ? "$number1 simple number" : "$number1 is not simple number";
/* 
   if number is bigger then 1;
   if number % 2 is different from 0;
   if number % number is 0;
   if number % 1 is = 0;
   ternary operator '?' for comparison, if is true = simple number if is not = is not simple number
*/

echo "\n\ncheck: $n2:\n";
echo ($number2 > 1 && $number2 % 2 != 0 && $number2 % $number2 == 0 && $number2 % 1 == 0) ? "$n2 simple number" : "$n2 is not simple number";
?>


