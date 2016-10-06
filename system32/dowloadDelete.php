<?php include("../common/conn.php")?>
<?php
	$showid=$_GET["showid"];
	$sql="select * from lxy_download where id=".$showid;
	mysql_query("set names gbk");
	$query=mysql_query($sql);
	$row=mysql_fetch_array($query);
	$path="../upload/Download/".$row["FileFile"];
	unlink($path);
	$sql="delete from lxy_download where id=".$showid;
	mysql_query($sql);
	echo "<script language='javascript'>alert('删除成功');location.href='dowload.php?language=".$row["language"]."'</script>";
?>