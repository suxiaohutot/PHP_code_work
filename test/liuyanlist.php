<?php
include 'db.php';
$sqli="select * from liuyan";
dbcon();
$seti=mysqli_query($dbcon, $sqli);
?>
<table border="1">
		<tr>
			<td>留言人</td>
			<td>留言内容</td>
			<td>留言时间</td>
			<td>操作</td>
		</tr>
		</table>
<?php 
while ($reut=mysqli_fetch_array($seti)){
//     echo  "留言人:" .$reut["name"]."<br>";
//     echo  "留言内容：".$reut['count']."<br>";
    $time=$reut['time'];
//     echo "留言时间：".$time."<br>";
    $id=$reut['id'];
    ?>
    <!--
    <a href="delt.php?url=delt.php&id=<?php echo $id ?>">删除</a>
    <a href="edit.php?id=<?php echo $id ?>">编辑</a><?php echo "<br><br>"?> 
    -->
    <table border="1">
		<tr>
    		<td><?php echo $reut["name"] ?></td>
    		<td><?php echo $reut['count'] ?></td>
    		<td><?php echo $reut['time'] ?></td>
    		<td>
        		<a href="delt.php?url=delt.php&id=<?php echo $id ?>">删除</a>
        		<a href="edit.php?id=<?php echo $id ?>">编辑</a>
        		<br/><br/>
            </td>
		</tr>
	</table> 
	
    <?php 
    
 }   
 echo "<br>"."<a href='dengluhtml.php'>重新登录</a>";
 ?>
 
