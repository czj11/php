<?php 
header("content-type:text/html;charset = utf-8");
/*
$cont = file_get_contents("./01.txt");
echo "$cont";
*/
$cont = file_get_contents("http://www.jb51.net/article/92609.htm");

if(file_put_contents("./save.html", $cont)){
	echo "ok";
};






 ?>