<?php 

echo '<hr />';
echo '<hr />';
//父类
class father{
 public function a(){
  echo "function a"; 
 }
 private function b(){
  echo "function b"; 
 }
 protected function c(){
  echo "function c"; 
 }
}
//子类
class child extends father{
 	 function d(){ 
    	parent::a();//调用父类的a方法
  }
  	function e(){ 
    	parent::c(); //调用父类的c方法
  } 
 	function f(){ 
    	parent::b(); //调用父类的b方法
  } 
}
$father=new father();
$father->a();
$father->b(); //显示错误 外部无法调用私有的方法 Call to protected method father::b() 
$father->c(); //显示错误 外部无法调用受保护的方法Call to private method father::c() 
$chlid=new child();
$chlid->d();
$chlid->e();
$chlid->f();//显示错误 无法调用父类private的方法 Call to private method father::b() 
?>









