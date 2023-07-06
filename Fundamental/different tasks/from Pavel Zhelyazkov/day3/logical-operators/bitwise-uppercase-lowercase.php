<?php

// (Bitwise) UpperCase to LowerCase 

$uppercase_char = 'A';
$lowercase_char = chr(ord($uppercase_char) | 32);
echo $uppercase_char . '->' . $lowercase_char . "\n";

$lowercase_char = 'a';
$uppercase_char = chr(ord($lowercase_char) & ~32);
echo $lowercase_char . '->' . $uppercase_char . "\n";

// Yeah, works!

// but see:
echo 'abc -> '.strtoupper('abc')."\n";
echo 'DEF -> '.strtolower('DEF')."\n";
// Much easier. Huh?

/*
Explanation:

// 0b11111111 = 255 -> 2.1^7 + 2^1.6 ... -> 128+64+32+16+8+4+2+1 (weights for index) = 255

//look below - index weights (vertically)
  1
  2631
  84268421

0b01000001 => 65 (char A)
0b01100001 => 65 + 32 = 97 (char a) - the only change is in the 6th bit 32 -> 0b00100000


so, bitwise 'or' will do the magic -> 
0b01000001 | 
0b00100000
----------
0b01100001 -> i.e. 65 | 32 = 97

The opposite:

0b01100001 => 97 (char a)
0b01000001 => 65 (char A)  -32 -> ~(0b00100000) bitwise not -> 0b11011111 (255 - 32 = 223)

so, bitwise 'and' will do the magic -> 
0b01100001 & 
0b11011111
----------
0b01000001 -> i.e. (which is 97 & ~32 = 97 & 223 = 65)

*/
