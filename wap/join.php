<?php include_once("../common/conn.php")?>
<?php include_once("../common/str.php")?>
<?php
if($_GET["t"])
	{$p_bigtype=$_GET["t"];
     $sql="select * from p_type where p_id=".$p_bigtype;
	}
else{
	$sql="select * from p_type where p_id=13";
	}
	$query=$d->Query($sql);
	$rowall=mysql_fetch_array($query);
?>
<?php include_once("head.php")?>
 
<body id="index">

<?php include_once("top.php")?>

<div class="yltext">
<span class="comtit" style="margin-right:20px;"><a href="join.php" target="_self">联系方式</a></span>
<span class="comtit" style="margin-right:20px;"><a href="join.php?t=10" target="_self">加盟优势</a></span>
<span class="comtit" style="margin-right:20px;"><a href="join.php?t=11" target="_self">加盟流程</a></span>

<div class="aaa">
<?php echo $rowall["a_content"]?>
</div>


<?php include_once("foot.php")?>
