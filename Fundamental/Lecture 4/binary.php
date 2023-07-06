<?php

/*
Напишете програма, която отпечатва символът, който отговаря на резултатът от
следващия израз: 0b111100>>(255&~252). Опишете, резултатите си.
*/


$result = 0b111100>>(255&~252);
echo(chr($result));


/*
0b111100 This is a binary number, after checking https://www.rapidtables.com/convert/number/binary-to-decimal.html in decimal is 60 :)
>> is operand which is move the number to the left

255 --> 1 1 1 1 1 1 1 1 
252 --> 0 0 0 0 0 0 1 1   - because this is '~' and reversed from 1 1 1 1 1 1 0 0
        ---------------
        0 0 0 0 0 0 1 1   - use '&'

again check https://www.rapidtables.com/convert/number/binary-to-decimal.html binary to dec = 3 :)

That means we need to move from left to the right '>>' with 3

result is:

111100 >> 3
000111 = 7
*/
