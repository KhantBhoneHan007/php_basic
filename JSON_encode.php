<?php

$file ="data.json";
$handler=fopen($file,'r');
$json =fread($handler,filesize($file));
$ary = json_decode($json);
print_r($ary);
?>