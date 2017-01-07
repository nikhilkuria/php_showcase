<?php

interface Speaker{

  public function getSpeakerType();

  public function talkAloud($message);

}

class LoudSpeaker implements Speaker{

  public function getSpeakerType(){
    return "Loud Speaker";
  }

  public function talkAloud($message){
    print("About to talk aloud\n{$message}\nDone!!\n");
  }

}


$loudSpeaker = new LoudSpeaker();

print("{$loudSpeaker->getSpeakerType()}\n");
$loudSpeaker->talkAloud("Hello Guys");
 ?>
