<?php
//通过变量函数库is_*($var)检测 变量类型
$var=123;//true
$var=12.3;//false
//用法：is_int($var);
var_dump(is_int($var));

echo '<hr/>';

//检测整型
$var=0;
var_dump(
  is_int($var),
  is_integer($var),
  is_long($var)
);

echo '<hr/>';
//检测浮点类型
$var=2.23;
var_dump(
  is_float($var),
  is_double($var),
  is_real($var)
);

  echo '<hr/>';
  //检测字符串型
$var='213lrc';
var_dump(is_string($var));

echo '<hr/>';
//检测布尔类型
$var=false;
var_dump(is_bool($var));

echo '<hr/>';
//检测标量类型
$var=123;//true
$var=null;//false
var_dump(is_scalar($var));

echo'<hr/>';
//是否为null
$var=null;
var_dump(is_null($var));

echo'<hr/>';
//检测为数组
$var=array();
var_dump(is_array($var));

echo'<hr/>';
//是否为对象
$var=new StdClass();
var_dump(is_object($var));

echo'<hr/>';
//是否为资源
$var=fopen('./01_type.php','r');
var_dump(is_resource($var));

echo '<hr/>';
//！重要：检测是否为数值型或者字符串形式的数值
$var=123;//true
$var=234;//true
$var='0';//true
$var='20.3a';//false
var_dump(is_numeric($var));

 ?>
