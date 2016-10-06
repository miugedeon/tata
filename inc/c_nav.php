<style>
li.pp{width:176px;height:63px;color:#000;}
li.pp .num{font-size:30px;line-height:63px;text-indent:12px;font-family:"Times New Roman", Times, serif;display:block;overflow:hidden;float:right;margin-top: 30px;}
li.pp .t_cn{font-size:21px;line-height:63px;text-indent:50px;font-family: "Microsoft YaHei", SimHei, sans-serif;}
li.p1{font-size:12px;width:100%;/*height:34px;*/line-height:30px;text-indent:15px;}
li.p1 a.p1a{display:block;width:100%;height:30px;color:#000;border-bottom:1px solid #d7d7d7;}
li.p1 a.p1a:hover,li.p1 a.p1a.hover{color:#fff;background:#f08519;height:30px;position:relative;top:-1px;line-height:35px;}

li.p2{text-indent:2.5em;}
li.p2 a.p2a{color:#a5a5a5;}
li.p2 a.p2a.hover{color:#000;}

.c_nav_pic{margin-top:30px;}
</style>
<ul>
<li class="pp"><span class="t_cn"><?php echo $pTitle; ?></span><span class="num"><img src='images/bicon.jpg' /></span></li>
<?php
foreach($c_nav as $v){
?>
    <li class="p1">
    	<a class="p1a<?php if($v[0]==$typeID) echo " hover" ?>" href="<?php echo $p ?>-<?php echo $v[0] ?>.html" target="_self"><?php echo $v[1]; ?></a>
        <?php
		if($p=='tech' && $v[0]==1)
		$sqls="select * from p_type where language='cn' and p_bigtype=$bigtype order by p_id asc";
		else
		$sqls="select * from p_type where language='cn' and p_bigtype=".$v[0]." and p_mark='$p' order by p_id asc";
		//echo $sqls;
		$querys=$d->Query($sqls);
		$nums=mysql_num_rows($querys);
		if($nums>0){
		?>
        <ul>
    	<?php
		while($rows=mysql_fetch_array($querys)){
		?>	
        	<li class="p2">
				<a class="p2a<?php if($rows[p_id]==$twoID) echo " hover" ?>" href="<?php echo $p; ?>-<?php echo $v[0] ?>-<?php echo $rows[p_id]; ?>.html">
				•&nbsp;<?php echo $rows[p_title]; ?>
				</a>
			</li>
		<?php	
		}
		?>
		</ul>
    </li>
	
<?php
	}
}
unset($c_nav);
?>
</ul>
<div class='c_nav_denglu'>
	<?php include_once("inc/c_nav_denglu.php"); ?>
</div>
<div class="c_nav_pic">
	<p><img src="images/navtel.png"  /></p>
    <p style='margin-top:70px;'><img src="images/navbottom.jpg"  /></p>
</div>