<?php
$dbcon=null;
function dbcon(){
    global $dbcon;
    $dbcon=mysqli_connect('localhost','root','');
    mysqli_select_db($dbcon, 'test');
    mysqli_query($dbcon, "set names utf8");
}
function close(){
    global $dbcon;
    if($dbcon){
        mysqli_close($dbcon);
    }
}
?>