<?php

class SkillSet{
  public $rating;

  public function __construct($rating){
    $this->rating = $rating;
  }
}

class Player{
   public $name;
   public $age;
   public $skillSet;

  public function __construct($name, $age, $skillSet){
    $this->name = $name;
    $this->age = $age;
    $this->skillSet = $skillSet;
  }
}

$player1 = new Player("Kanter",28,new SkillSet("Good"));

$player2 = clone $player1;

//the primitives are shallow copied
print "Player 1 name : {$player1->name}. Player 2 name : {$player2->name}.\n";
//But the objects are shared
$player1->skillSet->rating="Very Good";

print "Player 1 rating : {$player1->skillSet->rating}. Player 2 rating : {$player2->skillSet->rating}.\n";

//Now with clone
class PlayerClone{
   public $name;
   public $age;
   public $skillSet;

  public function __construct($name, $age, $skillSet){
    $this->name = $name;
    $this->age = $age;
    $this->skillSet = $skillSet;
  }

  public function __clone(){
    $this->skillSet = clone $this->skillSet;
  }
}

$player1a = new PlayerClone("Kanter",28,new SkillSet("Good"));

$player2a = clone $player1a;

//the primitives are shallow copied
print "Player 1a name : {$player1a->name}. Player 2a name : {$player2a->name}.\n";
//But the objects are shared
$player1a->skillSet->rating="Very Good";

print "Player 1a rating : {$player1a->skillSet->rating}. Player 2a rating : {$player2a->skillSet->rating}.\n";
 ?>
