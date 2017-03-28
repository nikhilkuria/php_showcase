<?php
/**
 * Created by PhpStorm.
 * User: nkose
 * Date: 28/03/2017
 * Time: 17:55
 */
use PhpAmqpLib\Connection\AMQPStreamConnection;

require_once __DIR__ . '/vendor/autoload.php';

$connection = new AMQPStreamConnection('localhost',5672,'guest','guest');
$channel = $connection->channel();

$channel->exchange_declare('sorter','direct',false,false,false);

list($queue_name, ,) = $channel->queue_declare("", false, false, true, false);

$category = $argv[1];

$channel->queue_bind($queue_name, 'sorter', $category);

echo ' [*] Waiting for ', $category,' heroes . To exit press CTRL+C', "\n";

$callback = function($msg){
    echo ' [x] ',$msg->delivery_info['routing_key'], ':', $msg->body, "\n";
};

$channel->basic_consume($queue_name, '', false, true, false, false, $callback);

while(count($channel->callbacks)) {
    $channel->wait();
}

$channel->close();
$connection->close();