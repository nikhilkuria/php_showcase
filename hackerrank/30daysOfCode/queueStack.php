<?php
class Solution {

   private $stack = array();
   private $queue = array();
    
   function pushCharacter($char){
       if($char != ""){
            $this->stack[] = $char;
       }
   }
      
   function popCharacter(){
       $char = array_pop($this->stack);
       return $char;
   }
   
   function enqueueCharacter($char){
        if($char != ""){
            $this->queue[] = $char;
        }
   }
   
   function dequeueCharacter(){
       $char = array_shift($this->queue);
       return $char;
   }

}


// read the string s
$s = trim(fgets(STDIN));

// create the Solution class object p
$obj = new Solution();

$len = strlen($s);
$isPalindrome = true;

// push/enqueue all the characters of string s to stack
for ($i = 0; $i < $len; $i++) {
    $obj->pushCharacter($s{$i});
    $obj->enqueueCharacter($s{$i});
}

/*
pop the top character from stack
dequeue the first character from queue
compare both the characters
*/
for ($i = 0; $i < $len / 2; $i++) {
    if($obj->popCharacter() != $obj->dequeueCharacter()){
        $isPalindrome = false;
    	
        break;
    }
}

//finally print whether string s is palindrome or not.
if ($isPalindrome)
    echo "The word, ".$s.", is a palindrome.";
else
    echo "The word, ".$s.", is not a palindrome.";
?>