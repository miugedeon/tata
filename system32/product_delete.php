<?php

	if(isset($_POST["showid"]))
	{
		include_once("config.php");
		$showid=$_POST["showid"];
		foreach($showid as $v)
		{
			$sql="select * from p_product where p_id=".$v;
			$query=mysql_query($sql);
			$row=mysql_fetch_array($query);
			
			if(!empty($row["p_pic1"]))
			{
				if(file_exists($row["p_pic1"]))
				{
					unlink($row["p_pic1"]);
				}
			}
			
			if(!empty($row["p_pic2"]))
			{
				if(file_exists($row["p_pic2"]))
				{
					unlink($row["p_pic2"]);
				}
			}
			
			if(!empty($row["p_pic3"]))
			{
				if(file_exists($row["p_pic3"]))
				{
					unlink($row["p_pic3"]);
				}
			}
			
			if(!empty($row["p_pic4"]))
			{
				if(file_exists($row["p_pic4"]))
				{
					unlink($row["p_pic4"]);
				}
			}
			
			if(!empty($row["p_pic5"]))
			{
				if(file_exists($row["p_pic5"]))
				{
					unlink($row["p_pic5"]);
				}
			}
	
	
		}
		$showid=implode(",",$showid);
		$sql="delete from p_product where p_id in(".$showid.")";
		$d->AdminBack($_SESSION["admin"],"删除成功",$sql);
		$d->Close();
	}
	else
	{
		$p_key=$_POST["p_key"];
		$language=$_POST["language"];
		//product_manage.php?language=cn&action=p_key&key=1
		echo "<script language='javascript'>window.location.href='product_manage.php?language=".$language."&action=p_key&key=".$p_key."'</script>";
		
	}
?>