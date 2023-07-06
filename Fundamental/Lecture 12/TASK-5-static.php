<?php

/*
5. Създайте функция - алтернатор с помощта на статична променлива. Функцията трябва да
редува две стойности при всяко извикване. Жокер: използвайте свойството на оператора %
да връща остатък 0 или 1 (пр.: 1%2 = 1, 2%2 = 0, 3%2 = 1 и т.н.)
*/



function alternator($var1, $var2){
    static $num = 0;
    $num++;
    return ($num % 2 === 0) ? $var1 : $var2;
}


echo alternator(1, 0);  //0
echo alternator(1, 0);  //1
echo alternator(1, 0);  //0
echo alternator(1, 0);  //1
echo alternator(1, 0);  //0
echo alternator(1, 0);  //1
