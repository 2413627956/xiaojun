<?php
$username = $POST['username'];
$sex = $_POST['sex'];
$phone_number = $_POST['phone_number'];
$qq = $POST['qq'];
$college = $POST['college'];
$profession = $POST ['profession'];

$host = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'date';
$link = new mysqli($host, $username, $password,$dbname);
if ($link->connect_error) {
    die("连接失败: " . $link->connect_error);
} 
//echo "连接成功";
$sql = "INSERT INTO charr(username,sex,college,phone_number,profession,qq) VALUES (?,?,?,?,?,?);";
$stmt = $link->prepare($sql);
$stmt->bind_param("sssssi", $username, $sex, $college,$phone_number,$profession,$qq);
$res=$stmt->execute();
$stmt->get_result();
if($res)
{
    echo "个人信息插入成功！";
}else{
    echo "个人信息插入失败！";
}