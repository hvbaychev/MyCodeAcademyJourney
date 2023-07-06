<form method = "get">
    <input type = "text" name = "elements"/>
    <input type = "submit"/> 
</form>
 
<?php
 
if (isset($_GET['elements'])){
    $input = ($_GET['elements']);
    if ($input > 0 && $input < 10){
        echo "Correct value!";
    }
    else{
        echo "Invalid value!";
    }
}
 
/*------------------------------------------------------
<form method = "get">
    <input type = "text" name = "elements"/>
    <input type = "submit"/> 
</form>
 
<?php
 
if (isset($_GET['elements'])){
    $input = explode(",", $_GET['elements']);
    $elementsCount = count($input);
    if ($input > 0 && $input < 10){
        echo "Correct value!";
    }
    else{
        echo "Invalid value!";
    }
}
-------------------------------------------------------*/