<?php
session_start();
include 'DB.php';
$id=$_GET['id'];
$sql="DELETE FROM liuyan WHERE id=$id";
dbcon();
$set=mysqli_query($dbcon, $sql);
if($set){
    echo "删除成功"."<a href='liuyanlist.php'>留言列表</a>";
}else {
    echo "删除失败"."<a href='dengluhtml.php'>返回登录</a>";
}
?>
