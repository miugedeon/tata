<?php include_once("../common/conn.php")?>
<?php include_once("../common/str.php")?>
<?php 
     $sql="select * from p_news";
		$query2=$d->Query($sql);
?>


	

<?php include_once("head.php")?>
<body id="index">
<?php include_once("top.php")?>
<div>
<div class="tit_tj"><a href="#" class="more"></a>公司新闻</div>
<ul class="tjlist1">
<?php
 while($row2=mysql_fetch_array($query2))
{

    ?><li><a href="xwread.php?no=<?php echo $row2[p_id];?>">
      <strong><?php echo $row2[p_title];?></strong><div class="jiantou"></div>
    </a></li>
<?php
}


?>
</ul>


</div>


<?php include_once("foot.php")?>