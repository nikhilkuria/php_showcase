<?php
/**
 * Created by PhpStorm.
 * User: nikhilkuria
 * Date: 29/03/17
 * Time: 7:40 AM
 */
require_once __DIR__ . '/vendor/autoload.php';

use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

$heroes = array(
    "Superman"=>array("guild"=>"JusticeLeague","can-fly"=>"yes","human"=>"no"),
    "Batman"=>array("guild"=>"JusticeLeague","can-fly"=>"no","human"=>"yes"),
    "IronMan"=>array("guild"=>"Avengers","can-fly"=>"yes","human"=>"yes"),
    "Hulk"=>array("guild"=>"Avengers","can-fly"=>"no","human"=>"yes"),
    "Thor"=>array("guild"=>"Avengers","can-fly"=>"yes","human"=>"no"),
    "Flash"=>array("guild"=>"JusticeLeague","can-fly"=>"no","human"=>"yes")
);


function getRandomHero($heroes){
    $randomHero = array_rand($heroes);
    return $randomHero;
}

function getHeroTopicString($hero){
    return implode('.',array_values($hero));
}

$hero = getRandomHero($heroes);
$routing_key = getHeroTopicString($heroes[$hero]);

$connection = new AMQPStreamConnection('localhost',5672,'guest','guest');
$channel = $connection->channel();

$channel->exchange_declare('heroes','topic',false,false,false);

$hero = getRandomHero($heroes);
$routing_key = getHeroTopicString($heroes[$hero]);

$msg = new AMQPMessage($hero);
$channel->basic_publish($msg,'heroes',$routing_key);

echo 'Sending ',$hero,' with key ',$routing_key,'\n';

$channel->close();
$connection->close();
