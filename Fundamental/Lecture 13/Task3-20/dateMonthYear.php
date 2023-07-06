<!DOCTYPE html>
<html>
<head>
	<title>Select Date</title>
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
			box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.9);
		}
	</style>
</head>
<body>
	<form method="post">
		<label for="month">Month:</label>
		<select name="month" id="month">
			<?php
			$months = [
				1 => 'January',
				2 => 'February',
				3 => 'March',
				4 => 'April',
				5 => 'May',
				6 => 'June',
				7 => 'July',
				8 => 'August',
				9 => 'September',
				10 => 'October',
				11 => 'November',
				12 => 'December'
			];
			foreach ($months as $key => $value) {
				echo "<option value=\"$key\">$value</option>";
			}
			?>
		</select>
		<label for="year">Year:</label>
		<select name="year" id="year">
			<?php
			$currentYear = date('Y');
			for ($i=$currentYear; $i>=1900; $i--) {
				echo "<option value=\"$i\">$i</option>";
			}
			?>
		</select>
		<input type="submit" name="submit" value="Generate">
	</form>
	
	<?php
	if (isset($_POST['submit'])) {
		$month = $_POST['month'];
		$year = $_POST['year'];
		
		$firstDay = mktime(0, 0, 0, $month, 1, $year);
	
		$lastDay = mktime(0, 0, 0, $month + 1, -1, $year);  // so 0 is the last day of the previous month
		
		$currentDay = $firstDay;
		while ($currentDay <= $lastDay) {  
			$date = date('Y-m-d', $currentDay);  
			echo "<p>$date</p>"; 
			$currentDay += 86400; // + 1 day
		}
	}
	?>
</body>
</html>
