<?php

	if(isset($_GET["p_id"]))
	{
		include_once("config.php");
		$showid=$_GET["p_id"];
		
		$sql="delete from p_join where id=".$showid;
		//echo $sql;
		$d->AdminBack($_SESSION["admin"],"删除成功",$sql);
		$d->Close();
	}
	else
	{

		
	}
?>