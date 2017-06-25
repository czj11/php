<?php 



header("content-type:text/html;charset=utf-8");
/*
打印菱形


$n=6;//层数
for($i=1;$i<=$n;$i++)//打印正三角
{
for($j=1;$j<=$n-$i;$j++){
echo "&nbsp";   //打印空格
  }
for($k=1;$k<=($i-1)*2+1;$k++){
echo "*";   //打印星星个数
}  //三角星星个数=层数减1乘以2加1
echo "<br/>"; //即(n-1)*2+1,也写作2*n-1
}
for($s=$n-1;$s>=1;$s--)//打印倒三角
{
for($t=1;$t<=$n-$s;$t++){
echo "&nbsp";//打印空格
}
for($u=1;$u<=($s-1)*2+1;$u++){
echo "*";//打印星星
}
echo "<br/>";
}

echo "<br/>";
*/

/*
冒泡排序


$arr= array(1,234,3,23,3,42,2 );
sort($arr);

print_r($arr);
 */
/*$len=count($arr);
for ($i=0; $i <$len-1 ; $i++) { 
	for ($j=$i+1; $j < $len ; $j++) { 
		if ($arr[$i] > $arr[$j]) {
			$p=$arr[$i];
			$arr[$i] = $arr[$j];
			$arr[$j] = $p;
		}
	}
}


echo "<br/>";

$i=0;
for ($a=0; $a <=100; $a+=3) { 
	$i++;
	if ($i<=5) {
		echo "$a&nbsp";
	}else{
		$i=0;
		echo "<br/>";	
	
	}
	
	
	
}

echo "<br/>";
$num=0;
for ($i=0; $i <=100; $i++) { 
	if ($i%2==0) {
		$num++;
		echo "$i,偶数,$num<br/>";
	}else if ($i%3==0) {
		$num++;
		echo "$i,------,$num<br/>";
	}else{
		echo "$i<br/>";
	}
}



for ($age=0; $age <=30 ; $age++) { 
	if ($age>=20) {
		echo "可以嫁人了<br/>";
		}else{
		$a=20-$age;
		echo '你才'."$age".'岁，还差'."$a".'岁才能找汉子<br/>';
		}
	continue;
}
*/


$num=-1;
for ($i=0; $i <=100; $i++) { 
	if ($i%2==0) {
		$num++;
		echo "$i,偶数,$num<br/>";
	}
}






?>









