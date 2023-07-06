<?php


$re = '/\s\w{5}:\/\/\w{3}\.(.*?)\.\w{3}\//';
$str = 'I love to make shopping from https://www.sportsdirect.com/ because is cheaper than htpps://www.sportvision.com/';

preg_match_all($re, $str, $matches, PREG_OFFSET_CAPTURE, 0);


var_dump($matches);
