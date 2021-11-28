<?php
$username = $_POST['username'];
$password = $_POST['password'];
$comment = $_POST['comment'];

$host = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'date';
$link = new mysqli($host, $username, $password,$dbname);
if ($link->connect_error) {
    die("连接失败: " . $link->connect_error);
} 
// echo "连接成功";
$stmt = $link->prepare("INSERT INTO  increase(username,password,comment) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $username, $password, $comment);
$res=$stmt->execute();
$stmt->get_result();
if($res)
{
    echo "hhhh";
}
else
{
echo "11";
}
?>