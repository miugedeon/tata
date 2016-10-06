<?php 
session_start(); 
include_once("common/conn.php");
include("common/str.php");
include("common/language.php");
include("common/vip.php");
$nav="index";
$sqltt="select * from p_title where language='".$language."'";
$querytt=$d->Query($sqltt);
$rowtt=mysql_fetch_array($querytt);
?>  
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>首页|<?php echo $rowtt["p_title"]?></title>
<meta name="keywords" content="<?php echo $rowtt["p_keyword"]?>" />
<meta name="description" content="<?php echo $rowtt["p_description"]?>" />
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="js/web.common.js"></script>
<script type="text/javascript" src="Scripts/swfobject_modified.js"></script>
<script type="text/javascript" src="js/MSClass.js"></script>
<!--[if IE 6]>
<script src="js/iepng.js" type="text/javascript"></script>
<script type="text/javascript">
   EvPNG.fix('div, ul, img, li, input');  //EvPNG.fix('包含透明PNG图片的标签'); 多个标签之间用英文逗号隔开。
</script>
<![endif]-->

<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/sam.css" />
<link rel="stylesheet" type="text/css" href="css/hui.css" />
<link rel="stylesheet" type="text/css" href="css/nivo-slider.css" />
</head>
<body>
<!-- 
<div id="sam_ma2" style="position:absolute;left:50%;top:0;margin-left:-500px;z-index:99999;width:1000px;height:570px;display:none;"><img src="images/ma2.jpg" width=1000 height=570 alt="" /></div>
 -->
<div id="outter">
	<div id="header"><?php include_once("inc/header.php") ?></div>
    <div id="i_banner"><?php include_once("inc/i_banner.php") ?></div>
<div id='index_m'>
	<div class='m_1'>
		<div class='m_1_1'>
		<form action="way-w.html" method="post" style=" ">
			<div class='m_1_1_1'>
				<p style="">物流线路搜索:</p>
			</div>
				
			<div class='m_1_1_2'>
						  <select name="Keyword" style="" id="tt">
							 <option selected="selected"style=""value="北京" >北京</option>
							  <option value="安徽">安徽</option>
							  <option value="广东">广东</option>
							  <option value="天津">天津</option>
							  <option value="河北">河北</option>
							  <option value="山西">山西</option>
							  <option value="内蒙古">内蒙古</option>
							  <option value="辽宁">辽宁</option>
							  <option value="吉林">吉林</option>
							  <option value="黑龙江">黑龙江</option>
							  <option value="上海">上海</option>
							  <option value="江苏">江苏</option>
							  <option value="浙江">浙江</option>
							  <option value="安徽">安徽</option>
							  <option value="福建">福建</option>
							  <option value="江西">江西</option>
							  <option value="山东">山东</option>
							  <option value="河南">河南</option>
							  <option value="湖北">湖北</option>
							  <option value="湖南">湖南</option>
							  <option value="广西">广西</option>
							  <option value="海南">海南</option>
							  <option value="重庆">重庆</option>
							  <option value="四川">四川</option>
							  <option value="贵州">贵州</option>
							  <option value="云南">云南</option>
							  <option value="西藏">西藏</option>
							  <option value="陕西">陕西</option>
							  <option value="甘肃">甘肃</option>
							  <option value="青海">青海</option>
							  <option value="新疆">新疆</option>
						  </select>
						 
						
			</div>
			<div class='m_1_1_3'>
					<input style=''  name="" type="image" src="images/ss.jpg" />
			</div>
		</form>
			<div style="clear:both;"></div>
		</div>
		
		<div class='m_1_2'>		
		<?php if($_SESSION['mylogin']!='') 
				{
				echo "<div class='logined'>欢迎&nbsp;&nbsp;<span>".$_SESSION['mylogin']."</span>&nbsp;&nbsp;登录本网站";
				echo "<a href='loginout.php'>退出登录</a></div>";
				}
				
			  else{
		?>
		<form name='formLong' method='post' action='inc/reg/mlogin.php'>
			
		<div class='m_1_2_1'>会员登录</div>
			<div class='m_1_2_2'>
				类别：
				<select name="sort" style="">
				<option value="司机信息">司机信息</option>
				<option value="车辆会员">车辆会员</option>
				<option value="货运公司">货运公司</option>
				<option value="企业会员">企业会员</option>
				</select>
			</div>
			<div class='m_1_2_3'>用户：<input name="LoginName" type="text" class=""  style=""> </div>
			<div class='m_1_2_4'>密码：<input name="LoginPassword" type="password" class=""  style=""></div>
			<div class='m_1_2_5'><input name="login" type="image" src="images/login.gif"></div>
			<div class='m_1_2_6'><a href="reg-33.html"><img src="images/reg.gif" border="0"></a></div>
			<div class='m_1_2_7'><a href="reg-34.html">忘记密码了吗？</a></div>
			<div style="clear:both;"></div>
		</form>
		<?php } ?>
		</div>
		
		<div style="clear:both;"></div>
	</div>
	
</div>

<div id='index_n'>
	<div class='n_1'>
		<div class='n_1_1'><img src='images/ban1.jpg' /></div>
		<div class='n_1_2'>
			<div class='n_1_2_1'>
				<span class=''><a href='way-f.html'>发货找车</a></span>|<span class=''><a href='join-29.html'>企业信息</a></span>
				
			</div>
			<div class='n_1_2_2'>
				<div class='n_1_2_2_1'>
					<form action="way-f.html" method="post">
					<span class='cfd'>出发地:</span>
					<select name="cf" id="cf">
					  <option value="北京" selected="selected">北京</option>
					  <option value="安徽">安徽</option>
					  <option value="广东">广东</option>
					  <option value="天津">天津</option>
					  <option value="河北">河北</option>
					  <option value="山西">山西</option>
					  <option value="内蒙古">内蒙古</option>
					  <option value="辽宁">辽宁</option>
					  <option value="吉林">吉林</option>
					  <option value="黑龙江">黑龙江</option>
					  <option value="上海市">上海市</option>
					  <option value="江苏">江苏</option>
					  <option value="浙江">浙江</option>
					  <option value="安徽">安徽</option>
					  <option value="福建">福建</option>
					  <option value="江西">江西</option>
					  <option value="山东">山东</option>
					  <option value="河南">河南</option>
					  <option value="湖北">湖北</option>
					  <option value="湖南">湖南</option>
					  <option value="广西">广西</option>
					  <option value="海南">海南</option>
					  <option value="重庆">重庆</option>
					  <option value="四川">四川</option>
					  <option value="贵州">贵州</option>
					  <option value="云南">云南</option>
					  <option value="西藏">西藏</option>
					  <option value="陕西">陕西</option>
					  <option value="甘肃">甘肃</option>
					  <option value="青海">青海</option>
					  <option value="新疆">新疆</option>
					</select>
					<span class='mdd'>到达地:</span>
					<select name="md" id="md">
					  <option value="北京" selected="selected">北京</option>
					  <option value="安徽">安徽</option>
					  <option value="广东">广东</option>
					  <option value="天津">天津</option>
					  <option value="河北">河北</option>
					  <option value="山西">山西</option>
					  <option value="内蒙古">内蒙古</option>
					  <option value="辽宁">辽宁</option>
					  <option value="吉林">吉林</option>
					  <option value="黑龙江">黑龙江</option>
					  <option value="上海市">上海市</option>
					  <option value="江苏">江苏</option>
					  <option value="浙江">浙江</option>
					  <option value="安徽">安徽</option>
					  <option value="福建">福建</option>
					  <option value="江西">江西</option>
					  <option value="山东">山东</option>
					  <option value="河南">河南</option>
					  <option value="湖北">湖北</option>
					  <option value="湖南">湖南</option>
					  <option value="广西">广西</option>
					  <option value="海南">海南</option>
					  <option value="重庆">重庆</option>
					  <option value="四川">四川</option>
					  <option value="贵州">贵州</option>
					  <option value="云南">云南</option>
					  <option value="西藏">西藏</option>
					  <option value="陕西">陕西</option>
					  <option value="甘肃">甘肃</option>
					  <option value="青海">青海</option>
					  <option value="新疆">新疆</option>
					</select>
					<span class='an'><input name="" type="image" src="images/ss.jpg" /></span>
					</form>
				</div>
				<div class='n_1_2_2_2'>
					<div class="bt">
						<div class="bt1">出发地->目的地</div>
						<div class="bt2">发布时间</div>
						<div class="bt3">详细</div>
						<div style="clear:both;"></div>
					</div>
					<div id="demo" style="overflow:hidden;height:160px;width:100%;  ">
						<div id="demo1">
<?php
	$sql="select * from p_cy where viewflag=1";
	$query=mysql_query($sql);
		while($row=mysql_fetch_array($query))
		{
			echo "<div class='bb'>";
			echo "<div class='bb1'>". $row["cf"] ."-->".$row["md"] ."</div>";
			echo "<div class='bb2'><a href='way-x-".$row["id"].".html'>详细</a></div>";
			echo "<div class='bb3'>". $row["addtime"] ."</div>";
			echo "<div style='clear:both;'></div>";
			echo "</div>";
		}
		?>
								
									
						</div>
						<div id="demo2">
						</div>
					</div>
					<script>
					var speed=80
					var demo=document.getElementById("demo");
					var demo2=document.getElementById("demo2");
					var demo1=document.getElementById("demo1");
					demo2.innerHTML=demo1.innerHTML
					function Marquee(){
					//alert(demo2.offsetTop);
					//if(demo2.offsetTop-demo.scrollTop<=0)
					if(demo.scrollTop>=112)
						{
						demo.scrollTop-=demo1.offsetHeight;
						}
					else{
						demo.scrollTop++;
						}
					}
					var MyMar=setInterval(Marquee,speed);
					demo.onmouseover=function() {clearInterval(MyMar)}
					demo.onmouseout=function() {MyMar=setInterval(Marquee,speed)}
					</script>
					
				</div>
			</div>
			
		</div>
		<div class='n_1_3'>
			<div class='n_1_3_1'>
				<span class=''><a href='way.html'>物流市场路线表</a></span>
				
			</div>
			<div class='n_1_2_2'>
				<div class='n_1_2_2_1'>
					<form action="way-w.html" method="post">
					<span class='cfd'>目的地:</span>
					<select name="Keyword" id="cf">
					  <option value="北京" selected="selected">北京</option>
					  <option value="安徽">安徽</option>
					  <option value="广东">广东</option>
					  <option value="天津">天津</option>
					  <option value="河北">河北</option>
					  <option value="山西">山西</option>
					  <option value="内蒙古">内蒙古</option>
					  <option value="辽宁">辽宁</option>
					  <option value="吉林">吉林</option>
					  <option value="黑龙江">黑龙江</option>
					  <option value="上海市">上海市</option>
					  <option value="江苏">江苏</option>
					  <option value="浙江">浙江</option>
					  <option value="安徽">安徽</option>
					  <option value="福建">福建</option>
					  <option value="江西">江西</option>
					  <option value="山东">山东</option>
					  <option value="河南">河南</option>
					  <option value="湖北">湖北</option>
					  <option value="湖南">湖南</option>
					  <option value="广西">广西</option>
					  <option value="海南">海南</option>
					  <option value="重庆">重庆</option>
					  <option value="四川">四川</option>
					  <option value="贵州">贵州</option>
					  <option value="云南">云南</option>
					  <option value="西藏">西藏</option>
					  <option value="陕西">陕西</option>
					  <option value="甘肃">甘肃</option>
					  <option value="青海">青海</option>
					  <option value="新疆">新疆</option>
					</select>
					
					<span class='an'><input name="" type="image" src="images/ss.jpg" /></span>
					</form>
				</div>
				<div class='n_1_2_2_2'>
					<div class="btt">
						<div class="btt1">物流公司名称</div>
						<div class="btt2">线路方向</div>
						<div class="btt3">联系电话</div>
						<div class="btt4">详细</div>
						<div style="clear:both;"></div>
					</div>
					<div id="demo_" style="overflow:hidden;height:160px;width:100%;  ">
						<div id="demo1_">
<?php
	$sql="select * from p_way where viewflag=1";
	$query=mysql_query($sql);
		while($row=mysql_fetch_array($query))
		{
			echo "<div class='bb'>";
			echo "<div class='bbb1'>". $row["company"] ."</div>";
			echo "<div class='bbb2'>". $row["way"] ."</div>";
			echo "<div class='bbb3'>". $row["tel"] ."</div>";
			echo "<div class='bbb4'><a href='way-y-".$row["id"].".html'>详细</a></div>";
			echo "<div style='clear:both;'></div>";
			echo "</div>";
		}
		?>

								

						</div>
						<div id="demo2_">
						</div>
					</div>
					<script>
					var speed_=80
					var demo_=document.getElementById("demo_");
					var demo2_=document.getElementById("demo2_");
					var demo1_=document.getElementById("demo1_");
					demo2_.innerHTML=demo1_.innerHTML
					function Marquee_(){
					//alert(demo2.offsetTop);
					//if(demo2.offsetTop-demo.scrollTop<=0)
					if(demo_.scrollTop>=112)
						{
						demo_.scrollTop-=demo1_.offsetHeight;
						}
					else{
						demo_.scrollTop++;
						}
					}
					var MyMar_=setInterval(Marquee_,speed_);
					demo_.onmouseover=function() {clearInterval(MyMar_)}
					demo_.onmouseout=function() {MyMar_=setInterval(Marquee_,speed_)}
					</script>
					
				</div>
			</div>
		</div>
	</div>
	<div class='n_2'>
		<div class='n_2_1'><a href="about-30.html" ><img src='images/ban2.jpg' /></a></div>
		<div class='n_2_2'>
			<div class='n_2_2_1'>
				<div class='zxdt'>最新动态</div>
				<div class='gd'><a href="news.html" >更多</a></div>
				<div style="clear:both;"></div>
			</div>
			<div class='n_2_2_2'>
				<ul>
<?php
	$sql="select * from p_news where p_type=5 order by p_id desc limit 5";
	$query=mysql_query($sql);
		while($row=mysql_fetch_array($query))
		{
			//$title=substr($row["p_title"],0,12);
			$title=iconv_substr($row["p_title"], 0,20,'UTF-8').'...';
			echo "<li><img src='images/newicon.png'/><a href='news_show-5-".$row["p_id"].".html'>".$title."</a></li>";
		} 
?>
				</ul>
			</div>
		</div>
		<div class='n_2_3'>
			<div class='n_2_2_1'>
				<div class='zxdt'>最新进驻</div>
				<div class='gd'><a href="join-29.html" >更多</a></div>
				<div style="clear:both;"></div>
			</div>
			<div class='n_2_2_2'>
			<?php
			$sql="select * from p_join where ViewFlag=1 order by id desc limit 5";
			$query=mysql_query($sql);
				while($row=mysql_fetch_array($query))
				{
					$joindate=substr($row["addtime"],0,10);
					echo "<div class='zxjza'><span class='zxjz_l'><a href='join-29.html'>".$row["company"]."</a></span><span class='zxjz_r'>[".$joindate."]</span></div>";
				} 
		?>
			

					
			</div>
		</div>
		<div class='n_2_4'><a href="contact-8.html" ><img src='images/tel.jpg' /></a></div>
	</div>
	<div style="clear:both;"></div>
</div>

<div id="indexCenter">
<br><br><br>

</div>
    <div id="foot"><?php include_once("inc/footer.php"); ?></div>
</div>

</body>
</html>
