<?php
	$action=$_GET["action"];
	$p_id=$_GET["p_id"];
	$language=$_GET["language"];
	include_once("config.php");
	$sql="select * from p_shop where p_id=".$p_id;
	$query=mysql_query($sql);
	$row=mysql_fetch_array($query);
	
	if(!empty($row["p_piclink"]))
	{
		if(file_exists($row["p_piclink"]))
		{
			unlink($row["p_piclink"]);
		}
	}
	
	$url="";
	switch($action)
	{
		case 1:
			$url="shop_manage.php?language=".$language."";
		break;
		default:
		break;
	}
	$sql="delete from p_shop where p_id=".$p_id;
	$d->AdminBack($_SESSION["admin"],"删除成功",$sql);	
?>