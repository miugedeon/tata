<?php
$nav="case";                //导航标识
$bgName="casepic.jpg";      //顶部图片文件名
$topSpace=280;               //顶部高度
$bigtype=1;                      //p_id的值为选取第一个频道的pid值 
$pTitle="Project";				//频道标题
$c_nav=array();                     //保存频道子栏目的索引值以及频道标题
$path=array();                 //用来保存频道地址信息
$lvldeep=1;					   //设置该频道的栏目深度，若有三级栏目则选择设置为3；    *
$typeID=0;
$smalltype=0;
$c_navCanceled=1;
$c_pathCanceled=1;
$c_num="01";

//-------------------------获取频道基本信息----------------------
switch($lvldeep){
	case 1:
	if(!isset($_GET['typeID'])){
		$sql="select * from p_list where language='cn' and p_typelist='case' order by p_id asc limit 0,1";
		$query=$d->Query($sql);
		$row=mysql_fetch_array($query);
		
		$typeID=$row[p_id];
		
		$path[$pTitle]="$nav.html"; //取到一级栏目频道名称
		$path[$row[p_title_en]]="$nav-".$row[p_id].".html";  
	/*************************************************/
	}else{/*               分割线                         */
	/*************************************************/
		$typeID=get(typeID);
		
		$sql="select * from p_list where language='cn' and p_id=".$typeID." limit 1";
		$query=$d->Query($sql);
		$row=mysql_fetch_array($query);
		
		$path[$pTitle]="$nav.html"; //取到一级栏目频道名称
		$path[$row[p_title_en]]="$nav-".$row[p_id].".html";   
		
	}
	
	$sql="select * from p_list where language='cn' and p_typelist='case' order by p_id asc limit 3";
	$query=$d->Query($sql);
	while($row=mysql_fetch_array($query)){
		array_push($c_nav,array($row[p_id],$row[p_title_en],$row[p_title_en_en]));	
	}
	
	break;
}
?>