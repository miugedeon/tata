<?php
	error_reporting(0);
	include_once("../common/checkUser.php");
	$p_id=$_GET["p_id"];
	include_once("../common/conn.php");
	$array=$d->row("select * from p_link where p_id=".$p_id);
	$row=mysql_fetch_array($array);
	if(file_exists($row["p_linkImg"]))
	{
		unlink($row["p_linkImg"]);
	}
	$sql="delete from p_link where p_id=".$p_id;
	$d->row($sql);
	include_once("../common/str.php");
	alertUrl("É¾³ý³É¹¦","linkMange.php");
	$d->close();
?>