<?php


/*------------------------------------------------------------------------------
Създайте функция, която приема индексиран масив от числа като параметър и връща
сумата от всички числа в масива.1
---------------------------------------------------------------------------------*/


function calculateArray($arrayCalculation){
    $arrLen = count($arrayCalculation);
    $sum = 0;
    for($x = 0 ; $x <$arrLen; $x++){
        $sum += $arrayCalculation[$x];
        
    }
    return $sum;
}

$arrFromUser = [1,23,34,45,56];
echo calculateArray($arrFromUser);