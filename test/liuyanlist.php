<?php
include 'DB.php';
$sqli="select * from liuyan";
dbcon();
$seti=mysqli_query($dbcon,$sqli);
echo "<table border='1'>
		<tr>
			<td>序号</td>
        	<td>留言内容</td>
        	<td>留言人</td>
        	<td>留言时间</td>
        	<td>操作/编辑</td>
		</tr>";
while ($reut=mysqli_fetch_assoc($seti)){
    echo "<tr>";
    foreach ($reut as $v)
    {
        echo "<td>".$v."</td>";
    }
    $time=$reut['time'];
    $id=$reut['id'];
?>				
			<td>
        		<a href="delt.php?url=delt.php&id=<?php echo $id ?>">删除</a>
        		<a href="edit.php?id=<?php echo $id ?>">编辑</a>
        		<br/><br/>
            </td>
	<tr>
	<?php }?>
	</table> 
	
    <?php 
 echo "<br>"."<a href='dengluhtml.php'>重新登录</a>";
 ?>




 

