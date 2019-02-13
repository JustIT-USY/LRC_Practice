<?php
header('content-type:text/html;charset=utf-8');
//HTTP GET变量
//主要接受以？形式传递的数据
//像表单以get形式发送数据，包括像超链接
//形式：$_GET[名称]
$keyword=$_GET['keyword'];
echo '用户搜索的关键字为：',$keyword,'<br/>';


 ?>
