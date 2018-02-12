
<html>
<body>

<form action="demo1.php" method="post">
<table>
<tr><th> ID: </th><td> <input type="text" name="id" value="<?php echo $emp_info['id']; ?>" /> </td></tr>
<tr><th> Name: </th><td><input type="text" name="name" value="<?php echo $emp_info['name']; ?>" /> </td></tr>
<tr><th> Age: </th><td><input type="text" name="age" value="<?php echo $emp_info['age']; ?>" /> </td></tr>
</table>
<input type="submit" value="提交" />
</form>

</body>
</html>
