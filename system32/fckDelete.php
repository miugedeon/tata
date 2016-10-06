<?php
	$p_id=$_GET["p_id"];
	$sql="delete from p_fck where p_id=".$p_id;
	include_once("config.php");
	$d->Query($sql);
	alertUrl("删除成功","fckManage.php");
?>