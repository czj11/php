<?php 

header("content-type:text/php;charset=utf-8");

/*$arr=array();
$arr=array_fill(2,3,"dog");
print_r ($arr);




//把数组分成二维数组，第一个字数组的属性为4个
$str="id=3&name=haha&age=88&father=heihei";
parse_str($str,$arr);
print_r(array_chunk($arr, 4));

//两个数组的合并
$str1="id=1&color=red&width=88px";
$str2="id=2&name=you&age=87";
parse_str($str1,$arr1);
parse_str($str2,$arr2);
print_r($arr1);
echo "<br/>";
print_r($arr2);
echo "<br/>";
print_r(array_merge($arr1,$arr2));


$str1="id=2&color=green&width=38";
$str2="0=2&1=green&2=38";
parse_str($str2,$arr2);
print_r($arr2);
echo "<br/>";
echo $arr2[2];

//从数组中取一段值
$arr = array('a','b','c','d' );
print_r(array_slice($arr, 1,2));


//输出前者数组的特色
$arr = array('a','b','c','d' );
$arr1=array('c','d','e','f');
print_r(array_diff($arr, $arr1));
echo "<br/>";
print_r(array_intersect($arr, $arr1));


//查找是否有该值，true or false
//查找是否有该值,return $key
$arr=array('a','b','c','d','e');
var_dump( in_array('z', $arr));
echo "<br/>";
echo array_search('d', $arr);


//数组中值的替换
$a1=array('dog','cat','horse','brid');
$a2=array('forg','fish');
array_splice($a1,4,2,$a2);
print_r($a1);






//数组之和
$arr = array('15','5','15','10');
print_r($arr);
echo array_sum($arr);


//数组指针
//数组转换成变量
$a1=array('dog','cat','horse','brid');
echo current($a1);
echo next($a1);
echo end($a1);
echo key($a1);
echo reset($a1);
list($a,$b,$c,$d)=$a1;
echo "$a<br/>$b<br/>$c<br/>$d";


//删除开头
$arr=array('dog','cat','horse');
array_shift($arr);
print_r($arr);
echo "<br/>";
//添加开头
array_unshift($arr, 'plane');
print_r($arr);
echo "<br/>";
//添加最后
array_push($arr, 'bee');
print_r($arr);
echo "<br/>";
//删除最后
array_pop($arr);
print_r($arr);


//数组打乱
//$arr=array(1,5,36,8,147);
$arr=array('name'=>'haha','age'=>' 55','color'=>'red');
shuffle($arr);
print_r($arr);



//数组中的values个数
$arr=array(1,2,5,2,1,5,2,5);
echo count($arr);




//键值反转
$arr=array('cat','dog','bird','horse');
print_r(array_flip($arr));




//键组成新的数组
$arr = array('name' =>hahh , 'height' =>180, 'width' =>60, 'color' =>red, 'id' =>1);
print_r(array_keys($arr));


//计算所有元素重复的次数
$arr=array(1,4,5,8,5,7,5,6);
print_r(array_count_values($arr)) ;



//随机取出2个数组的$key值
$arr = array('a' => dog,'b' =>bird,'c' =>cat );
print_r(array_rand($arr,2));






//删除重复的值
$arr=array(1,2,3,1,4,5,5,6);
print_r($arr);
print_r(array_unique($arr));



//按升序排列
$arr=array(95,51,1,56,5,81);
sort($arr);
print_r($arr);



if(file_exists("../HTML/01.html")){
	echo "exists";
}else{
	echo "noexists";
}



echo file_exists("../HTML/01.html")?'yes':'no';



$filename='../HTML/01.html';
echo $filename.':'.filesize($filename).'bytes';

//是否可以读
$filename="05.php";
if(is_readable($filename)){
	echo "yes";
}else{
	echo "noread";
};



//创建时间
$file='unknow.php';
$time=filectime($file);
echo date('Y.m.d',$time);


 

//往文件里面写内容
$filename = 'test.txt'; 
$somecontent = "添加这些文字到文件\n"; 
$handle = fopen($filename, 'a'); 
if(fwrite($handle, $somecontent)){
	echo "ok";
}; 
fclose($handle);




//读取文件

$file= "test.txt"; 
$handle = fopen($file, "r"); 
$contents = fread($handle, filesize($file)); 
echo "$contents";
fclose($handle);*/




















 ?>