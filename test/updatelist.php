<?php
include 'DB.php';
$id=$_POST['lyid'];
$cont=$_POST['cont'];
var_dump($cont);
echo  $cont;
$sql="update liuyan set count='$cont' where id='$id'";
dbcon();
$sent=mysqli_query($dbcon, $sql);
header("location:liuyanlist.php");
?>