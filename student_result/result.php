<?php

$marks = ["Math"=> 33, "English" => 93, "History" => 92, "Bangla" => 91, "Geography" => 98];

function calculateResult($marks) {
    $totalMarks = 0;

    foreach ($marks as $mark) {
        if ($mark < 0 || $mark > 100) {
            return "Mark range is invalid.";
        }
        if ($mark < 33) {
            return "Failed.";
        }
        $totalMarks += $mark;
    }

    $averageMarks = $totalMarks / count($marks);

    switch (true) {
        case ($averageMarks >= 80):
            $grade = 'A+';
            break;
        case ($averageMarks >= 70):
            $grade = 'A';
            break;
        case ($averageMarks >= 60):
            $grade = 'A-';
            break;
        case ($averageMarks >= 50):
            $grade = 'B';
            break;
        case ($averageMarks >= 40):
            $grade = 'C';
            break;
        case ($averageMarks >= 33):
            $grade = 'D';
            break;
        default:
            $grade = 'F';
            break;
    }

    echo "Total Marks: $totalMarks"."<br/>";
    echo "Average Marks: $averageMarks"."<br/>";
    echo "Grade: $grade"."<br/>";
}
echo calculateResult($marks);

?>