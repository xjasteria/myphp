<?php
$con = mysql_connect("localhost","root","12345678");
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}

mysql_select_db("study", $con);

mysql_query("INSERT INTO `student ` (`ID`, `Name`, `Age`)
VALUES ('1001', 'Alice', '33');");

mysql_query("INSERT INTO `student ` (`ID`, `Name`, `Age`)
VALUES ('1002', 'Bob', '22');");

mysql_close($con);
?>