<?php
interface AdvancedArithmetic{
    public function divisorSum($n);
}

class Calculator implements AdvancedArithmetic{
    public function divisorSum($n){
        $divisors = array();
        $divisors[] = $n;
        for($index = 1; $index<=floor($n/2); $index++){
            if($n%$index==0){
                $divisors[] = $index;
            }
        }
        return array_sum($divisors);
    }
}

$n=intval(fgets(STDIN));
$myCalculator=new Calculator();
if($myCalculator instanceof AdvancedArithmetic)//checking if Calculator has implemented AdvancedArithemtic
{
    $sum=$myCalculator->divisorSum($n);
    echo "I implemented: AdvancedArithmetic\n".$sum;
}
else
{
    echo "Wrong answer";// You will get this output if you dont implement
}
?>