<?php include_once("../common/conn.php")?>
<?php include_once("../common/str.php")?>

<?php include_once("head.php")?>
<body >
<?php include_once("top.php")?>
<?php 
$keyid=$_GET["id"];
$keyword=$_GET["p"];
$sql="select * from p_way where id=".$keyid;
mysql_query("set names utf8");
$query=mysql_query($sql);
$row=mysql_fetch_array($query);
?>
<div class="dtbox">
	<div class="dttop">
		<div class="dtlog"><img src="<?php echo $row["logo"]; ?>" /></div>
		<div class="dtright">
			<div class="dtname"><?php echo $row["company"]; ?></div>
			<div class="dtlkm"><span style="font-weight:bold;">联系人：</span><?php echo $row["linkman"]; ?></div>
			<div class="dtphone"><span style="font-weight:bold;">联系电话：</span><?php echo $row["tel"]; ?></div>
			<div class="dtaddr"><span style="font-weight:bold;">地址：</span><?php echo $row["bz"]; ?></div>
			<div class="dtddd"><span style="font-weight:bold;">档口位置：</span><?php echo $row["address"]; ?></div>
		</div>
		<div style="clear:both;"></div>
	</div>
	<div class="dtzd">直达：<div class="dtzdw"><?php echo $row["way"]; ?></div></div>
	<div class="dtzz">中转：<div class="dtzzw"><?php echo $row["cityy"]; ?></div></div>
	
</div>
<div class="dtback"><a href="way.php?q=<?php echo $keyword;?>">←</a></div>
</body>
</html>