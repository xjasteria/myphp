<?php
echo '<form action="" method="post">';
echo '<select name="year">';
$year=2005;
while ($year<=2018){
	echo "<option value=\"$year\">$year</option>\n";
	$year++;
}
echo '</select>年';

echo '<select name="month">';
$month=1;
do {
	echo "<option value=\"$month\">$month</option>\n";
	$month++;
}while ($month<=12);
echo '</select>月';

echo '<select name="day">';
for ($day=1;$day<=31;$day++){
	echo "<option value=\"$day\">$day</option>\n";
}
echo '</select>日';
?>