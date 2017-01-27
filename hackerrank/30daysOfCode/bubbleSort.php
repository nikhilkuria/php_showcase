<?php

$handle = fopen("php://stdin","r");

function swap(&$input, $fromIndex, $toIndex){
    $temp = $input[$fromIndex];
    $input[$fromIndex] = $input[$toIndex];
    $input[$toIndex] = $temp;
}

fscanf($handle,"%d",$count);
$input = explode(" ", trim(fgets($handle)));
$totalSwapCount = 0;

for($outerIndex = 0;$outerIndex<$count;$outerIndex++){
    $swapCount = 0;

    for($innerIndex = 0;$innerIndex<$count-1;$innerIndex++){
        if($input[$innerIndex]>$input[$innerIndex+1]){
            $swapCount++;
            swap($input,$innerIndex,$innerIndex+1);
        }
    }
    if($swapCount==0){
        break;
    }
    $totalSwapCount = $totalSwapCount + $swapCount;
}

print("Array is sorted in {$totalSwapCount} swaps.\n");
print("First Element: {$input[0]}\n");
print("Last Element: {$input[$count-1]}");