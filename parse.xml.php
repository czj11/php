<?php 

header("content-type:text/php;charset=utf-8");
//创建DOM对象
$dom = new DOMdocument('1.0','utf-8');

//print_r($dom);
//载入xml文档
$dom->load('./01.xml');
//得到title节点列表
$rs = $dom->getElementsByTagName('title');
//print_r($rs);

//文本节点，且是<title></title>的子节点
$title0 = $rs->item(0);
//print_r($title0);

//列表对象
$text = $title0->childNodes;
//print_r($text);

//文本节点
$rr = $title0->childNodes->item(0);
//print_r($rr);

//文本内容
echo $rr->wholeText;


//echo dom->getElementsByTagName('title')->item(1)->childNodes->item(0)->wholeText;



$aa = $dom->getElementsByTagName('title')->item(0)->chileNodes->item(0)->wholeText;
echo $aa;


 ?>