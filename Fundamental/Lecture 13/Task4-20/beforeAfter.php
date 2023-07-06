<?php
if (isset($_GET['date'])){
    $userDate = strtotime($_GET["userDate"]);
    $currentDate = strtotime(date('d-m-Y H:i:s'));

    $diff = abs($currentDate - $userDate);
    $totalDays = floor($diff / 86400);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Before or After</title>
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
        <form method='get'>
            DATE: <input type='text' name='userDate'><br>
            <input type='submit' name='date' value='submit'><br>
        </form>

    <?php
    if (isset($_GET["date"]) && $totalDays){
        if ($totalDays == 0) {
            echo "Today";
        } elseif ($totalDays == 1) {
            echo "Before 1 day";
        } elseif ($totalDays < 7) {
            echo "Before " . $totalDays . " days";
        } elseif ($totalDays < 14) {
            echo "Before 1 week";
        } elseif ($totalDays < 30) {
            $weeks = floor($totalDays / 7);
            echo "Before " . $weeks . " weeks and " . ($totalDays - ($weeks * 7)) . " days";
        } elseif ($totalDays < 60) {
            echo "Before 1 month";
        } elseif ($totalDays < 365) {
            $months = floor($totalDays / 30);
            echo "Before " . $months . " months and " . ($totalDays - ($months * 30)) . " days";
        } else {
            $years = floor($totalDays / 365); // 35.6410..... floor - 35
            echo "Before " . $years . " years and " . ($totalDays - ($years * 365)) . " days";  //  35*365 = abs 12.775 - 13009 = 234
        }
    }
    ?>
    </body>
</html>
