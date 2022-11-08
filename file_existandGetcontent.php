<?php
function readMyFile($filename){
    if(file_exists($filename)){
    $h = fopen($filename,'r');
    $size =filesize($filename);
    $data=fread($h,$size);
    return $data;
    }
    else
    {
        echo "file not found";
    }
}
echo readMyFile("blah.txt");
//
?>