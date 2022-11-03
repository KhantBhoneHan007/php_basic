<?php
function doIt(){
echo "Arr Lone OK";

}
$var ="doIt";
$bol = function_exists($var);
if($bol){
    $var();
}else {
    echo "Functon does not exit";
}
 
?>