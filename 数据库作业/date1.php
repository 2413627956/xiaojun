<?php
$host = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'date';
$link = mysqli_connect($host,$username,$password);
if(mysqli_select_db($link, $dbname)){
    echo "<script type = text/javascript>alert('数据库选择成功！') </script>";
   $sql = 'select*from data1';
   var_dump(mysqli_query($link,$sql));
}else{
    echo "<script type = text/javascript>alert('数据库选择失败！')</script>";
}
