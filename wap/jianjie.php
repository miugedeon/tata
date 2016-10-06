<?php include_once("../common/conn.php")?>
<?php include_once("../common/str.php")?>
<?php
if($_GET["t"])
	{$p_bigtype=$_GET["t"];
     $sql="select * from p_type where p_id=".$p_bigtype;
	}
else{
	$sql="select * from p_type where p_id=2";
	}
	$query=$d->Query($sql);
	$rowall=mysql_fetch_array($query);
?>
<?php include_once("head.php")?>
  
<body id="index">

<?php include_once("top.php")?>

<div class="yltext">
<span class="comtit" style="margin-right:10px;<? if($_GET["t"]==0) echo "background-color:#fae0af;"; ?>"><a href="jianjie.php" target="_self">公司简介</a></span>
<span class="comtit" style="margin-right:10px;<? if($_GET["t"]==3) echo "background-color:#fae0af;"; ?>"><a href="jianjie.php?t=3" target="_self">企业文化</a></span>


<div>
<?php echo $rowall["a_content"]?>
</div>


<?php include_once("foot.php")?>
