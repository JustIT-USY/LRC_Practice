<?php
header('content-type:text/html;charset=utf-8');
//...doc相当于单双引号，主要用于书写大段内容
//heardoc=双引号


$username='允儿~';
$email='yun@gmsail.com';
$id='02';
//N行三列列表-普通写法

$str="<table border='1' width='80%' bgcolor=\"pink\">
<tr>
    <td>编号</td>
    <td>用户名</td>
    <td>邮箱</td>
</tr>
<tr>
    <td>01</td>
    <td>Xlcjs</td>
    <td>Xlcjs17@gmail.com</td>
</tr>
<tr>
    <td>{$id}</td>
    <td>{$username}</td>
    <td>{$email}</rd>
</tr>
</table>";
echo $str;
echo "<hr/>";

//heardoc写法
$str=<<<BG
    this is a text
    <h1 align="center">Hello World<small>Power By Xlcjs.</small></h1>
BG;
//必须以BG开头以其结束，中间不能有任何输出~
echo $str;
echo '<hr/>';
$str=<<<table
<table border='1' width='80%' bgcolor='gold'>
<tr>
    <td>编号</td>
    <td>用户名</td>
    <td>邮箱</td>
</tr>
<tr>
    <td>01</td>
    <td>Xlcjs</td>
    <td>Xlcjs17@gmail.com</td>
</tr>
<tr>
    <td>{$id}</td>
    <td>{$username}</td>
    <td>{$email}</rd>
</tr>
</table>
table;
echo $str;
echo '</br/br/br>';
$str=<<<"Table"
<h3 align='center'>还有种写法，变量名可以加双引号,最后结束不用加双引号</h3>
Table;
echo $str;

 ?>
