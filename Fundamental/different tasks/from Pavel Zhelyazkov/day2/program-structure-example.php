<?php

include "dates.helper.php";

$date_in_past = '1970-01-01';

function getCurrentDate() {
	$today = date('Y-m-d');
	return $today;
}

function calculateDateDifferenceDays($date1, $date2) {
	$date_diff = date_diff_days($date1, $date2);
	return $date_diff;
}
echo calculateDateDifferenceDays($date_in_past, getCurrentDate()) . " days elapsed since " . $date_in_past;

?>