<?php include_once("../common/conn.php")?>
<?php include_once("../common/str.php")?>
<?php 
$id=$_GET["cp"];
$bid=$_GET["bt"];
    $sql="select * from p_product where p_id=".$id;
	$query=$d->Query($sql);
	$rowall=mysql_fetch_array($query);
	
	
	$sql="select * from p_product where p_bigtype=".$bid." order by p_sort desc,p_id desc";
	//echo $sql;
	$num=$d->Execute($sql);
	$query=$d->Query($sql);
	$p_id=0+$_GET["cp"];
	$i=0;
	$index=0;
	$PrevID=$p_id;
	$NextID=$p_id;
	while($row=mysql_fetch_array($query))
	{
		$arr[]=$row[p_id];
		
		if($p_id == $row[p_id])
		{
			$index = $i;
		}
		
		$i++;
	}

	if($index > 0)
	{
		$PrevID = $arr[$index-1];
	}
		
	if($index < ($num-1))
	{
		$NextID = $arr[$index+1];
	}
?>
<?php include_once("head.php")?>
<body id="index">

<?php include_once("top.php")?>
<div>

<div style="text-align:center;">
<br>

    产品名： <?php echo $rowall["p_productname"]; echo "<br>";  ?>
	<a href="cpread.php?cp=<?php echo $PrevID;?>&bt=<?php echo $bid;?>" class="proa">上一个</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="cpread.php?cp=<?php echo $NextID;?>&bt=<?php echo $bid;?>" class="proa">下一个</a><br>
<div class="">(提示：双击或双指拖放图片放大)</div>
    <img class="" src="../system32/<?php echo $rowall[p_pic2];?>" alt="" width="350" height="350" style="margin-top:5px;">
  </div>
<a style="float:right; margin:15px 30px 0 0; font-size:16px;" href="liebiao.php">返回</a>

</div>


<?php include_once("foot.php")?>