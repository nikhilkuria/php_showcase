<?php

$handle = fopen("php://stdin","r");

class Dictionary{
    private $dictionary = array();

    function addToDictionary($value){
        if($this->dictionary[$value] == null){
            $this->dictionary[$value] = 0;
        }
        
        $this->dictionary[$value]++;
    } 
    
    function getFrequency($val){
        if($this->dictionary[$val] == null){
            return 0;
        }
        return $this->dictionary[$val];
    }
    
    function getDictionary(){
        return $this->dictionary;
    }
}


$dictionary = new Dictionary();
fscanf($handle, "%d", $numOfInputs);

for($index=0;$index<$numOfInputs;$index++){
    $dictionary->addToDictionary(trim(fgets($handle)));
}

fscanf($handle, "%d", $numOfQueries);

for($index=0;$index<$numOfQueries;$index++){
    $frequency = $dictionary->getFrequency(trim(fgets($handle)));
    print("{$frequency}\n");
}
