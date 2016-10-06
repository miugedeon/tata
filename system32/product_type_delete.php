<?php
	session_start();
	include_once("../common/conn.php");
	$other=$_GET["other"];
	$p_id=$_GET["p_id"];
	$language=$_GET["language"];
	if($other==1)
	{
		$sql="select * from p_product_type where p_bigtype=".$p_id;
		$query=$d->Query($sql);
		$row=mysql_fetch_array($query);
		if(!empty($row["p_file"]))
		{
			if(file_exists($row["p_file"]))
			{
				unlink($row["p_file"]);
			}
		}
		
		$sql="delete from p_product_type where p_bigtype=".$p_id;
		$d->Query($sql);
		
		$sql="delete from p_product_type where p_id=".$p_id;
		$d->Query($sql);
		echo "<script language='javascript'>alert('删除成功');location.href='product_type.php?language=".$language."'</script>";
		
		
		
	}
	else
	{
		$sql="select * from p_product_type where p_id=".$p_id;
		$query=$d->Query($sql);
		$row=mysql_fetch_array($query);
		if(!empty($row["p_file"]))
		{
			if(file_exists($row["p_file"]))
			{
				unlink($row["p_file"]);
			}
		}
		$sql="delete from p_product_type where p_id=".$p_id;
		$d->Query($sql);
		echo "<script language='javascript'>alert('删除成功');location.href='product_type.php?language=".$language."'</script>";
	}
?>