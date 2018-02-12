<?php
$con = mysql_connect("localhost","root","12345678");
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}

mysql_select_db("study", $con);
$id = isset($_POST['id']) ? intval($_POST['id']) : 0;
$sql="UPDATE `student ` SET
`Name`='$_POST[name]',`Age`='$_POST[age]' WHERE `ID`=$id";

if (!mysql_query($sql,$con))
{
	die('Error: ' . mysql_error());
}
echo "1 record update";

mysql_close($con);

echo "<td> <a href=demo0.php>返回</a></td>";
?>
