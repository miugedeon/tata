<?php

	if(isset($_POST["showid"]))
	{
		include_once("config.php");
		$showid=$_POST["showid"];
		foreach($showid as $v)
		{
			$sql="select * from p_shop where p_id=".$v;
			$query=mysql_query($sql);
			$row=mysql_fetch_array($query);
			
			if(!empty($row["p_piclink"]))
			{
				if(file_exists($row["p_piclink"]))
				{
					unlink($row["p_piclink"]);
				}
			}
		}
		$showid=implode(",",$showid);
		$sql="delete from p_shop where p_id in(".$showid.")";
		$d->AdminBack($_SESSION["admin"],"删除成功",$sql);
		$d->Close();
	}
	else
	{
		$p_key=$_POST["p_key"];
		$language=$_POST["language"];
		//product_manage.php?language=cn&action=p_key&key=1
		echo "<script language='javascript'>window.location.href='shop_manage.php?language=".$language."&action=p_key&key=".$p_key."'</script>";
		
	}
?>