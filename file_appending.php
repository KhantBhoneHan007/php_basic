<?php

$file = "newText.txt";
$h = fopen($file,'a');
fwrite($h,"Myanmar!");
fclose($h);


?>