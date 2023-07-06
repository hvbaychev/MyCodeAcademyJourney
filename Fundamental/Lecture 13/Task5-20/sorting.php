<!DOCTYPE html>
<html>
<head>
	<title>Sorting dates</title>
	<style>
		body {
			background-color: #f0f0f0;
		}
		form {
			width: 400px;
			margin: 0 auto;
			background-color: #fff;
			padding: 20px;
			border-radius: 5px;
			box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.9);
		}
	</style>
</head>
<body>
	<form method="POST">
		1 date: <input type="text" name="first_date" value="dd-mm-yyyy"><br/>
		2 date: <input type="text" name="second_date" value="dd-mm-yyyy"><br/>
		3 date: <input type="text" name="third_date" value="dd-mm-yyyy"><br/>
		4 date: <input type="text" name="fourth_date" value="dd-mm-yyyy"><br/>
		SORT: <input type="submit" name="submit" value="SORT">
	</form>
</body>
</html>

<?php
if (isset($_POST["submit"])) {
	$first_date = isset($_POST["first_date"]) ? strtotime($_POST["first_date"]) : null;
	$second_date = isset($_POST["second_date"]) ? strtotime($_POST["second_date"]) : null;
	$third_date = isset($_POST["third_date"]) ? strtotime($_POST["third_date"]) : null;
	$fourth_date = isset($_POST["fourth_date"]) ? strtotime($_POST["fourth_date"]) : null;

	$date_array = array($first_date, $second_date, $third_date, $fourth_date);
	sort($date_array);

	echo "<br>Sorted dates:";
	foreach ($date_array as $date) {
		echo "<br>".date("d-m-Y", $date);
	}
}
?>
