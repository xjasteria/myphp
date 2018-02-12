<?php
//php预定义的变量
 $file=$_SERVER['PHP_SELF'];
 $user=$_SERVER['HTTP_USER_AGENT'];
 $ipaddr=$_SERVER['REMOTE_ADDR'];
 echo "$file<br/>";
 echo "$user<br/>";
 echo "$ipaddr<br/>";
?>