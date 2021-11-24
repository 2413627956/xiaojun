<?php
$file=fopen("database.txt","r");
$r=$_POST["Username1"];
$x=$_POST["Username2"];
while(!feof($file))
{
    $n = fgets($file);

    if(strpos($n,$r)!=false){
        if(strpos($n,$x)!=false){
        echo $n.'<br>';
    }

    }

}
fclose($file);