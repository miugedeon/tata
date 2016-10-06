<?php
	$action=$_GET["action"];
	$p_id=$_GET["p_id"];
	$language=$_GET["language"];
	include_once("config.php");
	$sql="select * from p_video where p_id=".$p_id;
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
	
	$url="";
	switch($action)
	{
		case 1:
			$url="video_manage.php?language=".$language."";
		break;
		default:
		break;
	}
	$sql="delete from p_video where p_id=".$p_id;
	$d->AdminBack($_SESSION["admin"],"删除成功",$sql);
	
?>