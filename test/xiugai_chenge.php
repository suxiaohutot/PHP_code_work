<?php
include_once ('database.php');
$id=$_POST['id'];
$name=$_POST['name'];
$password=$_POST['password'];
$yzid= "select * from user where id='$id'";
$ret=mysqli_query($databasecon, $yzid);
$num=mysqli_num_rows($ret);
if ($num==1){
    $xiugaisql="update user set name='$name',password='$password' where id='$id'";
    getcon();
    mysqli_query( $databasecon,"set name utf8");//设置数据链接编码
    mysqli_query ($databasecon,$xiugaisql);
    echo "注册成功";"<br/>";
    $userid=mysqli_insert_id( $databasecon);
    closecon();
}else{
    exit("当前ID未注册");
}
?>