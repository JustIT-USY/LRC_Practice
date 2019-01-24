<?php
//声明整型

//十进制数字
$var=123;
echo '123的十进制数：';
echo $var;
var_dump($var);//var_dump(...)→打印变量信息

echo '</br>';
//变量名重复，后者会覆盖前者
$var=25.8;
var_dump($var);

echo '</br>';
//声明一个8进制整数
$var=0123;
echo '0123的8进制数是：';
echo $var;
var_dump($var);

echo '</br>';
//声明十六进制整数
$var=0xabcdef;
echo 'abcdef的十六进制数 :';
echo $var;
var_dump($var);

echo '</br>';
//一次声明多个变量并声明相同初始值
$a=$b=$c=$d=25963.3;
var_dump($a,$b,$c,$d);//一次打印多个变量的详细信息

?>
