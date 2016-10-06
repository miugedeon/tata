<?php

	if(isset($_POST["showid"]))
	{
		include_once("config.php");
		$showid=$_POST["showid"];
		foreach($showid as $v)
		{
			$sql="select * from p_news where p_id=".$v;
			$query=mysql_query($sql);
			$row=mysql_fetch_array($query);
			
			if(!empty($row["p_pic"]))
			{
				if(file_exists($row["p_pic"]))
				{
					unlink($row["p_pic"]);
				}
			}
	
		}
		$showid=implode(",",$showid);
		$sql="delete from p_news where p_id in(".$showid.")";
		$d->AdminBack($_SESSION["admin"],"删除成功",$sql);
		$d->Close();
	}
	else
	{

		
	}
?>