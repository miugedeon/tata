<?php
	$action=$_GET["action"];
	$p_id=$_GET["p_id"];
	$language=$_GET["language"];
	include_once("config.php");
	$sql="select * from p_contry where p_id=".$p_id;
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
	
	$url="";
	switch($action)
	{
		case 1:
			$url="contry_manage.php?language=".$language."";
		break;
		default:
		break;
	}
	$sql="delete from p_contry where p_id=".$p_id;
	$d->AdminBack($_SESSION["admin"],"ɾ���ɹ�",$sql);	
?>