<?php

$ary = array();

$ary["first"] = "BMW";
$ary["second"] = "BMX";
$ary["third"] = "Prado";
$ary["fourth"] = "Crown";
$ary["fifth"] = "Vigo";
echo $ary["second"];
echo "<br>";

$arry = array (
    "aa"=>"aaa",
    "bb"=>"bbb",
    "cc"=>"ccc",
);

echo $arry["bb"] . "<br>";

$bigAry =array (
array("first","second","third","fourth","fifth"),
array("aa","bb","cc")
);
echo $bigAry [0][2];


?>