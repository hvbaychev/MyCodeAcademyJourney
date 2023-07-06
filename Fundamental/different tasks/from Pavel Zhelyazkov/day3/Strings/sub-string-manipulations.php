<?php

// strpos/stripos, strpos/strripos, strstr, stristr, strchr,
// str_contains, str_starts_with, str_ends_with

$email = 'Name.surname@mail.co.uk';
echo "Find all . positions in $email\n";
var_dump(strpos($email, '.')); // prints: 4
var_dump(strpos($email, '.', 5)); // prints: 17 (first . after position 4)
var_dump(strpos($email, '.', 18)); // prints: 20 (first . after position 17)
var_dump(strrpos($email, '.')); // prints: 20 (first index from the right to left)

echo "Find all letter 'N' positions in $email (case-insensitive)\n";
var_dump(stripos($email, 'n')); // prints: 0 (Case-insensitive search finds N at first pos)
var_dump(stripos($email, 'n', 2)); // prints: 8 (Case-insensitive search finds n position in surname)

echo "Get string chunks with strstr\n"; 
var_dump(strstr($email, '@')); // prints: @mail.co.uk
var_dump(strstr($email, '@', true)); // prints: Name.surname

echo "Subtract: starting from pos 5, extract count of 5 characters: ";
var_dump(substr($email, 5, 5)); // prints: 'surna';

echo "Starts with word 'Name'? ";
var_dump(str_starts_with($email, 'Name')); // prints: true
echo "Starts with word '.co.uk'? ";
var_dump(str_starts_with($email, '.co.uk')); // prints: false

echo "Ends with word 'Name'? ";
var_dump(str_ends_with($email, 'Name')); // prints: false
echo "Ends with word '.co.uk'? ";
var_dump(str_ends_with($email, '.co.uk')); // prints: true

echo "Contains word 'Mail'? ";
var_dump(str_contains($email, 'Mail')); // prints: false
echo "Contains word 'mail'? ";
var_dump(str_contains($email, 'mail')); // prints: true
?>