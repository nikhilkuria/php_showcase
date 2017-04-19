<?php

ini_set('memory_limit','3000M');

$arrayEins = [];

$arrayZwei = [];

$startTime = microtime(true);

/*for ($index = 0; $index<2000000; $index++){
    array_push($arrayEins, new Image($index, $index));
}

for ($index = 0; $index<2000005; $index++){
    array_push($arrayZwei, new Image($index, $index));
}*/

for ($index = 0; $index<2000000; $index++){
    array_push($arrayEins, new Image(rand(0, $index), $index));
}

for ($index = 0; $index<2000005; $index++){
    array_push($arrayZwei, new Image(rand(0, $index), $index));
}


$endTestDataPrepTime = microtime(true);

echo "\nTest Data Prep completed ----- ".getSecs($startTime, $endTestDataPrepTime);

$transformedEins = [];
$transformedZwei = [];

foreach($arrayEins as $image){
    $transformedEins[$image->getImageId()] = $image->getContextId();
}

foreach($arrayZwei as $image){
    $transformedZwei[$image->getImageId()] = $image->getContextId();
}

$endTransformTime = microtime(true);

echo "\nTransform Complete ----- ".getSecs($startTime, $endTransformTime);

//echo "before compare----\n";
//var_dump($transformedEins);
//var_dump($transformedZwei);

$diffArray = array_diff_key($transformedZwei,$transformedEins);

$endCompareTime = microtime(true);

echo "\nCompare Complete ---- ".getSecs($startTime, $endCompareTime);

//var_dump($diffArray);


function getSecs($startTime, $endTime){
    return ($endTime-$startTime);
}

class Image
{
    private $imageId;

    private $contextId;

    public function __construct(
        $imageId,
        $contextId
    )
    {
        $this->imageId = $imageId;
        $this->contextId = $contextId;
    }

    public function getImageId(){
        return $this->imageId;
    }

    public function getContextId(){
        return $this->contextId;
    }

}