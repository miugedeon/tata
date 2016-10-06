<?php
	include_once("config.php");
	$p_id=$_GET["p_id"];
	$sql="select * from p_news where p_id=".$p_id;
	$query=$d->Query($sql);
	$row=mysql_fetch_array($query);
	if(!empty($row["p_pic"]))
	{
		if(file_exists($row["p_pic"]))
		{
			unlink($row["p_pic"]);
		}
	}
	$sql="delete from p_news where p_id=".$p_id;
	$d->AdminBack($_SESSION["admin"],"删除成功",$sql);
?>