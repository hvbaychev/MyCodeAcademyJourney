<?php


function generate_month_calendar($date, $firstDayOfMonth = "Н", $includePreviousDays = false) {

    $first_day = date('w', strtotime($date.'-01'));
    $last_day = date('t', strtotime($date.'-01'));
    $month_name = ucfirst(strftime('%B %Y', strtotime($date)));
    $currentDay = intval(date("j"));

    // Calculate days from the previous month
    $previous_month = date('m', strtotime('-1 month', strtotime($date)));
    $previous_year = date('Y', strtotime('-1 month', strtotime($date)));
    $days_in_previous_month = date('t', strtotime($previous_year.'-'.$previous_month.'-01'));
    $previous_month_days = array_slice(range($days_in_previous_month-$first_day+1, $days_in_previous_month), 0, $first_day);

    if ($firstDayOfMonth == "Н") {
        $week_days = array('Н', 'П', 'В', 'С', 'Ч', 'П', 'С');
    }
    else{
        $week_days = array('П', 'В', 'С', 'Ч', 'П', 'С', 'Н');
    }

    echo "<h2>" . $month_name . "</h2>";

    echo "<table>";
    echo "<tr>";
    foreach ($week_days as $day) {
        echo "<th>" . $day . "</th>";
    }
    echo "</tr>";

    $day = 1;
    $day_in_previous_month = 0;
    echo "<tr>";
    for ($i = 0; $i < $first_day; $i++) {
        if ($includePreviousDays) {
            echo "<td>" . $previous_month_days[$day_in_previous_month++] . "</td>";
        } else {
            echo "<td></td>";
        }
    }
    while ($day <= $last_day) {
        for ($i = $first_day; $i < 7 && $day <= $last_day; $i++) {
            if ($currentDay === $day){
                echo "<td>" . "($currentDay)" . "</td>";
                $day++;
            }else{
                echo "<td>" . $day . "</td>";
                $day++;
            }
        }
        if ($day <= $last_day) {
            echo "</tr><tr>";
        }
        $first_day = 0;
    }

    // If the last row is not completed, add empty cells
    while ($i < 7) {
        if ($includePreviousDays) {
            echo "<td>" . $previous_month_days[$day_in_previous_month++] . "</td>";
        } else {
            echo "<td></td>";
        }
        $i++;
    }
    echo "</tr>";
    echo "</table>";
}

generate_month_calendar(date("d/m/Y"), $firstDayOfMonth = "Н", $includePreviousDays = true);
