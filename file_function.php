<?php

function createFile ($filename)
{
    $h= fopen($filename,'w');
    fclose($h);

}
function writeFile($filename,$data){
$h=Fopen($filename,'w');
fwrite($h,$data);
fclose($h);

}
function appendFile($filename,$data){
$h= fopen($filename,'a');
fwrite($h,$data);
fclose($h);
}

function readMyFile($filename){
    $h = fopen($filename,'r');
    $size =filesize($filename);
    $data = fread($h,$size);
    fclose($h);
    return $data;
}
echo readMyFile('newFile.txt');
createFile('newFile.txt');
appendFile('newFile.txt','K to the B aint quit ') ;


?>