<?php

function checkEvaluations($col, $name) {
    if ($col <= 0 || $col >= 7) {
        print "The evaluations are not correct! Please check for correct evaluations! There is a 0 or negative number in the array!" . PHP_EOL;
        print "Unable to proceed with the check for $name!" . PHP_EOL;
        return true;
    }
    return false;
}

function checkBestAndWorstStudent($averageForStudent, $name, &$bestStudent, &$worstStudent, &$bestStudentName, &$worstStudentName) {
    if ($averageForStudent >= $bestStudent) {
        $bestStudent = $averageForStudent;
        $bestStudentName = $name;
    }
    if ($averageForStudent <= $worstStudent || $worstStudent === null) {
        $worstStudent = $averageForStudent;
        $worstStudentName = $name;
    }
}

function calculateAverages($evaluation) {
    $bestStudent = 0;
    $worstStudent = null;
    $bestStudentName = "";
    $worstStudentName = "";
    $newAverageForBestAndWorstStudent = [];
    $final_sum = 0;
    $totalFinalCount = 0;

    foreach ($evaluation as $row) {
        $sumForStudent = 0;
        $count = 0;
        $countForAllEvaluation = 0;
        $name = "";
        foreach ($row as $col) {
            if (is_string($col)) {
                print "$col =>" . PHP_EOL;
                $name = $col;
                continue;
            }
            if (checkEvaluations($col, $name)) {  // + 1
                $sumForStudent = 0;
                $count = 0;
                $countForAllEvaluation = 0;
                $name = "";
                continue 2;
            }
            $count++;
            $countForAllEvaluation++;
            $sumForStudent += $col;
            $final_sum += $col;
        }
        $averageForStudent = $sumForStudent / $count;
        $totalFinalCount += $countForAllEvaluation;
        checkBestAndWorstStudent($averageForStudent, $name, $bestStudent, $worstStudent, $bestStudentName, $worstStudentName); // + 2
        print $averageForStudent . PHP_EOL;
        $newAverageForBestAndWorstStudent[] = $averageForStudent;
    }

    $bestStudent = max($newAverageForBestAndWorstStudent);
    $worstStudent = min($newAverageForBestAndWorstStudent);
    $totalAverage = $final_sum / $totalFinalCount;
    $format = number_format($totalAverage, 2, '.', '');

    echo "Best result is: $bestStudent on $bestStudentName" . PHP_EOL;
    echo "Worst result is: $worstStudent on $worstStudentName" . PHP_EOL;
    echo "total average is: ";
    return $format;
}

//function studentsCalculation($evaluation) {
//    return calculateAverages($evaluation);
//}

$myArr = [
    ["Georgi", 3, 6, 2, 3, 4, 0],
    ["Petyr",  4, 3, 2, 1, 2, 3],
    ["Desi",   3, 6, 6, 6, 6, 6]
];
 
echo studentsCalculation($myArr);