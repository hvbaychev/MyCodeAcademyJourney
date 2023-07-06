<?php

$str = "Hello world. It's a beautiful day.";
print_r (explode(" ",$str));
/* if (explode(" ",$str, 1)) set a value of arrays
    [0] => Hello world. It's a beautiful day.! 
 
if  (explode(" ",$str, -1)) set a value of arrays [4] (cut last element!)
    [0] => Hello
    [1] => world.
    [2] => It's
    [3] => a
    [4] => beautiful

if it`s normal just give all elements:
    [0] => Hello
    [1] => world.
    [2] => It's
    [3] => a
    [4] => beautiful
    [5] => day.
*/
?>

