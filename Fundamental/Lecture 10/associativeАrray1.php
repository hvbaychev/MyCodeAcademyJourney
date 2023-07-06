<?php

/*
Създайте асоциативен масив, който съдържа имената и възрастта на вашите
приятели. Използвайте цикъл foreach, за да отпечатате името и възрастта на всеки
човек.1
*/

$friendArray = ["Pesho" => "35", "Stefan" => "29", "Ali" => "36"];

foreach ($friendArray as $key => $value) {
    echo "The name is: $key, age is: $value".PHP_EOL;
}

