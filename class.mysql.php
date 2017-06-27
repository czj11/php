<?php 
/*

===mysql类的封装===
目标：
连接数据库
发送查询
对于select型返回数据
关闭mysql连接

 */

class Mysql{
private $host;
private $user;
private $pwd;
private $dbname;
private $charset;
//保存连接的数据
private $conn = null;

public function__construct(){
			//在构造方法里读取配置文件
			//根据配置文件来设置私有属性
			//此处没有配置文件，直接赋值	
			$this->host = 'localhost:8080';
			$this->user = 'root';
			$this->pwd = null;
			$this->dbname = 'test';
			$this->charset = 'urf8';

			//连接
			$this->connect($this->host,$this->user,$this->pwd);
			//切换库
			$this->switchdb($this->dbname);
			//设置字符集
			$this->setchar($this->charset);


}


//负责连接
public function connect($h,$u,$p){
			$conn = mysql_connect($h,$u,$p);
			$this->conn = $conn;
}
//负责切换数据库
public function switchdb($db){
			$sql = 'use'.$db;
			$this->query($sql);
}
//负责设置字符集
public function setchar($char){
			$sql = 'ser name'.$char;
			$this->query($sql);
}
//负责发送sql
public function query($sql){
			return mysql_query($sql,$this->conn);

}
//负责获取多行多列的select结果
public function getall($sql){
			$list = array();
			$rs = $this->query($sql);
			if (!$rs) {
				return false;

			}while ($row = mysql_fetch_assoc($rs)) {
				$list = $row;
			}
			return $list;
}
//获取一行select结果
public function getrow($sql){
			$rs = $this->query($sql);
			if (!$rs) {
				return false;
			}
			return mysql_fetch_assoc($rs);

}

public function getone($sql){
			$rs = $this->query($sql);
			if (!$rs) {
				return false;

			}

			$row = mysql_fetch_row($rs);
			return $row[0];
}

public function close(){
			mysql_close($this->conn);
}


}


$mysql = new Mysql();
print_r($mysql);

//查询多行
$sql = 'select * from stu ';
print_r($mysql->getall($sql));



//查询一行
$sql = 'select * from stu where id = 1';
print_r($mysql->getrow($sql));

//查询单个
$sql = 'select count(*) from stu';
print_r($mysql->getone($sql));


//插入数据库
$sql = "insert into stu values (20,'object','753')";
if($mysql->query($sql)）{
	echo "成功";
}else{
	echo "失败";
}

//关闭连接
$mysql->close();



}












 ?>