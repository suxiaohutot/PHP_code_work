<?php
include 'DB.php';
session_start();//打开session
$username=$_POST['username'];
$password=$_POST['password'];
$_SESSION['username']=$username;
$sql="select * from user where name='$username' and password='$password'";
dbcon();
$result=mysqli_query($dbcon, $sql);
$num=mysqli_num_rows($result);
while ($nameinfo=mysqli_fetch_array($result)){
    echo "用户名:".$nameinfo['name'];
}
if ($num>0){
    echo "登录成功"."<br>"."<a href='liuyanhtml.php'>留言列表</a>";
}
else {
    echo "用户名或者密码错误"."<br><br>"."<a href='dengluhtml.php'>返回登录</a>"."<br><br>"."<a href='*****.php'>找回密码</a>";
}
?>