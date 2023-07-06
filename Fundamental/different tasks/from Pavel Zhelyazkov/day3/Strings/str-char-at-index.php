<?php 
$str = 'abc';
var_dump($str[1]); // prints: 'b'
$str[1] = 'B';
echo var_dump($str); // prints: 'aBc'
?>