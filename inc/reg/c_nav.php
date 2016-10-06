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
				<?php
				$typeID=$_GET['typeID'];
				?>
<ul>
<li class="pp"><span class="t_cn"><?php echo $pTitle; ?></span><span class="num"><img src='images/bicon.jpg' /></span></li>

    <li class="p1">
    	<a class="p1a<?php if($typeID==33) echo " hover" ?>" href="reg-33.html" target="_self">会员注册</a>
		<a class="p1a<?php if($typeID==34) echo " hover" ?>" href="reg-34.html" target="_self">忘记密码</a>
       

    </li>

</ul>
<div class='c_nav_denglu'>
	<?php include_once("inc/c_nav_denglu.php"); ?>
</div>
<div class="c_nav_pic">
	<p><img src="images/navtel.png"  /></p>
    <p style='margin-top:70px;'><img src="images/navbottom.jpg"  /></p>
</div>