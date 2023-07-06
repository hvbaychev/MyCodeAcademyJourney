<?php
declare (strict_types=1);  // declare - strict = 1 use for variables


function sum($a, $b) : float {  // name of function (arg1 , arg2) ...   : int - shut be int
    $sum = $a + $b;  // function of function :)
    return $sum; // return the result
}  // dont forget {} after function


function subtraction($a, $b) : float {
    $subtraction = $a - $b;
    return $subtraction;
}

function multiplication($a, $b) : float {
    $multiplication = $a * $b;
    return $multiplication;
}

function division($a, $b) : float {
    $division = $a / $b;
    return $division;
}

function stepen($a, $b) : float {
    $stepen = $a ** $b;
    return stepen;
}

?>


<form method = "get">
        <b>Number one:</b> <input type = "number" name = "num1" value = "some number"/><br/>
        <b>Symbol</b><input type = "symbol" name = "delimiter" value = "delimiter"/><br/>
        <b>Number two:</b><input type = "number" name = "num2" value = "some number"/><br/>
                    <input type = "submit" name = "sum">
</form>


<?php

if (isset($_GET['sum'])){         // check if have smth in 'sum' from user
    $a = filter_var($_GET['num1'], FILTER_VALIDATE_FLOAT);  // every time we need to PARSE the type int, str, float for variable !!! IF IS NOT USED declare(strict_types=1) IS NOT NECESSARY TO PARSE
    $symbol = $_GET['delimiter'];  
    $b = filter_var($_GET['num2'], FILTER_VALIDATE_FLOAT);  // every time we need to PARSE the type int, str, float for variable !!! IF IS NOT USED declare(strict_types=1) IS NOT NECESSARY TO PARSE
    //echo sum($a, $b);              // print result
    if ($a === false || $b === false){
        echo "Invalid input!";
    }

    if ($symbol === "+"){
        echo sum($a, $b);
    }
    elseif ($symbol === "-") {
        echo subtraction($a, $b);
    }
    elseif ($symbol === "*") {
        echo multiplication($a , $b);
    }
    elseif ($symbol === "/") {
        echo division($a, $b);
    }
    elseif ($symbol === "**") {
        echo stepen($a, $b);
    }
}

?>