<?php
/**
 * Created by PhpStorm.
 * User: nikhilkuria
 * Date: 29/03/17
 * Time: 7:56 AM
 */
use PhpAmqpLib\Connection\AMQPStreamConnection;

require_once __DIR__ . '/vendor/autoload.php';

$connection = new AMQPStreamConnection('localhost',5672,'guest','guest');
$channel = $connection->channel();

$channel->exchange_declare('heroes','topic',false,false,false);

list($queue_name, ,) = $channel->queue_declare("", false, false, true, false);

$keysSupported = array_slice($argv,1);

foreach ($keysSupported as $key){
    $channel->queue_bind($queue_name,'heroes',$key);
}

echo ' [*] Waiting for heroes. To exit press CTRL+C', "\n";

$callback = function($msg){
    echo ' [x] ',$msg->delivery_info['routing_key'], ':', $msg->body, "\n";
};

$channel->basic_consume($queue_name, '', false, true, false, false, $callback);

while(count($channel->callbacks)) {
    $channel->wait();
}

$channel->close();
$connection->close();