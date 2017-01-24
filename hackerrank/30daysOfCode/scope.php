<?php
    class Difference{
    private $elements=array();
    public $maximumDifference;
  
    function __construct($numbers){
        $this->elements = $numbers;
    }
    
    public function ComputeDifference(){
        sort($this->elements);
        $this->maximumDifference = abs($this->elements[0]-$this->elements[count($this->elements)-1]);
    }
    
} //End of Difference class  
     

$N=intval(fgets(STDIN));
$a =array_map('intval', explode(' ', fgets(STDIN)));
$d=new Difference($a);
$d->computeDifference();
print ($d->maximumDifference);
?>