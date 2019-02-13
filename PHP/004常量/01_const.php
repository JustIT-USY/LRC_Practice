<?php
// header('content-type:text/heml;charset=utf-8');
//PHP中的常量
//01系统常量-可以直接使用
echo PHP_VERSION;

echo'<br/>';
echo PHP_OS;

echo '<br/>';
echo PHP_INT_MAX;
echo '<br/>';

//02自定义常量-通过define()定义常量
// define(NAME,VALUE);定义常量
/*
常量不加$
常量最好大写，以字母或者下划线开始
常量区分大小写！
常量作用于全局
常量一经定义，在脚本运行期间不可改变
常量的值可以是标量类型也可以是数组.
*/
define('TEXT','this is a text');

echo TEXT;//不需要放到‘’之间，之间为一个字符串
echo '<br/>';
echo 'TEXT';//为字符串

echo '<hr/>';
//常量一经定义不能改变
define('TEXT','hello word');//Notice: Constant TEXT already defined in31
echo TEXT;//仍是原来值



echo '<hr/>';
define('USERNAME','Xlcjs');
define('AGE',19);
define('MARRIED','false');
define('TEXT_ARRAY',array('a','n','c'));

echo '姓名为：',USERNAME,'<br/>';
echo '年龄为：',AGE,'<br/>';
echo '是否结婚：',MARRIED,'<br/>';
//测试数组-打印
var_dump(TEXT_ARRAY);

//针对数据库
define('USERNAME','root');
define('PASSWORD','root');
define('DB_NAME','text');
echo '<hr/>';
echo USERNAME,'<br/>';
echo PASSWORD,'<br/>';
echo DB_NAME,'<br/>';
 ?>
