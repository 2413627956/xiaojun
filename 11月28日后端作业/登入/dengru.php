<?php
$username1 = $_POST['username'];
$password1 = $_POST['password'];
$host = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'date';
$link = new mysqli($host, $username, $password,$dbname);
if ($link->connect_error) {
    die("连接失败: " . $link->connect_error);
} 
$sql = "SELECT*FROM deng WHERE username = '$username1'AND password = '$password1'";
$rs = $link->query($sql);
if($rs &&$rs->num_rows >0){
    echo '登录成功！';
}else{
    echo '登陆失败！';
}