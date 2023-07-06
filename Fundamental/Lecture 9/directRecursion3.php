<?php


/*
Напишете функция, която брои броя на цифрите в положително цяло число,
използвайки директна рекурсия.
*/


function countNumbers($num){
    if ($num < 10){
        return 1;
    }
    return 1 + countNumbers(intdiv($num, 10));
}

echo countNumbers(2132131321312);
