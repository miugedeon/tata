<?php
	$action=$_GET["action"];
	$p_id=$_GET["p_id"];
	$language=$_GET["language"];
	include_once("config.php");
	$sql="select * from p_area where p_id=".$p_id;
	$query=mysql_query($sql);
	$row=mysql_fetch_array($query);
	$sql="delete from p_area where p_id=".$p_id;
	$d->AdminBack($_SESSION["admin"],"删除成功",$sql);
	//更新xml文件
	$p_smalltype=$row['p_smalltype'];
	include_once("news.xml.php");
?>