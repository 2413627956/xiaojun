<?php
$username1 = $_POST['username'];
$password2 = $_POST['password'];
$host = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'date';
$link = new mysqli($host, $username, $password,$dbname);
if ($link->connect_error) {
    die("连接失败: " . $link->connect_error);
} 
$sql = "SELECT*FROM zhu WHERE username = '$username1'";
$rs = $link->query($sql);
if($rs &&$rs->num_rows >0){
    echo "用户名已经存在！";
}else{
    if($username1==NULL){
        echo "用户名不能为空";
    }else{
        $stmt = $link->prepare("INSERT INTO  zhu(username,password) VALUES (?, ?)");
        $stmt->bind_param("ss", $username1, $password2);
        $res=$stmt->execute();
        $stmt->get_result();
        if($res){
            echo "用户注册成功";
        }else{
            echo "用户注册失败";
        }
    }
}