<?php 
header("content-type:text/xml;charset = utf-8");
$arr = array(
'name'=>'lisi',
'age'=>73,
'job'=>array(
		'title'=>'经理'，
		'salary'=>532145,
		'team'=>array('红','请','胡')

	)



	);




function arr2xml($arr,$node = null){
	if($node == null){
		$simxml = new simplexmlElement('<?xml version = "1.0" encoding = "utf-8"?><root></root>');
	}else{

		$simxml = $node;
	}
foreach ($arr as $k => $v) {
	if(is_array($v)){
		//$simxml->addchild($k);
		arr2xml($v,$simxml->addchild($k));
	}else if (is_numeric($k)) {
		$simxml->addchild('item',$v);
	}else{
		$simxml->addchild($k,$v);

	}

}

return $simxml->savexml();




}
header('content-type:text/xml;charset = utf-8');
echo arr2xml($arr);











 ?>