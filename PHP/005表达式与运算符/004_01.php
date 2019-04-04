<?php
//产生一个随机数
//mt_rand($min,$max);产生随机数


echo mt_rand(1,9);
echo '<br/>';

echo mt_rand(1000,9000);

echo '<br/>';

//连接'.插入内容.'

echo '<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).' )">'.mt_rand(1,9).'</span>';
echo '<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).' )">'.mt_rand(1,9).'</span>';
echo '<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).' )">'.mt_rand(1,9).'</span>';
echo '<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).' )">'.mt_rand(1,9).'</span>';

echo '<hr/>';


//小应用：彩色四数验证码
$code.='<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).' )">'.mt_rand(1,9).'</span>';
$code.='<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).' )">'.mt_rand(1,9).'</span>';
$code.='<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).' )">'.mt_rand(1,9).'</span>';
$code.='<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).' )">'.mt_rand(1,9).'</span>';

echo $code;

 ?>
