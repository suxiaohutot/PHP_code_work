<?php
//声明文件解析的编码格式
header('content-type:text/html;charset=utf-8');
//引入student类文件
require'./student.class.php';
//实例化student对象，并赋值给
$student= new student ;
//为对 象属性name赋值
$student->name = '小明';
//为对象属性student_ _id 赋值
$student->student_id ='201502110178';
//为对象属性age赋值
$student->age = 18;
//实例化student对象并赋值给$student2，为属性赋值
$student2 = new student;
$student2->name ='小红';
$student2->student_id ='201502110153';
$student2->age = 17;
//让打印结果格式化输出，方便查看
echo' <pre> ' ;
//显示变量详细信息
var_dump($student,$student2);
$student->introduce();
echo"<br/";
$student->study();
?>
