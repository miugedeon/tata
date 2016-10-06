<?php include_once("../common/conn.php")?>
<?php include_once("../common/str.php")?>

<?php include_once("head.php")?>

<body >
<?php include_once("top.php")?>
<div class="waylist">
<?php
$keyword=$_GET["q"];
	//$sql="select * from p_way where viewflag=1 order by sort desc ,id desc";
	$sql="SELECT * FROM p_way WHERE company LIKE BINARY '%".$keyword."%' or way LIKE BINARY '%".$keyword."%' or cityy LIKE BINARY '%".$keyword."%' or tel LIKE  '".$keyword."' or address LIKE BINARY '%".$keyword."%'";
	mysql_query("set names utf8");
	$query=mysql_query($sql);
	$wayo=0;
		while($row=mysql_fetch_array($query))
		{$wayo++;?>
		<div class="wayli" >
		<div class="wayimg"><a href="detail.php?id=<?php echo $row["id"]; ?>&p=<?php echo $keyword; ?>"><img src="<?php echo $row["logo"]; ?>" /></a></div>
		<div class="waytext">
			<div class="wayname"><a href="detail.php?id=<?php echo $row["id"]; ?>&p=<?php echo $keyword; ?>"><?php echo $row["company"]; ?></a></div>
			<div class="wayzhida"><a href="detail.php?id=<?php echo $row["id"]; ?>&p=<?php echo $keyword; ?>">直达：<?php echo $row["way"]; ?></a></div>
			<div class="wayzhuan"><a href="detail.php?id=<?php echo $row["id"]; ?>&p=<?php echo $keyword; ?>">中转：
			<?php
			$str = getSummary($row["cityy"], 14);
				
				if(iconv_strlen($str,'utf-8')<14)
				{
					echo $str;
				}
				else
				{
					echo iconv_substr($str, 0,14,'UTF-8').'...';
				}?></a>
			</div>
			<div class="waytel"><a href="detail.php?id=<?php echo $row["id"]; ?>&p=<?php echo $keyword; ?>">联系电话：<?php echo $row["tel"]; ?></a></div>
			<div class="wayaddress"><a href="detail.php?id=<?php echo $row["id"]; ?>&p=<?php echo $keyword; ?>"><?php echo $row["address"]; ?></a></div>
		</div>
		<div style="clear:both;"></div>
		</div>
		
		
		
		
		<?php 
		
		}
		if($wayo==0) echo "<div class='noway'>暂无此线路信息</div><div class='nowayback'><a href='index.php'>返回</a></div>";
		?>

	

</div>
<div class="dtback"><a href="index.php">←</a></div>
</body>
<script>
$(document).ready(function(){
var yuan = '<?php echo $keyword; ?>';
var yuan1 = '=<?php echo $keyword; ?>';
var str = '<span style="color:red">'+yuan+'</span>';
var str1 = 'miugedeon';
   $(".waylist").html($(".waylist").html().replace(eval("/"+yuan1+"/g"),str1));
   $(".waylist").html($(".waylist").html().replace(eval("/"+yuan+"/g"),str));
   $(".waylist").html($(".waylist").html().replace(eval("/"+str1+"/g"),yuan1));

});

</script>
</html>