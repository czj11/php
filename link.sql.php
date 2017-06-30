<?php 


header("content-type:text/php;charset=utf-8");
$conn = mysql_connect('localhost','root','111111');
$db = mysql_query('use test'/*,$conn*/);
$char = mysql_query('set name utf-8'/*,$conn*/);
$select = mysql_query('select * from category '/*,$conn*/);
print_r($select);

$list = array();

while(
$row = mysql_fetch_assoc($select)){
	$list[] = $row;
};
echo "<hr />";
print_r($list);








 ?>