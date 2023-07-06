<?php

function fibonacci($n)
{
    if ($n <= 1)
        return $n;
    // echo $n.PHP_EOL;
    return fibonacci($n - 1) + fibonacci($n - 2);
}
 

echo fibonacci(9);
 

?>