<?php

$A = false;
$B = false;
var_dump(!($A || $B));
var_dump(!$A && !$B);

$A = false;
$B = true;
var_dump(!($A || $B));
var_dump(!$A && !$B);

$A = true;
$B = false;
var_dump(!($A || $B));
var_dump(!$A && !$B);

$A = true;
$B = true;
var_dump(!($A || $B));
var_dump(!$A && !$B);

/*

De Morgan's Laws

Prove that: !(A || B) = !A && !B

A    B     A || B  !(A || B)
0    0        0         1
0    1        1         0
1    0        1         0
1    1        1         0

!A   !B     !A && !B
1    1        1
1    0        0
0    1        0
0    0        0


Prove that !(A && B) = !A or !B

A    B     A && B  !(A && B)
0    0        0         1
0    1        0         1
1    0        0         1
1    1        1         0

!A   !B     !A or !B
1    1        1
1    0        1
0    1        1
0    0        0

*/

?>