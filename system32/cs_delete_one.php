<?php
	include_once("config.php");
	$p_id=$_GET["p_id"];
	$sql="delete from p_cs where p_id=".$p_id;
	$d->AdminBack($_SESSION["admin"],"删除成功",$sql);
?>