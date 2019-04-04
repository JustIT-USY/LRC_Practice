<?php
//用户输入分数，根据分数判断：
//60以下-不及格
//60-80良好
//80-90优秀
//90-100天才

$score=$_POST['score'];
//判断用户输入的是否为数值型
if(is_numeric($score)){
    if($score<60){
      echo '不及格，还需努力 <br/>';
    }elseif ($score>=60  &&$score<80) {
      echo '还不错，良好呦<br/>';
    } elseif ($score>=80 && $score<90) {
      echo "挺优秀的啦<br/>";
    }elseif ($score>=90 && $score<=100) {
      echo "很棒，你是天才<br/>";
    }elseif ($score>100) {
      echo '对不起，您已经超神啦';
    }
  }else {
    echo "非法分数";
  }






 ?>
