<?php 
header("content-type:text/php;charset = utf-8");
/*
foreach (array('a.txt','b.txt','c.txt','d.txt',)as $v) {
	$file = "./article/$v";
	echo "$file<br/>";
}
*/


foreach (array('a.txt','b.txt','c.txt','d.txt',)as $v) {
	$file = './article/'.$v;
	//echo "$file<br/>";
	if (filesize($file) < 10) {
		unlink($file);
		echo $file,"小于10字节被删了<br />";
		continue;

	}
	$cont = file_get_contents($file);
	if (stripos($cont, 'fuck')!== false) {
		unlink($file);
		echo "$file,有不文明用语被删了<br/>";
	}
}






 ?>