<?php
//利用max ；min
header('content-type:text/html;charset=utf-8');
//接收数据
$num1=$_POST['num1'];
$num2=$_POST['num2'];
$num3=$_POST['num3'];
//利用php自带函数比较大小值
$max= max($num1,$num2,$num3);
$min= min($num1,$num2,$num3);
echo '输出的最大值为：',$max;
echo '输出的最小值为：',$min;
 ?>
