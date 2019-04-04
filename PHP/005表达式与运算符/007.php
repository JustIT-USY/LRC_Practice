<?php
//按照运算符的数目划分；
/*一元运算符!
  二元运算符+-
  三院运算符exp1?exp2:exp3
        若exp1为true;执行exp2,否则执行exp3
*/
//三元运算符相当于所写的if..else
//测试三元运算符
if(true){
  echo 'aa';
}else {
  echo 'bb';
}
echo '<br/>';

echo ture?'aa':'bb';

echo '<hr/>';

if($username=='lrc'){
  $res= 'hello lrc';
}else {
  $res='hello evetybody';
}
echo $res;


echo '<br/>';
$res=$username=='lrc'?'hello lrc':'hello everbody';
echo $res;


echo '<hr/>';
$ser=132?:'abc';
var_dump($sre);

$ser=0?:'nnn';
var_dump($ser);

 ?>
