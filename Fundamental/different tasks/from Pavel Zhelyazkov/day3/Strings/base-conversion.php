<?php

var_dump(dechex(65)); // prints: '41'
var_dump(hexdec('41')); // prints: 65

var_dump(bindec('01000001')); // prints: 65
var_dump(decbin(65)); // prints: '1000001'

$hex = bin2hex('Hello world!');
var_dump($hex);
var_dump(hex2bin($hex));

?>
