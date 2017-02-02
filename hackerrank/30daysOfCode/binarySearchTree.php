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
    public function getHeight($root){
      if($root == null){
          return -1;
      }else{
          $leftHeight = $this->getHeight($root->left);
          $rightHeight = $this->getHeight($root->right);
          print("Height of {$root->left->data} = {$leftHeight} and height of {$root->right->data} = {$rightHeight}\n");
          return 1 + max($leftHeight, $rightHeight);
      }
    }
}//End of Solution
$myTree=new Solution();
$root=null;
$T=intval(fgets(STDIN));
while($T-->0){
    $data=intval(fgets(STDIN));
    $root=$myTree->insert($root,$data);
}
$height=$myTree->getHeight($root);
echo $height;
?>