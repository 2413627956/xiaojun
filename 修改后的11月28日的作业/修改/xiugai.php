<?php
$new_username = $_POST['new_username'];
$id = $_POST['id'];
$host = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'date';
$link = new mysqli($host, $username, $password,$dbname);
if ($link->connect_error) {
    die("连接失败: " . $link->connect_error);
} 
// echo "连接成功";
$stmt = $link->prepare("UPDATE xiugainicheng SET new_username = ? WHERE id = ?");
$stmt->bind_param("si", $new_username,$id);
$res=$stmt->execute();
$stmt->get_result();
if($res)
{
    echo "昵称修改成功！";
}
else{
    echo "昵称修改失败!";
}