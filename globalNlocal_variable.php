<?php
$var = 50;
function doIt(){
global $var;
echo $var;
}
doIt();
?>