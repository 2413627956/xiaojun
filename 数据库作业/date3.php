<?php
//$host = 'localhost';
//$username = 'root';
//$password = 'root';
//$dbname = 'date';
//$link = new mysqli($host,$username,$password,$dbname);
//$sql = 'delete from data1 where id = 1';
//var_dump(mysqli_query($link,$sql));
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "text";
$conn = new mysqli($servername, $username, $password,$dbname);

$sql = "DELETE FROM text WHERE id = 1";
$res=mysqli_query($conn,$sql);

//$conn->close();