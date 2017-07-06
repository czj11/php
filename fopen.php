<?php 
header("content-type:text/php;charset = utf-8");
/*
echo fopen("save.html","r");//通道
echo "<hr />";
$source = fopen("save.html","r");
echo fread($source,100);
*/



$source = fopen('01.txt','r+');//头部无法追加
echo fread($source,'50');
echo fwrite($source, "hahhahahahhah")?"yes":"false" ;






 ?>