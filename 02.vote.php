<?php 


sleep(3);
if(rand(1,10) < 4){
	echo 0;
}else{
	$cnt = file_get_contents('vote.txt');
	$cnt += 1;
	file_put_contents('vote.txt',$cnt);
	echo "1";
}





 ?>