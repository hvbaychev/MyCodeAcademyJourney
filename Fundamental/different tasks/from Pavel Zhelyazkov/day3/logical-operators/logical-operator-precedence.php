<?php

// Operator precedence:

// The result of the expression (false || true) is assigned to $a
$a = false || true; // Acts like: ($a = (false || true))

// The constant false is assigned to $b before the "or" operation occurs
$b = false or true; // Acts like: (($b = false) or true)

$c = (false or true); // Acts like: ($b = false || true)

var_dump($a, $b, $c);

?>