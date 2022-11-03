<?php
function myFunc(){
   STATIC $var=0;
    $var++;
    echo $var;
}
echo"<h1>";
myFunc();
echo "<br>";
myFunc();
echo "<br>"; 
myFunc();
echo "<br>";
myFunc();
echo "<br>";
myFunc();
echo "</h1>";




?>