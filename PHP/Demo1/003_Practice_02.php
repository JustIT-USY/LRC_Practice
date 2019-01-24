<?php
header('content-type:text/html;charset=utf-8');
$string='Xlcjswow';
//1.输出首字母
//2.再讲字符串中的c变成p
echo '3.将字符串中的w删除掉→不知';
//4.在字符串末尾添加一个！

echo $string{0};
echo '</br>';
$string{2}='p';
echo $string;
// echo '</br>';
// // $string=substr($string,6);
// echo $string;
echo '</br>';
$string{8}='!';
echo $string;

 ?>
