<?php
 define('TODAY', '2017年12月1日');
 
 echo '欢迎光临本站，今天是：'.TODAY.'<br/>';
 echo '您的信息如下表：<br/>';
 echo '<table border=1>';
 echo '<tr><th>操作系统</th>';
 echo '<td>'.PHP_OS.'</td></tr>';
 
 echo '<tr><th>操作系统与浏览器版本</th>';
 echo '<td>'.$_SERVER['HTTP_USER_AGENT'].'</td></tr>';
 
 echo '<tr><th>IP地址</th>';
 echo '<td>'.$_SERVER['REMOTE_ADDR'].'</td></tr>';
 
 echo '<tr><th>php版本</th>';
 echo '<td>'.PHP_VERSION.'</td></tr>';
 
 echo '<tr><th>脚本的相对路径名</th>';
 echo '<td>'.$_SERVER['PHP_SELF'].'</td></tr>';
 
 echo '<tr><th>脚本的绝对路径名</th>';
 echo '<td>'.__FILE__.'</td></tr>';
 
 echo '</table>';
 
?>