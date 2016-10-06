<?php
	include_once("config.php");
	$p_id=$_GET["p_id"];
	$sql="select * from p_case where p_id=".$p_id;
	$query=$d->Query($sql);
	$row=mysql_fetch_array($query);
	if(!empty($row["p_smallpic"]))
	{
		if(file_exists($row["p_smallpic"]))
		{
			unlink($row["p_smallpic"]);
		}
	}
	
	if(!empty($row["p_bigpic"]))
	{
		if(file_exists($row["p_bigpic"]))
		{
			unlink($row["p_bigpic"]);
		}
	}
	$sql="delete from p_case where p_id=".$p_id;
	$d->AdminBack($_SESSION["admin"],"删除成功",$sql);
?>