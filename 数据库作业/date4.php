<?php
$host = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'date';
$link = mysqli_connect($host,$username,$password,$dbname);
$sql = "update data1 set 小明 = '1234'where id = '1'";
mysqli_query($link,$sql);
