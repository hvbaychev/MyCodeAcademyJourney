<?php

function recursion($steps){
    echo "called steps : $steps".PHP_EOL; // first call all steps after that next
    if ($steps <= 0){
        echo "return steps: $steps".PHP_EOL;  // this execute only when is $steps = 0  .. ret 0
        return;
    }
    recursion($steps - 1);  // call func step - 1 till step <= 0
    echo "return steps: $steps".PHP_EOL;  // other returns 1 2 3 4 5
}

recursion(5);

echo "Back in main";