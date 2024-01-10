<?php

function processMarks($marksArr){
    $sum = 0;
    foreach ($marksArr as $value){
        $sum += $value;
    }
    return $sum;
}

function avgMarks($marksArr){
    $sum = 0;
    $i =1 ;
    foreach ($marksArr as $value){
        $sum += $value;
        $i++;
    }
    return $sum/$i;
}

$rohanDas = [34, 98, 45, 12, 98, 93];
$sumMARKS = processMarks($rohanDas);
$sumMARKS = avgMarks($rohanDas);

$harry = [99, 98, 93, 94, 17, 100];
$sumMarksHarry = processMarks($harry);
$sumMarksHarry = avgMarks($harry);
echo "Total marks scored by rohan out of 600 is $sumMARKS <br>";
echo "Total marks scored by Harry out of 600 is $sumMarksHarry";
?>