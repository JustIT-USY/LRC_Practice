<?php
header('content-type:text/html;charset=utf-8');
//...doc相当于单双引号，主要用于书写大段内容

//nowdoc=单引号
$username='Xlcjs.';
$str=<<<'bnow'
<h3>This is text</h3>
<p>用户名：{$username}</p>
bnow;
//相当于单引号，变量原样输出
echo $str;
?>
