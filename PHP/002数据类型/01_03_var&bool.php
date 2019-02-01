<?php
header('content-type:text/html;charset=utf-8');//告诉浏览器以什么编码方式解读-出现中文时使用
//布尔型；bool&boolean
//经常当做条件
$bool=true;
$boo=FALSE;
var_dump($bool,$boo);
echo '</br>';


//在IF语句中
$dream=false;
if($dream)
{
  echo '那么在市中心买套房';
}
else{
  echo '回家种田吧';
}
 ?>
