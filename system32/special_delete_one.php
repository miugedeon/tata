<?php
	$p_id=$_GET["p_id"];
	include_once("config.php");
	$sql="delete from p_special where p_id=".$p_id;
	$d->AdminBack($_SESSION["admin"],"删除成功",$sql);	
?>