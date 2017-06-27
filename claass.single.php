<?php 

class single{
		public $hash;//随机码；
		static protected $ins = null;//静态属性，用来放对象实例的；
		final protected function __construct(){//私有构造方法无法通过外部new来生产实例,final使继承的方法不能修改（final不能修饰属性）
					$this->hash = mt_rand(1,999);
		}
		static public function getinstance(){
			//return  new self();//通过静态方法可以直接在类中调用方法
			if (self::$ins instanceof self) {
				return self::$ins;
			}
			self::$ins = new self();
			return self::$ins;
		}
}


$s1 = single::getinstance();
$s2 = single::getinstance();

print_r($s1);
print_r($s2);











 ?>