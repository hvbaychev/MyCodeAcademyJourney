<?php

$re = "^(([0-9a-f]{0,4}:){7}([0-9a-f]{0,4})|(25[0-5]|2[0-4]|1\d\d|[1-9]\d|\d)\.(25[0-5]|2[0-4]|1\d\d|[1-9]\d|\d)\.(25[0-5]|2[0-4]|1\d\d|[1-9]\d|\d)\.(25[0-5]|2[0-4]|1\d\d|[1-9]\d|\d))$/";

$str = "this is a IP v4 -> 192.168.2.33 and IP v6 FDEC:BA98:7654:3210:ADFC:BDFF:2990:FFFF";

preg_match_all($re, $str, $matches, PREG_OFFSET_CAPTURE, 0);

// Print the entire match result
var_dump($matches);
