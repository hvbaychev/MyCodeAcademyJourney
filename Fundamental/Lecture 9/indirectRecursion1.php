<?php
/*
Напишете две функции, foo() и bar(), които се извикват последователно, докато
достигнат базов случай. Например foo() може да отпечата "foo" и да извика bar(),
а bar() може да отпечата "bar" и да извика foo().
*/


function foo($num){
    if ($num === 0){
        return;
    }
    else{
        echo $num . ',';
        bar($num - 1);
    }
}

function bar($num){
    if ($num === 0){
        return;
    }
    else{
        echo $num . ',';
        foo($num - 1);
    }
}

foo(3);
bar(3);
