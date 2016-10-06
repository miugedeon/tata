<style>
li.p1{width:325px;font-size:16px;height:50px;line-height:50px;background:url(images/case_nav_bg.jpg) repeat-x;text-align:center;overflow:hidden;float:left;}
li.p1 a{display:block;width:100%;height:50px;color:#2e2e2e;}
li.p1 a:hover,li.p1 a.hover{background:#fff;}
</style>
<ul>
<?php
foreach($c_nav as $v){
?>
    <li class="p1"><a <?php if($v[0]==$typeID) echo "class='hover'" ?> href="<?php echo $p ?>-<?php echo $v[0] ?>.html" target="_self">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $v[1]; ?></a></li>

<?php
}
unset($c_nav);
?>
</ul>