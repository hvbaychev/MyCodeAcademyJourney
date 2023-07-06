<?php


$re = '/\b[\w\.-]+@[\w\.-]+\.\w{2,}\b/';
$str = "hvbachev@abv.bg, hvbaychev@gmail.com";
preg_match_all($re, $str, $matches);


var_dump($matches);
?>
