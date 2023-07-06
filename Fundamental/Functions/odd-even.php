<?php


function isEven(int $input):bool {
    return $input % 2 == 0;
  // $result = $input % 2 == 0;
   //return $result;
}


$input = intval(readline());

echo isEven($input);
echo isEven(10);