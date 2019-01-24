<?php
header('content-type:text/html;charset=utf-8');
//定界符：单引号/双引号/heredoc/nowdoc；
        $username='云儿';
        $usernames='云儿~';
        $email='Xlcjs17@gmail.com';
        $string='';//空字符串
           var_dump($string);//:string '' ((长度）length=0)
           var_dump($username);//string 'Xlcjs.' (length=6)
echo '<hr/>';
/*单引号双引号区别：*/
/*纯语句中：*/
         echo 'this is a text </br>';
         echo "hello word!";
          echo '</br>';
          echo '</br>';
         /*输出变量中*/
         echo '$username';//单引号不解析变量
         echo '</br>';
         echo "$usernames";//双引号解析变量！
         echo "<H1>所以单引号解析效率更高!</H1>";
echo '<hr/>';
//想预览到这句话：He said "I'm fine".
echo '</br>';
   // echo 'She said "I'am fine".';//使用单双引号都不行！
   // //如果内容和定界符冲突，则需要转移符.
   echo 'She said "I\'am fine".';//使用单双引号都不行！
      echo '</br>';
   echo "She said \"I'am fine\".";//使用单双引号都不行！
      echo "<hr/>";
  //使用基本转义符
  $str='!\r@\n#\t%';//只在源码中显示的转义符
  $stra='a\\b\'c\$de';//其他转义符
  //单引号作为定界符，只转义：\'和\\两个转义符
  $strs="!\r@\n#\t%a\\b\"c\$de";//双引号输出所有转义符
  echo "$str";
      echo "<hr/>";
  echo "$stra";
      echo "<hr/>";
  echo "$strs";
      echo "<hr/>";
      echo '<hr/>';
      echo '花括号的两个作用';
      echo '</br>';
  //PHP引擎在解析变量时候，会尽可能多地向后取得字符（认为取得多更准确！）
  // //解决方式：花括号！→1.可以将PHP中的变量扩成一个整体；
  //                     2.可以对字符串中的指定字符进行增删改查操作
  $username='Xlcjs.';
    echo "我是{$username}哈哈哈哈";//花括号之间不要加空格（不然会当做普通字符！）
    echo '</br>';
    echo "我是${username}哈哈哈哈";
echo '<hr/>';
//对于字符串中的制定字符进行增删改查：
  $string='abcdefg';
  //查找

  echo "$string{0}";

  echo '</br>';

  echo "$string{3}";








 ?>
