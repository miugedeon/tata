<?php
	$action=$_GET["action"];
	$p_id=$_GET["p_id"];
	$language=$_GET["language"];
	include_once("config.php");
	$sql="select * from p_product where p_id=".$p_id;
	$query=mysql_query($sql);
	$row=mysql_fetch_array($query);
	
	if(!empty($row["p_pic1"]))
	{
		if(file_exists($row["p_pic1"]))
		{
			unlink($row["p_pic1"]);
		}
	}
	
	if(!empty($row["p_pic2"]))
	{
		if(file_exists($row["p_pic2"]))
		{
			unlink($row["p_pic2"]);
		}
	}
	
	if(!empty($row["p_pic3"]))
	{
		if(file_exists($row["p_pic3"]))
		{
			unlink($row["p_pic3"]);
		}
	}
	
	if(!empty($row["p_pic4"]))
	{
		if(file_exists($row["p_pic4"]))
		{
			unlink($row["p_pic4"]);
		}
	}
	
	if(!empty($row["p_pic5"]))
	{
		if(file_exists($row["p_pic5"]))
		{
			unlink($row["p_pic5"]);
		}
	}
	$url="";
	switch($action)
	{
		case 1:
			$url="product_manage.php?language=".$language."";
		break;
		default:
		break;
	}
	$sql="delete from p_product where p_id=".$p_id;
	$d->AdminBack($_SESSION["admin"],"删除成功",$sql);
	
?>