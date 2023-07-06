<?php

/*
Създайте функция, която приема асоциативен масив от имена на ученици и техните
оценки като параметър и изчислява средната оценка за всички ученици в масива.+ още много условия :D1
*/

function studentsCalculation($Evaluation){
    $sumForStudent = 0;
    $totalSum = 0;
    $final_sum = 0;
    $countForAllEvaluation = 0;
    $count = 0;
    $totalFinalCount = 0;
    $bestStudent = 0;
    $worstStudent = 0;
    $bestStudentName = "";
    $worstStudentName = "";
    foreach ($Evaluation as $row){           // start from 1 --> [0] -- in this case some name  ["Georgi", .......
        foreach ($row as $col) {     
            if (is_string($col)){              // check if is string 
                print "$col =>".PHP_EOL;        // print the string
                $name = $col;                  // safe the string
                continue;
            }                      // continue iteration from next in this case 5 .....       // take all value on row [".......",  5, 6, 2, 3, 4, 2]
            elseif ($col <= 0 || $col > 6) {
                print "The evaluations is not correct! Please check for correct evaluations! Exist 0 or negative number in array!".PHP_EOL;
                print "Unable to proceed with the check for $name!".PHP_EOL;
                $sumForStudent = 0;   // return value of sum for one student
                $count = 0;          // return value of counter
                $totalSum = 0;       // return value total sum to 0
                $countForAllEvaluation = 0;   // return counter 
                continue 2;                 // pass the student --> going to the next
            }
            else{
                $count++;   
                $countForAllEvaluation++;                       // incr count ++
                $sumForStudent += $col;             // calculate sum for one student
                $totalSum += $col;                  // calculate sum for all students
            }
        }


        $averageForStudent = $sumForStudent / $count;        // average for only one student
        $final_sum += $totalSum;
        $totalFinalCount += $countForAllEvaluation;


        if ($averageForStudent >= $bestStudent) {           // assign the name of best students
            $bestStudent = $averageForStudent ;
            $bestStudentName = $name;
        }
        if ($averageForStudent <= $worstStudent || $worstStudent === 0) {   // assign the name of worst students
            $worstStudent = $averageForStudent;
            $worstStudentName = $name;
        }   


        print $averageForStudent.PHP_EOL;                       // print average for one student
        $newAverageForBestAndWorstStudent[] = $averageForStudent;   // new array for assign the results from students


        $sumForStudent = 0;   // return value of sum for one student
        $count = 0;          // return value of counter
        $totalSum = 0;      // return value of total sum to 0
        $countForAllEvaluation = 0;  // return counter 

    }
    
    $bestStudent = max($newAverageForBestAndWorstStudent);    // take result for best student (calculate who is + )
    $worstStudent = min($newAverageForBestAndWorstStudent);   // take result for worst student (calculate who is - )
    $totalAverage = $final_sum / $totalFinalCount;  // return total average
    $format =  number_format($totalAverage, 2, '.', '');                     // format the result
    echo "Best result is: $bestStudent on $bestStudentName".PHP_EOL;
    echo "Worst result is: $worstStudent on $worstStudentName".PHP_EOL;
    echo "total average is: ";
    return $format;
}




$myArr = [
    ["Ge", 3, 6, 2, 3, 4, 0],
    ["Pe",  4, 3, 2, 1, 2, 3],
    ["De",   3, 6, 6, 6, 6, 6]
];

echo studentsCalculation($myArr);
