<?php

/*--------------------------------------------------------------------------
Напишете PHP скрипт, който използва do-while цикъл, за да изчисли сумата от
цифрите на дадено число.
---------------------------------------------------------------------------*/


$number = 123;
$sum = 0;
do {
    $result = $number % 10;   // take the last element  12 (2)  // now $number is 1  .. 1 % 10 = 1
    $sum += $result;   // collect result in sum = 2 // sum is 1 and 2 + 1 = 3
    $number = (int)($number / 10);  // 12 / 10  to assign new value to $number = (int)1.2 = 1  // 1 / 10 = 0.1 (int)0 
} while ($number > 0);  // number > 0 --> finish the program
echo "The sum is: $sum";  // print the code

