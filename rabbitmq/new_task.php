<?php
/**
 * Created by PhpStorm.
 * User: nkose
 * Date: 28/03/2017
 * Time: 11:19
 */
require_once __DIR__ . '/vendor/autoload.php';

use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

$connection = new AMQPStreamConnection('localhost',5672,'guest','guest');
$channel = $connection->channel();

$channel->queue_declare('myq',false,true,false,false);

$jobName = implode(" ", array_slice($argv,1));
echo "Sending request for job :",$jobName,"\n";

$msg = new AMQPMessage($jobName);

$channel->basic_publish($msg,'',myq);

$channel->close();
$connection->close();