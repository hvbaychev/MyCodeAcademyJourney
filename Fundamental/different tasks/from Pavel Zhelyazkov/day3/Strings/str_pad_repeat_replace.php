<?php

echo "Write 'I`m sorry' 10 times!\n"; 
// Okay! No problem!
var_dump(str_repeat("I`m sorry! ", 10));

echo "\n";

echo 'Add leading zeros to fill-up binary to a byte: ';
var_dump(str_pad('101', 8, '0')); // prints: '10100000' Ooops! Add leading zeros!
var_dump(str_pad('101', 8, '0', STR_PAD_LEFT)); // prints: '00000101'

echo "\n";

echo 'Replace text: ';
$text = "Car is meowing!";
var_dump(str_replace('Car', 'Cat', $text)); // prints: 'Car is meowing!'

echo "\n";

echo 'Shuffle text: ';
var_dump(str_shuffle($text));