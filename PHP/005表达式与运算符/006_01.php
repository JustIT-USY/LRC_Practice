<?php
//  错误抑制符->抑制错误输出，通过@符号加到会产生错误的表达是之前
$var=123;
// settype($var,'lrc');// Warning: settype():
@settype($var,'lrc');//不显示错误；通知
//语法与致命错误是抑制掉的

 ?>
