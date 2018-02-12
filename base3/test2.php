<?php
//多维数组
$books=array(1=>'心理罪','暗黑者','少年包青天');
$movies=array(1=>'天空之城','暮光之城','千与千寻');
$songs=array(1=>'青花瓷','明天过后','滴答');

$interests=array(
		'books'=>$books,
		'movies'=>$movies,
		'songs'=>$songs	
);

echo "<p>我最喜欢的一部电影是 <i>{$interests['movies'][1]}。</i></p>";

foreach ($interests as $k=>$v){
	print "<p>$k";
	foreach ($v as $num=>$value){
		print "<br/>我喜欢的第 $num 个是$value";
	}
	print "</p>";
}
?>