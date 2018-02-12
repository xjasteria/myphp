<?php
$week=array(
		'Mon'=>'Monday',
		'Tue'=>'Tuesday',
		'Wed'=>'Wednesday',
		'Thu'=>'Thursday',
		'Fri'=>'Friday'
);

//print_r($week);

//print "<p>$week</p>";

$week['Sat']='Saturday';
$week['Sun']='Sunday';

//var_dump($week);

//foreach
foreach ($week as $k=>$y){
	echo "<p>$k:$y</p>\n";
}

?>