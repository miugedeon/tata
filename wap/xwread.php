<?php include_once("../common/conn.php")?>
<?php include_once("../common/str.php")?>
<?php 
$id=$_GET["no"];
     $sql="select * from p_news where p_id=".$id;
	$query=$d->Query($sql);
	$rowall=mysql_fetch_array($query);
?>


	

<?php include_once("head.php")?>

<script >

</script>
<body id="index">
<?php include_once("top.php")?>
<div>

 <div class="xm_t"><?php echo $rowall["p_title"]?></div>
 <div ><a style="float:right; margin:0px 5px 0 0; font-size:16px; background-color:#fae0af;border-radius:20px;" href="xinwen.php">返回</a></div>
<div class="xm_m aa1">
    <?php echo $rowall["p_content"]?>
  </div>
<a style="float:right; margin:15px 30px 0 0; font-size:16px;" href="xinwen.php">返回</a>

</div>


<?php include_once("foot.php")?>