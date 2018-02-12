<?php
$con = mysql_connect("localhost","root","12345678");
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}

mysql_select_db("study", $con);

$result = mysql_query("SELECT * FROM `student `");

echo "<table border='1'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Age</th>
</tr>";

while($row = mysql_fetch_array($result))
{
	echo "<tr>";
	echo "<td>" . $row['ID'] . "</td>";
	echo "<td>" . $row['Name'] . "</td>";
	echo "<td>" . $row['Age'] . "</td>";
	echo "</tr>";
}
echo "</table>";

mysql_close($con);
?>