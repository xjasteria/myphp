<?php
$con = mysql_connect("localhost","root","12345678");
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}

mysql_select_db("study", $con);

$sql="INSERT INTO `student ` (`ID`, `Name`, `Age`)
VALUES
('$_POST[id]','$_POST[name]','$_POST[age]')";

if (!mysql_query($sql,$con))
{
	die('Error: ' . mysql_error());
}
echo "1 record added";

mysql_close($con)

?>