<?php
class Node{
    public $data;
    public $next;
    function __construct($d)
    {
        $this->data = $d;
        $this->next = NULL;
    }
}

class Solution{
    function insert($head,$data){
        $node = new Node($data);
        if($head == null){
            $head = $node;
            return $head;
        }
        
        $tail = $head;
        while($tail->next!=null){
            $tail = $tail->next;
        }
        
        $tail->next = $node;
        return $head;
    }
    function display($head){
        $start=$head;
        while($start){
            echo $start->data,' ';
            $start=$start->next;
        }
    }
}

$T=intval(fgets(STDIN));
$head=null;
$mylist=new Solution();
while($T-->0){
    $data=intval(fgets(STDIN));
    $head=$mylist->insert($head,$data);
}
$mylist->display($head);
?>