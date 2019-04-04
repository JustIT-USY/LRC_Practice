<?php
//接收数据
$num1=$_POST['num1'];
$num2=$_POST['num2'];
$num3=$_POST['num3'];
//num1>num2 num1>num3
if ($num1>=$num2) {
  $max=$num1;
}else {
  $max=$num2;
}

if ($max<$num3) {
  $max=$num3;
}

echo "最大值为",$max;
 ?>
