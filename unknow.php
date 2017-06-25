<?php 
header("content-type:text/html;charset=utf-8");


/*
理解懂得
 */

/*
1加到100的和
 */
$sum=0;
for ($i=0; $i <=100 ; $i++) { 
	$sum+=$i;
}
echo $sum;

/*
偶数和
 */
$sum=0;
for ($i=0; $i <=100 ; $i++) { 
	if ($i%2==0) {
		$sum+=$i;
	}
}
echo $sum;

$sum=0;
for($i=0;$i<=100;$i+=2){
	$sum+=$i;
}
echo "$sum";

/*
 男女婚嫁年龄
 */


$gender=rand(0,1);

if ($gender==1) {
	$gender="男";
}else{
	$gender="女";
}
echo "$gender<br/>";

if($gender=="女"){
	for ($age=0; $age <=30 ; $age++) { 
	if ($age>=20) {
		echo "可以嫁人了<br/>";
		}else{
		$a=20-$age;
		echo '你才'."$age".'岁，还差'."$a".'岁才能找汉子<br/>';
		}

	}
}else {
		for ($age=0; $age <=30 ; $age++) { 
	    if ($age>=22) {
		echo "可以娶媳妇了<br/>";
		}else{
		$a=20-$age;
		echo '你才'."$age".'岁，还差'."$a".'岁才能找妹子<br/>';
		}
	continue;


}
}

/*
if else分支
 */


$age=200;
if ($age>=35) {
	echo "女流氓<br/>";
}else if ($age>=20&$age<=35) {
	echo "飞鸽的怀抱为你敞开<br/>";
}else if ($age<20) {
	echo "别沮丧，飞鸽等你<br/>";
}

/*
switch
 */

$day=rand(1,4);
switch($day){

case '1':
	echo "周一吃大餐";
	break;
case '2':
	echo "周二去party";
	break;
case '3':
	echo "周三去游泳";
	break;
case '4':
	echo "周四去飙车";
	break;

}

/*
while
 */

$i=1;
while ($i<=5) {
	echo'number is '."$i<br/>";
	$i++;
}
echo "finally";

/*
do while
 */

$i=0;
do{echo $i;}
while (
	$i>0
)

/*
白钱买百鸡
 */

for ($g=1; $g <=100 ; $g++) { 
	for ($m=1; $m <=100 ; $m++) {
		$x=100-$g-$m;
		if(($g+$m+$x==100)&&($g*5+$m*3+$x/3==100)==true){
		echo '母鸡有'."$m".'只&nbsp&nbsp'.'公鸡'."$g".'只&nbsp&nbsp'.'小鸡'."$x".'只<br/>';	
		};
	}


}



















































/*打印偶数并为偶数排序*/
//如何从0开始排序



$num=0;
for ($i=0; $i <=100; $i++) { 
	if ($i%2==0) {
		$num++;
		echo "$i,偶数,$num<br/>";
	}
}















 ?>