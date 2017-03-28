<?php
/**
 * Created by PhpStorm.
 * User: nkose
 * Date: 28/03/2017
 * Time: 11:27
 */
require_once __DIR__ . '/vendor/autoload.php';

$connection = new \PhpAmqpLib\Connection\AMQPStreamConnection('localhost',5672,'guest','guest');
$channel = $connection->channel();

$channel->queue_declare('myq',false,true,false,false);

echo ' [*] Waiting for messages. To exit press CTRL+C', "\n";
$callback = function($msg) {
    $time = substr_count($msg->body,".");
    echo " [x] Received ", $msg->body," with ",$time, " dots", "\n";
    sleep($time);
    echo "Completed!","\n";
    $msg->delivery_info['channel']->basic_ack($msg->delivery_info['delivery_tag']);
};

$channel->basic_qos(null,1,null);
$channel->basic_consume('myq','',false,false,false,false,$callback);

while(count($channel->callbacks)) {
    $channel->wait();
}