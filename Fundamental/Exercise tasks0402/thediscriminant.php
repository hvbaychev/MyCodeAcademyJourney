<?php

$a = 1;
$b = 5;
$c = 6;

$discriminant = $b * $b - 4 * $a * $c;

if ($discriminant < 0) {
  echo "No roots";
} else {
  $x1 = (-$b + sqrt($discriminant)) / (2 * $a);
  $x2 = (-$b - sqrt($discriminant)) / (2 * $a);
  echo "Roots is x1 = $x1 и x2 = $x2.";
}

?>
