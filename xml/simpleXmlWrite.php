<?php

$xml = simplexml_load_file("resources/conf.xml");
$xml->addChild('item','language')->addAttribute('name','de');
file_put_contents("resources/conf2.xml",$xml->asXML());

 ?>
