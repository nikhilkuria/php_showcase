<?php

define("YES","YES");
define("NO","NO");

function generateArrivalTimes($totalNumber, $lateCommers){
    //One should be 0
    //$totalNumber-$lateCommers on time
    //$lateCommers late
    $times = array();
    $times[] = 0;
    for($index = 0; $index<$lateCommers; $index++){
        $times[] = rand(1,100);
    }
    for($index = 0; $index<($totalNumber-$lateCommers-1); $index++){
        $times[]= rand(-100,-1);
    }
    return $times;
}

$outputs = array(YES, NO, YES, NO, YES);

print(count($outputs));
print("\n");

$studentCounter = 5;
$cancellationThresholdCounter = 3;

foreach($outputs as $output){
    print("{$studentCounter} {$cancellationThresholdCounter}\n");
    $times = array();
    if($output == YES){
        $times = generateArrivalTimes($studentCounter, $cancellationThresholdCounter);
    }else{
        $times = generateArrivalTimes($studentCounter, $cancellationThresholdCounter-1);
    }
    print(implode(" ", $times));
    print("\n");
    $studentCounter++;
    $cancellationThresholdCounter++;
}