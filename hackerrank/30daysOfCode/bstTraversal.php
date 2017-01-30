<?php
class Node{
    public $left,$right;
    public $data;
    function __construct($data)
    {
        $this->left=$this->right=null;
        $this->data = $data;
    }
}
class Solution{
    public function insert($root,$data){
        if($root==null){
            return new Node($data);
        }
        else{            
            if($data<=$root->data){
                $cur=$this->insert($root->left,$data);
                $root->left=$cur;
            }
            else{
                $cur=$this->insert($root->right,$data);
                $root->right=$cur;
            }
            return $root;
        }
    }
    
    public function levelOrder($root){
        $queue = new SplQueue();
        $queue->enqueue($root);
        $result = array();
        while(!$queue->isEmpty()){
            $node = $queue->dequeue();
            $result[] = $node->data;
            if($node->left != null){
                $queue->enqueue($node->left);
            }
            if($node->right != null){
                $queue->enqueue($node->right);
            }
        }
        print(trim(implode(" ",$result)));
        
    }
}//End of Solution


$myTree=new Solution();
$root=null;
$T=intval(fgets(STDIN));
while($T-->0){
    $data=intval(fgets(STDIN));
    $root=$myTree->insert($root,$data);
}
$myTree->levelOrder($root);
?>
    