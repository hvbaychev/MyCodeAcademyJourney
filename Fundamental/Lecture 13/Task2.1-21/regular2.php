<?php

$re = '/\(\d{3}\)\s\d{3}-\d{4}/';
$str = '(123) 456-7890';

preg_match($re, $str, $matches, PREG_OFFSET_CAPTURE, 0);


var_dump($matches);
