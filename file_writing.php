<?php
$file = "newText.txt";
$h = fopen($file,'w');
fwrite($h,"Hello World!");
fclose($h);
?>