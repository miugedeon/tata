<?php

	if(isset($_GET["p_id"]))
	{
		include_once("config.php");
		$showid=$_GET["p_id"];
		//echo $showid;
		//die;
		
		$sql="delete from p_members where id=".$showid;
		$d->AdminBack($_SESSION["admin"],"删除成功",$sql);
		$d->Close();
	}
	else
	{

		
	}
?>