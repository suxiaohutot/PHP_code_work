<?php 
session_start();
include 'DB.php';
// $id=$_POST['id'];
$name=$_SESSION['username'];
$cont=$_POST['cont'];
$time=date('Y-m-d H:i:s');

$sql="insert into liuyan values(null,'$cont','$name','$time')";
dbcon();
$set=mysqli_query($dbcon, $sql);
if($set){
    echo "留言成功"."<a href='liuyanlist.php'>留言列表</a>"; 
}else {
    echo "留言失败"."<a href='dengluhtml.php'>返回登录</a>";
}
?>