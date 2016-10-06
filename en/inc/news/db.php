<?php
$nav="news";                //导航标识
$bgName="newspic.jpg";      //顶部图片文件名
$topSpace=256;               //顶部高度
$bigtype=1;                      //p_id的值为选取第一个频道的pid值 
$pTitle="News";				//频道标题
$c_nav=array();                     //保存频道子栏目的索引值以及频道标题
$path=array();                 //用来保存频道地址信息
$lvldeep=1;					   //设置该频道的栏目深度，若有三级栏目则选择设置为3；    *
$typeID=0;
$smalltype=0;
$c_navCanceled=1;
$c_pathCanceled=1;
$thirdNavCanneled=1;
$c_num="03";

//-------------------------获取频道基本信息----------------------
switch($lvldeep){
	case 1:
	if(!isset($_GET['typeID'])){
		$sql="select * from p_list where language='cn' and p_typelist='news' order by p_id asc limit 0,1";
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
		
		if(isset($_GET['twoID'])){
			$smalltype=get(twoID);
			$sql2="select * from p_product_type where language='cn' and p_id=".$smalltype." limit 1";
			$query2=$d->Query($sql2);
			$row2=mysql_fetch_array($query2);  	
			$path[$row2[p_title_en]]=$nav."-".$row[p_id]."-".$row2[p_id].".html";  //取到二级栏目频道名称
		}
		
		if(isset($_GET[productID])){
			$c_navCanceled=1;
			$productID=get(productID);
			$sql3="select * from p_product where language='cn' and p_id=".$productID." limit 1";
			$query3=$d->Query($sql3);
			$row3=mysql_fetch_array($query3);  
			$path[$row3[p_productname]]="$nav.html";  //取到三级栏目频道名称
			$pTitle=$row3[p_productname];
		}
		
	}
	
	$sql="select * from p_list where p_typelist='news' and  language='cn'";
	$query=$d->Query($sql);
	while($row=mysql_fetch_array($query)){
		array_push($c_nav,array($row[p_id],$row[p_title_en],$row[p_title_en_en]));	
	}
	
	break;
}
?>