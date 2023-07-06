<?php

/*
Напишете програма, която да отпечата последователно резултатите от проверката
дали някое от изброените числа се дели на 3 и да отпечата всички резултати (отново без
цикли и if): 378, 1537, 2023, 125926 
*/

$number1 = 378;
$number2 = 1357;
$number3 = 2023;
$number4 = 125926;

echo ($number1 % 3 == 0) ? "$number1 is divisible by 3".PHP_EOL : "$number1 is not divisible by 3".PHP_EOL;
echo ($number2 % 3 == 0) ? "$number2 is divisible by 3".PHP_EOL : "$number2 is not divisible by 3".PHP_EOL;
echo ($number3 % 3 == 0) ? "$number3 is divisible by 3".PHP_EOL : "$number3 is not divisible by 3".PHP_EOL;
echo ($number4 % 3 == 0) ? "$number4 is divisible by 3".PHP_EOL : "$number4 is not divisible by 3".PHP_EOL;





