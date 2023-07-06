<?php

/*
$myArr = [
    ["PHP 7 – 200", "D.K. Academy", 2015],
    ["PHP и MySQL", "Larry Ullman", 2016],
    ["PHP 8" , "D.K. Academy", 2017],
    ["Laravel", "Asenevci", 2019]
];


echo json_encode($myArr); 

*/

$decodeJson = '[["PHP 7 \u2013 200","D.K. Academy",2015],["PHP \u0438 MySQL","Larry Ullman",2016],["PHP 8","D.K. Academy",2017],["Laravel","Asenevci",2019]]';

print_r(json_decode($decodeJson));
