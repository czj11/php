<?php 

header("content-type:text/php;charset=utf-8");

//接口是抽象的方法，不需要abstract，也不需要方法的具体

interface animal{
	public function eat();
}
interface monkey{//两个方法
	public function run();
	public function cry();

}
interface wisdom{
	public function think();
}

interface bird {
	public function fly();
}


class birdman implements animal,monkey/*必须用两个方法*/,bird,wisdom{
	public function eat(){
		echo "吃";
	}

	public function run(){
		echo "跑";
	}
	public function think(){
		echo "思考";
	}
	public function fly(){
		echo "飞";
	}
	public function cry(){
		echo "哭";
	}

}








$man = new birdman();

$man->fly();





 ?>