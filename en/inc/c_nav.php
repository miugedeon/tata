<style>
li.pp{background:url(images/c_nav_b.jpg);width:176px;height:63px;color:#fff;margin-bottom:8px;}
li.pp .num{font-size:30px;line-height:63px;text-indent:12px;font-family:"Times New Roman", Times, serif;display:block;overflow:hidden;float:left;}
li.pp .t_cn{font-size:20px;line-height:63px;text-indent:50px;font-family: "Microsoft YaHei", SimHei, sans-serif;font-weight:bold;padding-left:10px;	}
li.p1{font-size:12px;width:100%;/*height:34px;*/line-height:34px;text-indent:15px;}
li.p1 a.p1a{display:block;width:100%;height:34px;color:#6d6d6d;border-bottom:1px solid #d7d7d7;}
li.p1 a.p1a:hover,li.p1 a.p1a.hover{color:#385dae;background:url(images/c_nav_hoverbg.gif) 0px 0px;height:34px;position:relative;top:-1px;line-height:35px;}

li.p2{text-indent:2.5em;}
li.p2 a.p2a{color:#a5a5a5;}
li.p2 a.p2a.hover{color:#000;}

.c_nav_pic{margin-top:10px;}
</style>
<ul>
<li class="pp"><span class="num"><?php echo $c_num; ?></span><span class="t_cn"><?php echo $pTitle; ?></span></li>
<?php
foreach($c_nav as $v){
?>
    <li class="p1">
    	<a class="p1a<?php if($v[0]==$typeID) echo " hover" ?>" href="<?php echo $p ?>-<?php echo $v[0] ?>.html" target="_self"><?php echo $v[1]; ?></a>
        <?php
		if(!$thirdNavCanneled){
		$sqls="select * from p_type where language='cn' and p_bigtype=".$v[0]." order by p_id asc";
		//echo $sqls;
		$querys=$d->Query($sqls);
		$nums=mysql_num_rows($querys);
		if($nums>0){
		?>
        <ul>
    	<?php
		while($rows=mysql_fetch_array($querys)){
		?>	
        	<li class="p2"><a class="p2a<?php if($rows[p_id]==$twoID) echo " hover" ?>" href="<?php echo $p; ?>-<?php echo $v[0] ?>-<?php echo $rows[p_id]; ?>.html">•&nbsp;<?php echo $rows[p_title_en]; ?></a></li>
		<?php	
		}
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
<div class="c_nav_pic">
	<p><img src="images/c_nav_tel.jpg" width="176" height="61" /></p>
    <p><img src="images/c_nav_weibo.jpg" width="176" height="60" /></p>
</div>