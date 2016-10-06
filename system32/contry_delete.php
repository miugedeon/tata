<?php

	if(isset($_POST["showid"]))
	{
		include_once("config.php");
		$showid=$_POST["showid"];
		foreach($showid as $v)
		{
			$sql="select * from p_contry where p_id=".$v;
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
	
		}
		$showid=implode(",",$showid);
		$sql="delete from p_contry where p_id in(".$showid.")";
		$d->AdminBack($_SESSION["admin"],"É¾³ý³É¹¦",$sql);
		$d->Close();
	}
	else
	{
		$p_key=$_POST["p_key"];
		$language=$_POST["language"];
		//product_manage.php?language=cn&action=p_key&key=1
		echo "<script language='javascript'>window.location.href='contry_manage.php?language=".$language."&action=p_key&key=".$p_key."'</script>";
		
	}
?>