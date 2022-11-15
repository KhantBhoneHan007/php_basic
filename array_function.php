<?php
$ary = array();
echo count($ary). "<br>";
array_push($ary, "one");
array_push($ary, "two");
array_push($ary, "three");
echo count($ary) . "<br>";
print_r($ary) . "<br>";
array_pop($ary);
echo count($ary) . "<br>";
print_r($ary);


?> 