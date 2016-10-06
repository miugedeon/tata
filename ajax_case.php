 <?php	header("Content-Type: text/html; charset=utf-8");
 include_once("common/conn.php")?>

<?php
	$p_id=0+$_GET["p_id"];
	$sql="select * from p_case where p_id=".$p_id;
	$query=$d->Query($sql);
	$row=mysql_fetch_array($query);
	
		?>
		
		<div id="pro_show">
			<h1 id="p_n"><?php echo $row["p_title"] ?></h1>
			<!-- <div id="p_img"><img src="system32/<?php echo $row["p_pic2"] ?>" width=670 alt="" /></div> -->
			<br/>
			<div id="pro_cc">
			<?php echo $row["p_content"]?>
			</div>
		</div>

<style type="text/css">
#p_n{text-align:center;font-size:16px;}
#pro_show{width:1024px;overflow:hidden;background:#fff;margin:0 auto;position:relative;}
#pro_cc{line-height:200%;width:984px;padding:20px;overflow:hidden;color:#000;font-size:14px;}
</style>


