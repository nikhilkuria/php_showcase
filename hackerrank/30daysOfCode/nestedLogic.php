<?php

class DateHolder{
    public $day;
    public $month;
    public $year;
    
    public function __construct(array $dateArray){
        $this->day = $dateArray[0];
        $this->month = $dateArray[1];
        $this->year = $dateArray[2];
    }
    
}

class DateCalculator{
    
    public $fromDate;
    public $toDate;
    
    public function __construct($fromDate, $toDate){
        $this->fromDate = $fromDate;
        $this->toDate = $toDate;
    }
    
    public function getDaysDiff(){
        $daysDiff = $this->toDate->day -  $this->fromDate->day;
        return $daysDiff;
    }
    
    public function getMonthsDiff(){
        $monthsDiff =  $this->toDate->month -  $this->fromDate->month;
        return $monthsDiff;
    }
    
    public function getYearsDiff(){
        $yearsDiff =  $this->toDate->year -  $this->fromDate->year;
        return $yearsDiff;
    }
}

$handle = fopen("php://stdin","r");

$toDateArray = explode(" ",trim(fgets($handle)));
$fromDateArray = explode(" ",trim(fgets($handle)));

//print_r($fromDateArray);

$fromDate = new DateHolder($fromDateArray);
$toDate = new DateHolder($toDateArray);

//print_r($fromDate);
//print_r($toDate);

$dateCalculator = new DateCalculator($fromDate, $toDate);

$dateDiff = $dateCalculator->getDaysDiff();
$monthsDiff = $dateCalculator->getMonthsDiff();
$yearsDiff = $dateCalculator->getYearsDiff();

if($yearsDiff>0){
    print($yearsDiff*10000);
}elseif($yearsDiff<0){
     print(0);
}else{
    if($monthsDiff>0){
        print($monthsDiff*500);
    }elseif($monthsDiff<0){
        print(0);
    }else{
        if($dateDiff>0){
            print($dateDiff*15);
        }else{
            print(0);
        }
    }
}