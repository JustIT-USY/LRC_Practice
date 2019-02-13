<?php
//接受表单发送数据
//利用$_POST[名称] 接受数据
/*
echo '用户名：',$_POST['username'],'<br/>';
echo '密码：',$_POST['password'],'<br/>';
echo '邮箱：',$_POST['email'],'<br/>';
echo '性别：',$_POST['sex'],'<br/>';
*/
//测试request，指定了使用post方式可以成功！
echo $_REQUEST['username'],'<br/>';
echo $_REQUEST['password'],'<br/>';
echo $_REQUEST['email'],'<br/>';
echo $_REQUEST['sex'],'<br/>';
 ?>
