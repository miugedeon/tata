<?php
	session_start();
	include_once("../common/conn.php");
	$other=$_GET["other"];
	$p_id=$_GET["p_id"];
	$language=$_GET["language"];
	if($other==1)
	{
		$sql="select * from p_area2_type where p_bigtype=".$p_id;
		$query=$d->Query($sql);
		$row=mysql_fetch_array($query);
				
		$sql="delete from p_area2_type where p_bigtype=".$p_id;
		$d->Query($sql);
		
		$sql="delete from p_area2_type where p_id=".$p_id;
		$d->Query($sql);
		echo "<script language='javascript'>alert('删除成功');location.href='area2_type.php?language=".$language."'</script>";
		
		
		
	}
	else
	{
		$sql="select * from p_area2_type where p_id=".$p_id;
		$query=$d->Query($sql);
		$row=mysql_fetch_array($query);
		
		$sql="delete from p_area2_type where p_id=".$p_id;
		$d->Query($sql);
		echo "<script language='javascript'>alert('删除成功');location.href='area2_type.php?language=".$language."'</script>";
	}
?>