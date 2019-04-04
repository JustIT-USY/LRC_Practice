<?php
//用户输入数字，显示奇数还是偶数
//判断用户输入的数字是否 是闰年
//用户输入三个数字，输出其最大值

//例1
//繁琐的写法
// $number=$_POST ['number'];
// echo $number;
// if ($number%2==1) {
//   echo $number ,'是基数<br/>';
// }else {
//   echo $number ,'是偶数<br/>';
// }

//简便的写法
$number=$_POST ['number'];
// echo $number;
if($number%2==0){
  echo $number.'是偶数<br/>';
}else {
  echo $number.'是偶数<br/>';
}



 ?>
