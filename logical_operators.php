<?php
echo"MEMBERSHIP TESTING<br>";
 $name = "KB";
 $type ="VIP";
 if($name == "KB"and $type == "VIP") {
    echo"Permission Granted<br> Welcome Back Sir";
 } else {
    echo"Permision Denied";
 }
 echo"<br>Sitting Plan<br>";
 if ($name == "KB" || $type == "VVIP") {
    echo"Seat Reserved";
 }else {
    echo"NO Seat";
 }
 if(!($name=="other man")) {
    echo"<br>All Services are Granted";
 }
 ?>