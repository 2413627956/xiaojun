<?php
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
$stmt = $link->prepare("DELETE FROM increase WHERE comment = ?");
$stmt->bind_param("s",$comment);
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
