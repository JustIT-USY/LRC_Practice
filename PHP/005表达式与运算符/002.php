<?php
//递增递减运算符
echo 2**8,'<br/>';//代表2^8
$var=1;
//前缀形式(先加减后执行)
//整数支持--++
//后缀形式（先计算，再加减）
echo '<br/>';
echo ++$var,'<br/>';//2

$var=2;
echo $var++,'<br/>';//2
echo $var,'<br/>';//3

echo '<hr/>';

$j=4;
echo $j--,'<br/>';
echo $j,'<br/>';

echo '<hr/>';
 $k=5;
 $k--;//5

 echo $k,'<br/>';//4



//测试浮点类型是否支持
$var=1.2;
echo ++$var,'<br/>';
echo --$var,'<br/>';


echo '<hr/>';
//布尔类型测试
$a=true;

echo $a,'<br/>';
echo ++$a;//1

/*结论：布尔型不能进行自增自减！*/

echo '<hr/>';
//测试null---只支持递增不支持递减
$var=null;
echo $var,'<br/>';
echo ++$var,'<br/>';

 $var=null;
 echo '#',--$var,'#','<br/>';//空


echo '<hr/>';
//测试字符串-支持递增；不支持递减
$str='a';
echo ++$str,'<br/>';//b
$str='b';
echo --$str,'<br/>';//b

$str='z';
echo ++$str,'<br/>';//aa（最小的一位是a）

$str='a1';

echo ++$str,'<br/>';//a2

$str=a9;
echo ++$str,'<br/>';//b0

$str=B;
echo ++$str,'<bt/>';



 ?>
