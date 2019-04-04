<?php
//运算符的优先级
//可以通过（）改变优先级
//有短路的情况优先考虑短路

$i=1;
$j=0;

if($i-- ||$j++){//1-->true || =true
  echo 'aa';
}else {
  echo 'bb';
}
var_dump($i,$j);//0.0

$i=1;
$j=0;

if($p=$i-- ||$j++){//1-->true || =true
  echo 'aa';
}else {
  echo 'bb';
}
var_dump($i,$j,$p);//0.0.true
//=y优先级比较低，所以先考虑右边再赋值给$p

$i=3;
$j=8;
//3+8=11
echo "{$i}+{$j}=".$i+$j;//'3+8=3'+8=11
echo '<br/>';
echo "{$i}+{$j}=".($i+$j);
 ?>
