<?php 

$n=3;
for ($i=1; $i <=$n ; $i++) { 
	for ($j=1; $j <=$n-$i ; $j++) { 
		echo "&nbsp";
	}
	for ($k=1; $k <=($i-1)*2+1 ; $k++) { 
		echo "*";
	}
	echo "<br/>";
}

for ($s=$n-1; $s >=1 ; $s--) { 
	for ($m=1; $m <=$n-$s ; $m++) { 
		echo "&nbsp";
	}
	for ($o=1; $o <=($s-1)*2+1 ; $o++) { 
		echo "*";
	}
	echo "<br/>";
}

 ?>