<?php
//通过const关键字定义常量
const WEB_TITLE='Xlcjs\'Blog';
const WEB_BLOG_URL='http://Blog.Xlcjs.me';
const WEB_ADMIN='XLCJS';

echo WEB_TITLE,'<br/>';
echo WEB_BLOG_URL,'<br/>';
echo WEB_ADMIN,'<br/>';
//已经定义的不可再定义
const TEXT='XXXXl';
// const TEXT='11123';

echo TEXT,'<br/>';//Notice: Constant TEXT already defined in12

echo '<hr/>';

//通过constant来获取常量的值
echo constant('TEXT');

echo '<br/>';

echo constant('PHP_VERSION'),'<br/>';

//不论是系统常量或者其他常量一经定义，则无法更改
//可以通过defined($name) 检测常量是否被定义
var_dump(defined('XLCJ'));//false
var_dump(defined('PHP_VERSION'));//true

//通过get_defined_constants();返回的事数组，包含所有已经定义的系统常量和自定义常量；
 print_r(get_defined_constants());//print_r:打印数组信息






 ?>
