<?php
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

      echo $string{0};
      echo '</br>';
      echo $string{3};
      echo '<hr/>';
      //注意：修改的时候只能一个字符替换一个字符。
      $string{1}='z';
      echo "$string";//azcdefg
      echo '</br>';
      $string{4}='!';
      echo "$string";//azcd!fg
      echo '<hr/>';
      echo "注意：只能替换一个！</br></br>";
      $hello="你好";
      echo "一个中文字符占用3个字节！例如：";
      echo var_dump($hello);
      echo "所以不要对中文字符修改！";

      echo '<hr/>';
      //删除→相当于用空字符中串替换
      $strin='abcdef';
      echo $strin;
      echo '</br>';
            $strin=substr($strin,1);//$strin{1}='';→→可能因为php版本原因报错~
      echo $strin;

      echo '<hr/>';
      //添加字符
      $string='acb';
      $string{3}='d';
      echo $string;

      echo '<hr/>';
      $string='abc';//（0.1.2..5）
      $string{5}='e';
      echo $string;//只显示一个空格
      var_dump($string);//实际长度6位（两个空格）
      
?>
