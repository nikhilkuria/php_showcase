<?php
/**
 * Created by PhpStorm.
 * User: nkose
 * Date: 28/03/2017
 * Time: 12:50
 */
require_once __DIR__ . '/vendor/autoload.php';

use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

$connection = new AMQPStreamConnection('localhost',5672,'guest','guest');
$channel = $connection->channel();

$channel->exchange_declare('logs','fanout',false,false,false);
$data = getDummyLog();
$msg = new AMQPMessage($data);

$channel->basic_publish($msg,'logs');

echo "Sent ",$data,"\n";

$channel->close();
$connection->close();

/**
 * @return string
 */
function getDummyLog(){
    $levels = array(
        'INFO',
        'WARN',
        'ERROR',
        'TRACE'
    );
    $messages = array(
        'Olympus has fallen',
        'Red alert, red alert',
        'Beam me up Scotty!',
        'Sail on silver girl'
    );

    $randomLevel = $levels[array_rand($levels)];
    $randomMessage = $messages[array_rand($messages)];

    return $randomLevel.':'.$randomMessage;
}
