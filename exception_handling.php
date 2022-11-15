<?php

$file ="boddy.php";
if(file_exists($file))
    echo "File Exist";
else exit("file not found");
 $handler =fopen ($file,"r");

echo "<br> Hey Its All Right";
?>