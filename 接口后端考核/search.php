<?php
//加油喔
$file=fopen("database.txt","r");
$r=$_POST["Username"];
while(!feof($file))
{
    $n = fgets($file);
    if(strpos($n,$r)!=false)
    {
        echo $n.'<br>';
    }
    
}
fclose($file);





