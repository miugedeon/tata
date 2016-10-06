<?php include_once("../common/conn.php")?>
<?php include_once("../common/str.php")?>
<?php 
$t1='';$t2='';$t3='';$t4='';
$bt=$_GET["pbt"];
if($_GET["pbt"])
	{$p_bigtype=$_GET["pbt"];
     $sql="select * from p_product where p_bigtype=".$p_bigtype;
	 if($_GET["pbt"]==5) $t1='faas';
	 if($_GET["pbt"]==1) $t2='faas';
	 if($_GET["pbt"]==3) $t3='faas';
	 if($_GET["pbt"]==4) $t4='faas';
	}
else{
	$sql="select * from p_product where p_bigtype=5";
	$t1='faas';
	}
if(isset($_GET[search])){
	$t1='';$t2='';$t3='';$t4='';
	$p_keyword=$_POST[p_keyword];

	$sql="select * from p_product where p_productname like '%".$p_keyword."%' or p_file1 like '%".$p_keyword."%' order by p_id desc";
				
}
	$query2=$d->Query($sql);
?>

<?php include_once("head.php")?>
<link href="css/163css.css" type="text/css" rel="stylesheet">
<style>.over2 a{background-color:#fadda5 !important; color:#000 !important; border-radius:15px !important; padding:5px 20px !important;}
.over2 a:visited{background-color:#fadda5 !important; color:#000 !important; border-radius:15px !important; padding:5px 20px !important;}</style>

<body id="index">
<?php include_once("top.php")?>
<div>
<div class="box03" id="box2">
			<ul>
            <li class="over15 <?php echo $t1;?>"><a href="liebiao.php?pbt=5" target="_self"><strong>印尼黑酸枝</strong></a></li>
            <li class="over15 <?php echo $t2;?>"><a href="liebiao.php?pbt=1" target="_self"><strong>大红酸枝</strong></a></li>
            <li class="over15 <?php echo $t3;?>"><a href="liebiao.php?pbt=3" target="_self"><strong>缅花</strong></a></li>
		     <li class="over15 <?php echo $t4;?>"><a href="liebiao.php?pbt=4" target="_self"><strong>檀香</strong></a></li>
           </ul>
</div>

<div class="c_img">
<ul class="tjlist2">
<?php
$n=1;//每行两个产品图的计数器
 while($row2=mysql_fetch_array($query2))
{
		if($n%2) echo "<li>";
?>
	
			<a href="cpread.php?cp=<?php echo $row2[p_id];?>&bt=<?php echo $bt;?>"><img class="" src="../system32/<?php echo $row2[p_pic1];?>" alt="" width="150" height="150">
            </a>
		
			
<?php
		$n++;
		if($n%2) echo "</li>";
		if($n>100) $n=1;
}


?>
			
</ul>
</div>  
<div class="pagelist">
        <ul>
        
<li><a href="http://www.zshtx.cn/about-3-0.html">更清晰产品请浏览<a style="color:#f00;" href="http://www.zshtx.cn/about-3-0.html">电脑端<a>网页</a></li>


        </ul>
</div>
      <div class="clear"></div>

</div>
<br>
<br>
<br>
<?php include_once("foot.php")?>