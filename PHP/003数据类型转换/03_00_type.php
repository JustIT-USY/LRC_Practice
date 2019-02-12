<?php
//强制转换中的永久转换

//得到变量的类型
$var=123;

var_dump($var);//int 123
echo gettype($var);//integer

echo '<br/>';

$var=true;
echo gettype($var);//boolean

echo '<hr/>';


//永久转换settype($var,$type)设置变量类型
$var=123;

var_dump($var);

//对$var做了一个手术，变成布尔型
settype($var,'bool');//强制转换成布尔型

var_dump($var);
/*type 的可能值为：

“boolean” （或为“bool”，从 PHP 4.2.0 起）
“integer” （或为“int”，从 PHP 4.2.0 起）
“float” （只在 PHP 4.2.0 之后可以使用，对于旧版本中使用的“double”现已停用）
"string"
"array"
"object"
“null” （从 PHP 4.2.0 起）*/

$var='35kinn';
echo $var;
settype($var,'int');//强制转换成整型
var_dump($var);

//如果写成php未定义的类型，则会出现：

$var=5566.6;
var_dump($var);
settype($var,'LRC');//LRC为非法类型
var_dump($var);

// Warning: settype(): Invalid type in 46
//并且原数据类型不会改变


 ?>
