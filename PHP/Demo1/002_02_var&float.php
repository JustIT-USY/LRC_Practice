<?php
//浮点数有误差，不要比较两个浮点数的大小
$float=12.333;
var_dump($float);

//科学计数法写法
$float=2e3;//2乘以10的三次方
var_dump($float);
echo '</br>';
//E的大小写无所谓！
$float=2E-3;
var_dump($float);

?>
