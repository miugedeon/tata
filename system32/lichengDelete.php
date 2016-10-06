<?php
	include_once("config.php");
	$p_id=$_GET["p_id"];
	$sql="delete from p_licheng where p_id=".$p_id;
	$d->AdminBack($_SESSION["admin"],"É¾³ý³É¹¦",$sql);
?>