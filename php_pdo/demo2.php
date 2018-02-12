<?php if(!defined('APP')) die('error!'); ?>
<!doctype html>
<html>
 <head>
  <meta charset="utf-8">
  <title>PDO基本使用</title>
  <style>
  .tbl{ border:1px solid #174464;border-collapse:collapse; margin:0px auto;}
  .tbl tr{ height:30px;}
  .tbl td{ padding:5px 7px;}
  .tbl tr:nth-child(1){ background:#174464; color:#FFF; font-weight:bold;}
  h2{ text-align:center; color:#174464;}
  </style>
 </head>
 <body>
 	<h2>学生信息列表</h2>
	<table class="tbl">
	<tr>
		<td>序号</td>
		<td>姓名</td>
		<td>年龄</td>
	</tr>
	<?php foreach($study_info as $row):?>
	<tr>
		<td><?php echo $row['ID'];?></td>
		<td><?php echo $row['Name'];?></td>
		<td><?php echo $row['Age'];?></td>
	</tr>
	<?php endforeach;?>
	</table>
 </body>
</html>