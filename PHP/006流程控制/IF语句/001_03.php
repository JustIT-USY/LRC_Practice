<?php
//IF嵌套
$username='LRC';
$age=12;

if($username=='LRC'){
  echo 'hello LRC<br/>';
  if($age>18){
    echo '成年了<br/>';
  }else {
    echo '未成年<br/>';
  }
}else {
  echo 'hello everyone<br/>';
}

 ?>
