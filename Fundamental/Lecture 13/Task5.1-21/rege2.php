<?php

$re = '/<\w+\s\w+="\w+"><\w\d>\w+\s\w+<\/\w\d><\/\w+>/';
$str = '\'<div class="wrapper"><h1>Hello World</h1></div>\';';

preg_match($re, $str, $matches, PREG_OFFSET_CAPTURE, 0);

// Print the entire match result
var_dump($matches);
