<!DOCTYPE html>
<html>
<body>

<?php
$temp_files = array("temp15.txt","temp10.txt",
"temp1.txt","temp22.txt","temp2.txt");

sort($temp_files);
echo "Standard sorting: ";
print_r($temp_files);
echo "<br>";

natsort($temp_files);  // In a natural algorithm, the number 2 is less than the number 10. In computer sorting, 10 is less than 2, because the first number in "10" is less than 2.
echo "Natural order: ";
print_r($temp_files);
?>

</body>
</html>
