<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>网站BANNER浏览</title>
</head>
<style type="text/css">
	*{ margin:0px; padding:0px; font-size:12px;}
</style>

<body>
<br><br><br>
<?php
	include_once("config.php");
	$p_id=$_GET["p_id"];
	$sql="select * from p_banner where p_id=".$p_id;
	$query=$d->Query($sql);
	while($row=mysql_fetch_array($query))
	{
?>

<table width="100%" cellpadding="0" cellspacing="0" border="0">
	<tr>
    	<td align="center"><img src="<?php echo $row["p_pic"]?>"></td>
    </tr>
</table>
<?php
	}
	$d->Close();
?>
</body>
</html>
