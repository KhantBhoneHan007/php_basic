<?php
//for loop
$indexAry = array ("East","West","South","North");
$secAry = array ("1","2","3","4");
for($i=0;$i < count ($indexAry); $i++){
    echo $indexAry[$i] . "<br>";
}
//while lo0p
$i=0; echo "<br>";
while($i< count($indexAry)){ 
    echo $indexAry[$i] . "<br>";
    $i++;
}
//do while loop
$i=0; echo "<br>";
do{
    echo $indexAry [$i]. "<br>";
    $i++;
}while($i < count ($indexAry));
echo "<br>";
//multi dimentional array loop
$bigAry = array (
    array ("East","West","South","North"),
    array ("1","2","3","4")
);
for ($i=0; $i <count($bigAry);$i++){
    for($j=0; $j < count($bigAry[$i]); $j++){
        echo $bigAry [$i][$j] . " ";

    }
    echo "<hr>";
}



?>