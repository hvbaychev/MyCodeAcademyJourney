<?php

function fibonacci($n, $prev1 = 1, $prev2 = 0) {
  if ($n == 0) {
    return $prev2;
  }
  if ($n == 1) {
    return $prev1;
  }
  return fibonacci($n - 1, $prev1 + $prev2, $prev1);
}


echo fibonacci(10);