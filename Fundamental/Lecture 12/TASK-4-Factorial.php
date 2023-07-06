<?php



function factorial_local($n) {  // local visiable only in scope
    $result = 1;
    for ($i = 2; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}


$result = 1;
function factorial_global($n) {   // global outside the function, with use global we can call the function and make it global
    global $result;               // we can call this global $result from everyone function
    for ($i = 2; $i <= $n; $i++) {
        $result *= $i;
    }
}


$num = 10;
echo "Factorial $num, with local variable: " . factorial_local($num) . PHP_EOL;
factorial_global($num);
echo "Factorial $num, with global variable: $result";
