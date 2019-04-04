<?php
//字符连接符的例子_利用点.

echo 'a'.'b'.'c';
echo '<br/>';
echo 'a','b','c','<br/>';
$str1='hello ';
$str2='word';
echo $str1,$str2;

echo '<hr/>';
$strnew=$str1.$str2;
echo $strnew;

echo '<hr/>';
$strnew=$str1.'``'.$str2.'!';
echo $strnew;

 ?>
