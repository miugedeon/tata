<?php include_once("../common/conn.php")?>
<?php include_once("../common/str.php")?>
<?php 

?>


	

<?php include_once("head.php")?>
<link href="css/lanrenzhijia.css" type="text/css" rel="stylesheet"/>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.event.drag-1.5.min.js"></script>
<script src="js/jquery.touchSlider.js"></script>

<style type="text/css" class="tabfix">
body.landscape .common-tab li.cur:before {left:-8px}body.landscape .common-tab li.cur:after {left:-7px}
.main_image img{width:100%;}
</style>
<script>
$(document).ready(function () {

});
</script>
<body id="index">
<?php include_once("top.php")?>
<div>
<?php 
$i=0;
     $sql="select * from p_banner where p_mark='wapindex' limit 0,3 ";
		$query2=$d->Query($sql);
		 while($row2=mysql_fetch_array($query2))
{
$pic[$i++]=$row2[p_pic];
}

?>
<div>				
					<span class=""><img style="width:100%;" src="../system32/<?echo $pic[0];?>" /></span>
</div>

<div>
		<div class="sboxc">
		<div class="sboxcc">
			<form id="sform" action="way.php" method="get" onsubmit="">
				<div class="sboxc-i"><input type="text" autocomplete="off" id="q" name="q" value="" placeholder="请输入路线关键字"/></div>
				<div class="sboxc-search"><input value="查询" type="submit" id="search-btn" class="img-search-btn" /></div>
				<div class="cl"></div>
			</form>
		</div>
		</div>
</div>					
   <div class="tit_tj"><a href="#" class="more"></a>热门路线</div>
   <div class="hotline">
   <ul>
		<li><a href="way.php?q=北京">北京</a></li>
		<li><a href="way.php?q=河北">河北</a></li>
		<li><a href="way.php?q=上海">上海</a></li>
		<li><a href="way.php?q=中山">中山</a></li>
		<li><a href="way.php?q=深圳">深圳</a></li>
		<li><a href="way.php?q=广州">广州</a></li>
		<li><a href="way.php?q=杭州">杭州</a></li>
		<li><a href="way.php?q=重庆">重庆</a></li>
		<li><a href="way.php?q=长沙">长沙</a></li>
		<li><a href="way.php?q=天津">天津</a></li>
		<li><a href="way.php?q=珠海">珠海</a></li>
		<li><a href="way.php?q=汕头">汕头</a></li>
   </ul>
   </div>
			


  <br>
   <div class="tit_tj"><a href="#" class="more"></a>联系方式</div>
 <?php echo $rowall[a_content];?>
<br>
<br>
<br>
<br>

</div>


<?php include_once("foot.php")?>