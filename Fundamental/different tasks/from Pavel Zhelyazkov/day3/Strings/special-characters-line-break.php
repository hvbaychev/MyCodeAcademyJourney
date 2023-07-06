<?php


$CR = $carriageReturn = "\r"; // chr(0x0d);
$LF = $lineFeed = "\n"; // chr(0x0a);

$Windows_EOL = $CR.$LF;
$MacOS_EOL = $CR;
$Unix_EOL = $LF;

var_dump('Windows_EOL='.bin2hex($Windows_EOL));
var_dump('MacOS_EOL='.bin2hex($MacOS_EOL));
var_dump('Unix_EOL='.bin2hex($Unix_EOL));
var_dump('PHP_EOL='.bin2hex(PHP_EOL));

?>