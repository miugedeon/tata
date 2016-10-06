<?php
	$action=$_GET["action"];
	$p_id=$_GET["p_id"];
	$language=$_GET["language"];
	include_once("config.php");
	$sql="select * from p_area where p_id=".$p_id;
	$query=mysql_query($sql);
	$row=mysql_fetch_array($query);
	
	$url="";
	switch($action)
	{
		case 1:
			$url="area_manage.php?language=".$language."";
		break;
		default:
		break;
	}
	$sql="delete from p_area where p_id=".$p_id;
	$d->AdminBack($_SESSION["admin"],"É¾³ý³É¹¦",$sql);
	
?>