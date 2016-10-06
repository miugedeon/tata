<?php
$nav="tech";                //导航标识
$bgName="techpic.jpg";      //顶部图片文件名
$topSpace=256;               //顶部高度
$bigtype=16;                      //p_id的值为选取第一个频道的pid值 
$pTitle="技术与服务";				//频道标题
$c_nav=array();                     //保存频道子栏目的索引值以及频道标题
$path=array();                 //用来保存频道地址信息
$lvldeep=1;					   //设置该频道的栏目深度，若有三级栏目则选择设置为3；    *
$typeID=0;
$smalltype=0;
$c_navCanceled=1;
$c_pathCanceled=1;
$c_num="05";
$strlen=30;

$c_nav[0]=array(1,'产品规格书');
$c_nav[1]=array(2,'照明知识分享');

//-------------------------获取频道基本信息----------------------
switch($lvldeep){
	case 1:
	if(!isset($_GET['typeID'])){
		$typeID=1;
		
		$path[$pTitle]="$nav.html"; //取到一级栏目频道名称
		$path[产品规格书]="$nav-".$row[p_id].".html";  
	/*************************************************/
	}else{/*               分割线                         */
	/*************************************************/
		$typeID=get(typeID);
		
		$path[$pTitle]="$nav.html"; //取到一级栏目频道名称
		$path[$c_nav[$typeID-1][1]]="$nav-".$row[p_id].".html";   

	}
	
	/*$sql="select * from p_type where language='cn' and p_deep=1 and p_bigtype=".$bigtype;
	$query=$d->Query($sql);
	while($row=mysql_fetch_array($query)){
		array_push($c_nav,array($row[p_id],$row[p_title],$row[p_title_en]));	
	}*/

	break;
}
?>