<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<?php include_once("config.php")?>
<link href="images/skin.css" rel="stylesheet" type="text/css" />
<?php
$language=$_GET['language'];
$series_id=$_GET['p_id'];
if($_GET['submit']=='submit'){
	$para=$_POST['para'];
	$series_id=$_POST['series'];
	$size = count($para);
	
	if($size>0){
		for($i=0; $i< $size; $i++){
			$sql="insert into p_product_para_list (p_series,p_para_name) values ($series_id,'".$para[$i]."')";
			$query=$d->Query($sql);
		}
	}
	alertBack2("添加成功");
}
?>
<form action="?submit=submit" method="post">
<input type="hidden" name="series" value="<?php echo $series_id; ?>">
<table class="alltable" style="width:400px;">
<tr><td colspan="2" height="30"><strong style="font-style:italic;color:#000;">可选参数列表</strong></td></tr>
<tr><td align="center" height="30">选择</td><td>参数名称</td>
<?php
$language=$_GET['language'];
$sql="select * from `p_product_para` where language='".$language."'";
$query=$d->Query($sql);
while($rs=@mysql_fetch_array($query)){
?>
<tr><td width="50" align="center" height="30"><input type="checkbox" name="para[]" id="para" value="<?php echo $rs['p_para_name']; ?>"></td><td><?php echo $rs['p_para_name']; ?></td></tr>
<?php
}
?>
<tr><td colspan="2" align="center"><input type="submit" name="" id="" class="but_60" value="确定"/></td></tr>
</table>
</form>