<?php
/**
 * Created by PhpStorm.
 * User: nkose
 * Date: 28/03/2017
 * Time: 17:41
 */
require_once __DIR__ . '/vendor/autoload.php';

use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

$repo = array(
    "Red" => array("Hellboy", "Flash", "Superman"),
    "Green" => array("Mask", "Hulk", "Green Lantern"),
    "Black" => array("Batman", "Spiderman-dark theme", "Black Widow")
);

$connection = new AMQPStreamConnection('localhost',5672,'guest','guest');
$channel = $connection->channel();

$channel->exchange_declare('sorter','direct',false,false,false);

$color = getRandomColor($repo);
$hero = getRandomHero($repo, $color);

echo "Let's welcome ", $hero, " to the ",$color," club!\n";

$msg = new AMQPMessage($hero);
$channel->basic_publish($msg,'sorter',$color);


function getRandomColor($repo){
    $keys = array_keys($repo);
    return getRandom($keys);
}

function getRandomHero($repo, $color){
    $heroes = $repo[$color];
    return getRandom($heroes);
}

function getRandom($array){
    $randomElement = $array[array_rand($array)];
    return $randomElement;
}
