<?php
//接受超链接发送过来的数据
// print_r($_GET);
/*
echo $_GET['username'],'<br/>';
echo $_GET['age'],'<br/>';
echo $_GET['a'],'<br/>';
echo $_GET['b'],'<br/>';
echo $_GET['c'],'<br/>';
*/

//  ini_set("error_reporting","E_ALL & ~E_NOTICE"); // 解决不要显示php通知的语句
// $_REQUSET变量
echo $_REQUSET['username'];//会显示Notice: Undefined variable: _REQUSET

 ?>
