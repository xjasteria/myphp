<?php
$con = mysql_connect("localhost","root","12345678");
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}

mysql_select_db("study", $con);

$result = mysql_query("SELECT * FROM `student `");

echo "学生相关信息";
echo "<br>";
echo "<td> <a href=test3.html>添加学生</a></td>";
echo "<table border='1'>
<tr>
<th>ID</th>
<th>姓名</th>
<th>年龄</th>
<th>相关操作</th>
</tr>";

while($row = mysql_fetch_array($result))
{
	echo "<tr>";
	echo "<td>" . $row['ID'] . "</td>";
	echo "<td>" . $row['Name'] . "</td>";
	echo "<td>" . $row['Age'] . "</td>";
	echo "<td> <a href=".'./test1.php?id='.$row['ID'].">编辑</a>&nbsp; &nbsp;
			<a href=".'./demo2.php?id='.$row['ID'].">删除</a></td>";
	echo "</tr>";
}
echo "</table>";



mysql_close($con);
?>