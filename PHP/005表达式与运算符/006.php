<?php
//逻辑运算符——结果：布尔类型
/*逻辑与：&&或者and代表逻辑与，是并且的意思，两个表达式都为true，结果为true
  逻辑或：||或者or，是或者的意思，表达式有一个为true，结果为true
  逻辑非，！代表非，是取反
  逻辑异或，XOR代表逻辑异或，是两个表达式不同为true或者false结果true
*/
//逻辑_与
var_dump(
  true && true,
  true && false,
  false && true,
  false && false
);

echo '<hr/>';
//逻辑_或
var_dump(
  true || true,
  true || false,
  false || true,
  false || false
);

//逻辑_非
var_dump(
  !true,
  !false
);

echo '<hr/>';
//逻辑异或
var_dump(
  true xor true,
  true xor false,
  false xor true,
  false xor false
);

echo '<hr/>';

//逻辑（与、或）：短路：若第一个表达式为false则第二个表达式短路
//逻辑与.短路.测试
$i=0;
$j=1;
if($i&&$j){//0=false && =false
  echo 'aa';
}else{
  echo 'bb';
}

$i=0;
$j=1;
if($i && --$j){//$i=0->false-->false-->dd
  echo 'cc';
}else{
  echo 'dd';
}
var_dump($i,$j);//0.1


$i=0;
$j=0;
if(++$i && $j++){//1->true && 0->false-->false
  echo 'ee';
}else {
  echo 'aa';
}

var_dump($i,$j);//1.1

echo '<hr/>';
//逻辑或短路
$i=1;
$j=1;
if($i-- || ++$j){//1->true || =true
  echo '!!!';
}else {
  echo '###';
}
var_dump($i,$j);//0.1


echo '<hr/>';

$i=1;
$j=0;
var_dump(
  !0,
  ++$abcdef && --$abcdeflk,//null支持递增 ->1->ture;null->false
  --$i || --$j

);

 ?>
