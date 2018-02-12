<?php
$con = mysql_connect("localhost","root","12345678");
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}
//创建一个名为study的数据库
if (mysql_query("CREATE DATABASE study",$con))
{
	echo "Database created";
}
else
{
	echo "Error creating database: " . mysql_error();
}

//创建表
mysql_select_db("study", $con);
$sql = "CREATE TABLE Student 
(
ID varchar(15),
Name varchar(15),
Age int
)";
mysql_query($sql,$con);

mysql_close($con);


?>