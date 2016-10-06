<?php
if(isset($_POST["showid"]))
{
	include_once("config.php");
	$showid=$_POST["showid"];
	$showid=implode(",",$showid);
	$sql="delete from p_special where p_id in(".$showid.")";
	$d->AdminBack($_SESSION["admin"],"删除成功",$sql);
	$d->Close();
}
?>