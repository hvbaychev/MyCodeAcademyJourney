<?php

/* Напишете функция, която изчислява сумата от цифрите в положително цяло число, като използвате head recusion. 
Функцията трябва да се извика с останалите цифри и да добави текущата цифра към сумата! */



/*-----------------------------------------> first idea! ---> wrong! Correct result but not with correct function!!!
function sumOfNumbers($num) {
     if ($num <= 0) 
     {
        return 0;  
     }
     if ($num > 0)
     {
        return $num + sumOfNumbers($num - 1);
     }

}

echo sumOfNumbers(5);
*/


function sumOfNumbers($num){
    if ($num > 0){
       return $num + sumOfNumbers($num - 1);
    }
}

echo sumOfNumbers(5);