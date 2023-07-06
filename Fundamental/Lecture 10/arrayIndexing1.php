<?php

/*----------------------------------------------------------------------------------
Създайте индексиран масив от числа от 1 до 10, като използвате for цикъл. След това
използвайте цикъл foreach, за да отпечатате всяко число в масива.1
------------------------------------------------------------------------------------*/


$arrIndex = [];

for ($i = 1; $i <= 10; ++$i){
    $arrIndex[] = $i;   // filling an array with INT
}

var_dump($arrIndex);


foreach($arrIndex as $value){
   var_dump($value);   /// int
}


foreach($arrIndex as $key=> $value){
    var_dump("Key -> $key, Value -> $value");  // string
}


