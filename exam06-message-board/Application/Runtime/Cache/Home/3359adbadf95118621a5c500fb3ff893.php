<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>注册</title>
</head>
<body>
<h1>用户注册</h1>
<form action="/phpwork/mythinkphp/index.php/Home/User/do_register" method="post">
	<table>
		<tr>
			<td><label for="username">用户名</label></td>
			<td><input type="text" name="username" id="username" required></td>
		</tr>
		<tr>
			<td><label for="password">密码</label></td>
			<td><input type="password" name="password" id="password" required></td>
		</tr>
		<tr>
			<td><label for="repassword">确认密码</label></td>
			<td><input type="password" name="repassword" id="repassword" required></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<button>注册</button>
				<button type="reset">重置</button>
			</td>
		</tr>
	</table>
</form>
<p>
	<a href="/phpwork/mythinkphp/index.php/Home/User/login">已有账号？点击登录</a>
</p>
</body>
</html>