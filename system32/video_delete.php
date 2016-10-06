<?php

	if(isset($_POST["showid"]))
	{
		include_once("config.php");
		$showid=$_POST["showid"];
		foreach($showid as $v)
		{
			$sql="select * from p_video where p_id=".$v;
			$query=mysql_query($sql);
			$row=mysql_fetch_array($query);
			
			if(!empty($row["p_pic"]))
			{
				if(file_exists($row["p_pic"]))
				{
					unlink($row["p_pic"]);
				}
			}
			
			//HTTP
			if(!empty($row["p_filepath"]))
			{
				if(file_exists($row["p_filepath"]))
				{
					unlink($row["p_filepath"]);
				}
			}
			
			//FTP
			/*
			if(!empty($row["p_filepath"]))
			{
				include_once("../common/ftp.php");
				$ftp=new Ftp();
				$ftp->connect($config);
				$delfilename="/yinyong/sirui/".substr($row['p_filepath'],3);
				$ftp->delete_file($delfilename);
				$ftp->close();
			}
			*/
	
		}
		$showid=implode(",",$showid);
		$sql="delete from p_video where p_id in(".$showid.")";
		$d->AdminBack($_SESSION["admin"],"删除成功",$sql);
		$d->Close();
	}
	else
	{
		$p_key=$_POST["p_key"];
		$language=$_POST["language"];
		//product_manage.php?language=cn&action=p_key&key=1
		echo "<script language='javascript'>window.location.href='video_manage.php?language=".$language."&action=p_key&key=".$p_key."'</script>";
		
	}
?>