<?php
//自动转换
echo 'this is a text<br/>';
echo '123<BR/>';
echo true;
echo '</br></br></br>';

//其他类型转换成数值型

echo 1+3,'<br/>';//4
echo 1+true,'<br/>';//true->1
echo 1+false,'<br/>';//false->0
echo 1+null,'<br/>';//null->0
/*注意：字符串以非法数值开始->0；
如果字符串以合法字符开始，一直取到第一个法数值结束 */
echo 1+'3kl';//3kl->3
echo '<br/>';
echo 1+'22a3b4c';//2a3b4c->22;只取合法数字
echo '<br/>';
echo 1+'2e2a3c';//注意2e2
echo 1+'true';//'true->0'

echo '<hr color="pink"/>';
//转换成字符串型
echo false;//空
echo null;//空

echo '<hr color="global"/>';
//转换成布尔型-假的情况
//1
/*$dream=true;
if($dream){
  echo '买房';
}else{
  echo 'coding';
}
*/
$var=123;//真
$var=-123;//真
$var=0;//0->false
$var=3.145;//真
$var=0.0;//->false
$var='';//假的
$var='    ';//真
$var='false';//真，字符串的真
$var='0';//假的
$var='0.0';//真
$var=null;//假
$var=array();//空数组->假
if($var){
  echo'真的';
}else{
  echo '假的';
}

?>
