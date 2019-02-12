<?php
error_reporting(E_ALL&~E_NOTICE);//设置错误级别，E_LL但是除了通知级别的
//复合类型compoundType（数组、对象）、特殊类型以及5种伪类型(number数值型,mixed混合型,callback回调函数,void没有返回值,...当一个函数可以接受任意个参数时使用此变量)的了解
//声明一个数组
$arr=array();
var_dump($arr);
$arr=array(12,'Xlcujs',3.14159);
var_dump($arr);

//对象-面向对象编程
$obj=new StdClass();
var_dump($obj);//object(stdClass)[1]

//资源
$handle=fopen('./l.html','r');
var_dump($handle);//resource(2, stream)

//is_null
/*1.变量未声明直接使用
2.声明一个变量并且赋值为null
3.经过unset注销的变量*/
//测试null
//1
var_dump($notExistsVar);//is_null
//2
$var=null;
var_dump($var);
//3:unset — 释放给定的变量
echo '<hr/>';
$varr=123;
var_dump($varr);//is_null
unset($varr);//unset销毁变量
var_dump($varr);

echo '<hr/>';
//一次销毁多个变量
$a=1;
$b='Xlcjs';
$c=3.123;
var_dump($a,$b,$c);
unset($a,$b,$c);
var_dump($a,$b,$c);
?>
