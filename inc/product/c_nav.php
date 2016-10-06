 <style>
li.pp{background:url(images/c_nav_b.jpg);width:176px;height:63px;color:#fff;margin-bottom:8px;}
li.pp .num{font-size:30px;line-height:63px;text-indent:12px;font-family:"Times New Roman", Times, serif;display:block;overflow:hidden;float:left;}
li.pp .t_cn{font-size:20px;line-height:63px;text-indent:50px;font-family: "Microsoft YaHei", SimHei, sans-serif;font-weight:bold;padding-left:10px;	}
li.p1{font-size:12px;width:100%;height:37px;line-height:37px;/*background:url(images/cp_nav_bg.gif);*/border-bottom:1px solid #d7d7d7;text-indent:10px;margin:5px 0 0 0;margin-bottom:1px;}
li.p1 a{display:block;width:100%;height:37px;color:#6d6d6d;}
li.p1 a:hover,li.p1 a.hover{color:#385dae;background:url(images/c_nav_hoverbg.gif) 0px 0px;height:37px;position:relative;top:0px;}
li.p2{width:100%;height:33px;background:#6090ba;border-bottom:#fff 1px solid;text-indent:10px;color:#fff;line-height:33px;}
li.p2 a{display:block;width:100%;height:33px;color:#fff;}
li.p2 a:hover,li.p2 a.hover{background:#385dae;}
.c_nav_pic{margin-top:10px;}
</style>
<ul>
<li class="pp"><span class="num"><?php echo $c_num; ?></span><span class="t_cn"><?php echo $pTitle; ?></span></li>
<?php
$sql="select * from p_product_type where language='cn' and p_bigtype=0";
$query=$d->Query($sql);
while($row=mysql_fetch_array($query)){
?>
    <li class="p1"><a <?php if($row[p_id]==$typeID) echo "class='hover'" ?> href="<?php echo $p ?>-<?php echo $row[p_id] ?>.html" target="_self"><?php echo $row[p_title]; ?></a></li>
	<?php
    $sql2="select * from p_product_type where language='cn' and p_bigtype=".$row[p_id];
    $query2=$d->Query($sql2);
    while($row2=mysql_fetch_array($query2)){
    ?>
    <li class="p2"><a <?php if($row2[p_id]==$twoID) echo "class='hover'" ?> href="<?php echo $p ?>-<?php echo $row2[p_bigtype] ?>-<?php echo $row2[p_id] ?>.html" target="_self"><?php echo $row2[p_title]; ?></a></li>
    <?php
    }
    ?>
<?php
}
unset($c_nav);
?>
</ul>
<div class="c_nav_pic">
	<p><img src="images/c_nav_tel.jpg" width="176" height="61" /></p>
    <p><img src="images/c_nav_weibo.jpg" width="176" height="60" /></p>
</div>