<?php 

$cnt = file_get_contents('./vote.txt');
$cnt += 1;
file_put_contents('./vote.txt', $cnt);
echo $cnt;




 ?>