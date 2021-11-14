<?php
$host = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'text';
$link = mysqli_connect($host,$username,$password,$dbname);
//mysqli_select_db($link, $dbname);
  //  echo "<script type = text/javascript>alert('数据库选择成功！') </script>";
$sql = 'insert into text values(4,"小刚","56")';
mysqli_query($link,$sql);
//}else{
  //  echo "<script type = text/javascript>alert('数据库选择失败！')</script>";
//S}
