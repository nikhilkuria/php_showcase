<?php

//https://code.tutsplus.com/tutorials/techniques-for-mastering-curl--net-8470

//step1
$cSession = curl_init(); 
//step2
curl_setopt($cSession,CURLOPT_URL,"https://jsonplaceholder.typicode.com/posts");
curl_setopt($cSession,CURLOPT_RETURNTRANSFER,true);
curl_setopt($cSession,CURLOPT_HEADER, false); 
//step3
$result=curl_exec($cSession);

//also can get info

$metadata=curl_getinfo($cSession);
//step4
curl_close($cSession);
//step5
echo $result;
print_r($metadata);
echo 'Took ' . $metadata['total_time'] . ' seconds for url ' . $metadata['url']."\n";

?>