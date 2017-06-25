
<?php 
header("content-type:text/php ;charset=utf-8");
/*
//求绝对值
$a=-50.9;
$abs=abs($a);
echo "$abs";
//进一法取整
echo "<br/>";
$ceil=ceil($a);
echo $ceil;

echo "<br/>";
//舍去法取整
echo floor($a);


//浮点数取余
$a=5.7;
$b=1.3;
$r=fmod($a, $b);
echo $r;



//x的y次方的返回值
echo pow(-2, 2);




//保留浮点数的前3位
echo round(1.2939,3);

//平方根
echo sqrt(4);


//求最大小值
$a=max(99,2,3);
echo "$a<br/>";
echo min(99,2,3);
echo "<br/>";
$arr=array(77 ,22,1,5,498 );
echo max($arr);
print_r($arr);
//随机数
echo mt_rand(0,99999);
echo "<br/>";
echo rand(0,10);



//圆周率
echo pi();
//修剪
echo $str="\r\n&nbsp;&gt;hello world!\r\n";
echo "<br/>";
echo trim($str);
echo "<br/>";
echo $str="hello world!\n\n";
echo rtrim($str);

//目录
echo dirname("c:/testweb/home.php");

//填充字符串
$str="hello world";
echo str_pad($str, 12,".");


//重复
$a=12;
echo str_repeat(2, 5);
//字符串每一个封装进数组
$str="asdfghjkl;";
print_r (str_split($str));


//反转字符串
$str="hello world!";
echo strrev($str);

//指定长度换行
$str="An example on a long word is:Supeercalifragulistic";
echo wordwrap($str,12);

//字符串打乱
$str="An example on a long word is:Supeercalifragulistic";
echo str_shuffle($str);



//把变量装进数组的$key


$str="An example on a long word is:Supeercalifragulistic";
parse_str($str,$arr);
$arr[]=1;
print_r($arr);




$str="id=55&name=jia&age=111&job=student";
parse_str($str,$arr);
print_r($arr);

$str="id=55&name=jia&age=111&job=studentSupeercalifragulistic";
echo wordwrap($str,6);

//大小写转换
$str="HELLO WORLD!";

$a=strtolower($str);
echo "$a<br/>";
echo strtoupper($a);


//首字母大写
$str="iloveyou";
echo ucfirst($str);

//每个单词首字母大写
$str="i am hello world!";
echo ucwords($str);




$str="john&'adnms'";
echo htmlentities($str ,ENT_COMPAT);


echo nl2br("One line.\nAnother line.");

echo nl2br("a\nb");


//去标签
$path="../HTML/01.html";
$fh=file_get_contents($path);

echo strip_tags($fh);*/





//两个数组一个为$key一个为$value
$arr1 = array(a,b,c,d );
$arr2 = array(cat ,dog,man,bird,you);
print_r(array_combine($arr1, $arr2));































 ?>