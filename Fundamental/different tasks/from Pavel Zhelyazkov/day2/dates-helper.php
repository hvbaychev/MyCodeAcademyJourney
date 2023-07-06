<?php

// dates.helper.php included in program-structure-example.php

function date_diff_days($date_from, $date_to) {
	return abs(strtotime($date_from)-strtotime($date_to)) / 86400; 
	// 86400 are the seconds in one day (remember this number)
}

?>