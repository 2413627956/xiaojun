<?php
$username = $_POST['username'];
$password = $_POST['password'];
$host = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'date';
$link = new mysqli($host, $username, $password,$dbname);
if ($link->connect_error) {
    die("连接失败: " . $link->connect_error);
} 
$stmt = $link->prepare("SELECT*FROM deng WHERE username = ? AND password = ? ");
$stmt->bind_param("ss", $username, $password);
$res=$stmt->execute();
//$stmt->get_result();
if($stmt->get_result()> 0){
    echo '登录成功！';
}else{
    echo '登陆失败！';
}