<?php
//强制转换
//临时转换-不改变变量本身
$vsar=true;
var_dump($vsar);
$res=(int)$vsar;
var_dump($res);
var_dump($vsar);

echo '<hr/>';
//转换成整型
var_dump((int)$vsar,(integer)$vsar);

$var=3.6;
//舍去小数部分，并非四舍五入
var_dump((int)$var,(integer)$var);

echo '<hr/>';
//转换成字符串型
$var=true;
var_dump((string)$var);

//转换成布尔型
$var='3K';
var_dump((bool)$var,(boolean)$var);

//转换成空
$var='hello';
var_dump((unset)$var);




 ?>
