<?php include_once("config.php")?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<script src="js/prototype.lite.js" type="text/javascript"></script>
<script src="js/moo.fx.js" type="text/javascript"></script>
<script src="js/moo.fx.pack.js" type="text/javascript"></script>
<style>
body {
	font:12px Arial, Helvetica, sans-serif;
	color: #000;
	background-color: #EEF2FB;
	margin: 0px;
}
#container {
	width: 182px;
}
H1 {
	font-size: 12px;
	margin: 0px;
	width: 182px;
	cursor: pointer;
	height: 30px;
	line-height: 20px;	
}
H1 a {
	display: block;
	width: 182px;
	color: #000;
	height: 30px;
	text-decoration: none;
	moz-outline-style: none;
	
	background-repeat: no-repeat;
	line-height: 30px;
	text-align: center;
	margin: 0px;
	padding: 0px;
	background:url(images/menu_bgs.gif);
}
.content{
	width: 182px;
	height: 26px;
	
}
.MM ul {
	list-style-type: none;
	margin: 0px;
	padding: 0px;
	display: block;
}
.MM li {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	line-height: 26px;
	color: #333333;
	list-style-type: none;
	display: block;
	text-decoration: none;
	height: 26px;
	width: 182px;
	padding-left: 0px;
}
.MM {
	width: 182px;
	margin: 0px;
	padding: 0px;
	left: 0px;
	top: 0px;
	right: 0px;
	bottom: 0px;
	clip: rect(0px,0px,0px,0px);
}
.MM a:link {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	line-height: 26px;
	color: #333333;
	background-image: url(images/menu_bg1.gif);
	background-repeat: no-repeat;
	height: 26px;
	width: 182px;
	display: block;
	text-align: center;
	margin: 0px;
	padding: 0px;
	overflow: hidden;
	text-decoration: none;
}
.MM a:visited {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	line-height: 26px;
	color: #333333;
	background-image: url(images/menu_bg1.gif);
	background-repeat: no-repeat;
	display: block;
	text-align: center;
	margin: 0px;
	padding: 0px;
	height: 26px;
	width: 182px;
	text-decoration: none;
}
.MM a:active {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	line-height: 26px;
	color: #333333;
	background-image: url(images/menu_bg1.gif);
	background-repeat: no-repeat;
	height: 26px;
	width: 182px;
	display: block;
	text-align: center;
	margin: 0px;
	padding: 0px;
	overflow: hidden;
	text-decoration: none;
}
.MM a:hover {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	line-height: 26px;
	font-weight: bold;
	color: #006600;
	background-repeat: no-repeat;
	text-align: center;
	display: block;
	margin: 0px;
	padding: 0px;
	height: 26px;
	width: 182px;
	text-decoration: none;
}
a.ft{font-weight:bold;}
</style>
</head>

<body>

<?php
	$langauge=$_SESSION["language"];
?>
<table width="100%" height="280" border="0" cellpadding="0" cellspacing="0" bgcolor="#EEF2FB">
  <tr>
    <td width="182" valign="top"><div id="container">
      <h1 class="type"><a href="javascript:void(0)">常规管理</a></h1>
      <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="images/menu_topline.gif" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">
          	<li><a href="web_config.php?language=<?php echo $langauge?>" target="main">系统配置</a></li>
            <li><a href="type_manage.php?language=<?php echo $langauge?>" target="main">模块管理</a></li>
            <li style="display:none;"><a href="pic_manage.php?language=<?php echo $langauge?>" target="main">图片管理</a></li>
           <!-- <li><a href="emaill.php" target="main">邮件营销</a></li>-->
           <li style="display:none;"><a href="fckManage.php" target="main">在线留言</a></li>
           <li style="display:none;"><a href="join.php?language=<?php echo $langauge?>" target="main">在线加盟</a></li>
           <li style="display:none;"><a href="email.php" target="main">邮箱配置</a></li>
           <li style="display:none;"><a href="dowload.php?language=<?php echo $langauge?>" target="main">下载管理</a></li>
           <li style="display:none;"><a href="vip_new.php?language=cn" target="main">会员列表</a></li>
        </ul>
      </div>
      
      <div style="display:none;">
      <h1 class="type"><a href="javascript:void(0)">相关国家设置</a></h1>
      <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="images/menu_topline.gif" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">
		  <li><a href="contry_add.php?language=<?php echo $langauge?>" target="main">国家添加</a></li>
          <li><a href="contry_manage.php?language=<?php echo $langauge?>" target="main">国家管理</a></li>
        </ul>
      </div>
      </div>
      
      <?php
	  if($langauge=='cn'){
	  ?>
      <div>
        <h1 class="type"><a href="javascript:void(0)">图片管理</a></h1>
        <div class="content">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><img src="images/menu_topline.gif" width="182" height="5" /></td>
            </tr>
          </table>
          <ul class="MM">
          <li><a href="list_type.php?language=cn&p_typelist=pic" target="main">图片分类</a></li>
          <li><a href="pic_manage.php" target="main">图片管理</a></li>
          </ul>
	  </div>
      <?php
	  }
	  ?>
      
      <?php
	  //if($langauge=='cn'){
	  ?>
       <div>
      <h1 class="type" style="display:none;"><a href="javascript:void(0)">产品管理</a></h1>
      <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="images/menu_topline.gif" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">
		  <li><a href="product_type.php?language=<?php echo $langauge?>" target="main">分类管理</a></li>
          <li><a href="product_add.php?language=<?php echo $langauge?>" target="main">添加产品</a></li>
          <li><a href="product_manage.php?language=<?php echo $langauge?>" target="main">管理产品</a></li>
          <li style="display:none;"><a href="product_function_type.php?language=<?php echo $langauge?>" target="main">产品活动</a></li>
        </ul>
      </div>
      </div>
      <?php
	  //}
	  ?>
      
      <?php
	  if($langauge=='cn'){
	  ?>
      <div>
	  <h1 class="type" style="display:none;"><a href="javascript:void(0)">工程案例</a></h1>
      <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="images/menu_topline.gif" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">
          <li><a href="list_type.php?language=<?php echo $langauge?>&p_typelist=case" target="main">类别管理</a></li>
          <li><a href="list_type.php?language=<?php echo $langauge?>&p_typelist=area" target="main">地区管理</a></li>
          <li><a href="case_add.php?language=<?php echo $langauge?>&p_typelist=case" target="main">添加信息</a></li>
          <li><a href="case_manage.php?language=<?php echo $langauge?>&p_typelist=case" target="main">管理信息</a></li>
        </ul>
      </div>
	  </div>
      <?php
	  }
	  ?>
      
      <?php
	  if($langauge=='cn'){
	  ?>
      <div style="display:none;">
      <h1 class="type"><a href="javascript:void(0)">技术与服务</a></h1>
      <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="images/menu_topline.gif" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">
          <li><a href="list_type.php?language=<?php echo $langauge?>&p_typelist=download" target="main">类别管理</a></li>
          <li><a href="case_add.php?language=<?php echo $langauge?>&p_typelist=download" target="main">添加信息</a></li>
          <li><a href="case_manage.php?language=<?php echo $langauge?>" target="main">管理信息</a></li>
        </ul>
      </div>
      </div>
      <?php
	  }
	  ?>
      
      <?php
	  if($langauge=='cn'){
	  ?>
      <div style="display:none;">
	  <h1 class="type"><a href="javascript:void(0)">俱乐部管理</a></h1>
      <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="images/menu_topline.gif" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">
          <li><a href="list_type.php?language=<?php echo $langauge?>&p_typelist=club" target="main">类别管理</a></li>
          <li><a href="club_add.php?language=<?php echo $langauge?>&p_typelist=club" target="main">添加信息</a></li>
          <li><a href="club_manage.php?language=<?php echo $langauge?>&p_typelist=club" target="main">管理信息</a></li>
        </ul>
      </div>
	  </div>
      <?php
	  }
	  ?>
      
      
      <div style="display:;">
	  <h1 class="type"><a href="javascript:void(0)">招聘管理</a></h1>
      <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="images/menu_topline.gif" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">
          <li><a href="job_add.php?language=<?php echo $langauge?>&p_typelist=case" target="main">添加信息</a></li>
          <li><a href="job_manage.php?language=<?php echo $langauge?>&p_typelist=case" target="main">管理信息</a></li>
		   <li><a href="jl_manage.php?language=<?php echo $langauge?>&p_typelist=case" target="main">简历管理</a></li>
        </ul>
      </div>
	  </div>
          
<?php
	  if($langauge=='cn'){
	  ?>            
      <div style="display:none;">
      <h1 class="type"><a href="javascript:void(0)">网点查询</a></h1>
      <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="images/menu_topline.gif" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">
		  <li><a href="area_type.php?language=<?php echo $langauge?>" target="main">销售区域</a></li>
          <li><a href="area_add.php?language=<?php echo $langauge?>" target="main">销售地区</a></li>
          <li><a href="area_manage.php?language=<?php echo $langauge?>" target="main">地区管理</a></li>
          <li style="display:none"><a href="product_para.php?language=<?php echo $langauge?>" target="main">参数设置</a></li>
        </ul>
      </div>
      </div>
       <?php
	  }
	  ?>
      
       <div style="display:none;">
      <h1 class="type"><a href="javascript:void(0)">国外销售网络</a></h1>
      <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="images/menu_topline.gif" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">
		  <li><a href="area2_type.php?language=<?php echo $langauge?>" target="main">销售区域</a></li>
          <li><a href="area2_add.php?language=<?php echo $langauge?>" target="main">销售地区</a></li>
          <li><a href="area2_manage.php?language=<?php echo $langauge?>" target="main">地区管理</a></li>
          <li style="display:none"><a href="product_para.php?language=<?php echo $langauge?>" target="main">参数设置</a></li>
        </ul>
      </div>
      </div>
      
	  <?php
	  if($langauge=='cn'){
	  ?>
      <div>
      <h1 class="type"><a href="javascript:void(0)">新闻管理</a></h1>
      <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="images/menu_topline.gif" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">
          <li><a href="list_type.php?language=<?php echo $langauge?>&p_typelist=news" target="main">新闻分类</a></li>
          <li><a href="news_add.php?language=<?php echo $langauge?>&p_typelist=news" target="main">添加新闻</a></li>
          <li><a href="news_manage.php?language=<?php echo $langauge?>" target="main">管理新闻</a></li>
        </ul>
      </div>
      </div>
      <?php
	  }
	  ?>
      <div style="display:none;">
      <h1 class="type"><a href="javascript:void(0)">直销网店</a></h1>
      <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="images/menu_topline.gif" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">
          <li><a href="shop_add.php?language=<?php echo $langauge?>&p_typelist=news" target="main">添加产品</a></li>
          <li><a href="shop_manage.php?language=<?php echo $langauge?>" target="main">管理产品</a></li>
        </ul>
      </div>
      </div>
      
      <div style="display:none;">
      <h1 class="type"><a href="javascript:void(0)">零件图管理</a></h1>
      <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="images/menu_topline.gif" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">
          <li><a href="fitting_add.php?language=<?php echo $langauge?>" target="main">添加零件图</a></li>
          <li><a href="fitting_manage.php?language=<?php echo $langauge?>" target="main">管理零件图</a></li>
        </ul>
      </div>
      </div>
      
      <div style="display:none;">
      <h1 class="type"><a href="javascript:void(0)">视频管理</a></h1>
      <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="images/menu_topline.gif" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">
          <li><a href="video_add.php?language=<?php echo $langauge?>" target="main">添加视频</a></li>
          <li><a href="video_manage.php?language=<?php echo $langauge?>" target="main">管理视频</a></li>
        </ul>
      </div>
  	  </div>
      
      <?php
	  if($langauge=='cn'){
	  ?>
      <div style="display:none;">
      <h1 class="type"><a href="javascript:void(0)">防伪验证管理</a></h1>
      <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="images/menu_topline.gif" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">
          <li><a href="cs_add.php?language=<?php echo $langauge?>" target="main">添加数据</a></li>
          <li><a href="cs_manage.php?language=<?php echo $langauge?>" target="main">数据管理</a></li>
        </ul>
      </div>
  	  </div>
      <?php
	  }
	  ?>
      
      <?php
	  if($langauge=='cn'){
	  ?>
      <div style="display:none;">
      <h1 class="type"><a href="javascript:void(0)">Exhibitions</a></h1>
      <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="images/menu_topline.gif" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">
          <li><a href="special_update.php?language=<?php echo $langauge?>&p_id=1" target="main">内容管理</a></li>
          <li style="display:none;"><a href="special_manage.php?language=<?php echo $langauge?>" target="main">专题活动管理</a></li>
        </ul>
      </div>
  	  </div>
  <?php
	  }
	  ?>
  
  
      <div style="display:none;">
      <h1 class="type"><a href="javascript:void(0)">合作伙伴</a></h1>
      <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="images/menu_topline.gif" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">
		  <li><a href="flink_add.php?language=<?php echo $langauge?>" target="main">图片添加</a></li>
          <li><a href="flink_manage.php?language=<?php echo $langauge?>" target="main">图片管理</a></li>
        </ul>
      </div>
      </div>
    
  
    <div style="display:;">
    <h1 class="type"><a href="javascript:void(0)">车源信息</a></h1>
      <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="images/menu_topline.gif" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">
          <!--<li><a href="list_type.php?language=<?php echo $langauge?>&p_typelist=case" target="main">类别管理</a></li>-->
          <li><a href="car_add.php?language=<?php echo $langauge?>&p_typelist=case" target="main">添加信息</a></li>
          <li><a href="car_manage.php?language=<?php echo $langauge?>&p_typelist=case" target="main">管理信息</a></li>
        </ul>
      </div>
    </div>
	
	<div style="display:;">
    <h1 class="type"><a href="javascript:void(0)">线路信息</a></h1>
      <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="images/menu_topline.gif" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">
          <!--<li><a href="list_type.php?language=<?php echo $langauge?>&p_typelist=case" target="main">类别管理</a></li>-->
          <li><a href="way_add.php?language=<?php echo $langauge?>&p_typelist=case" target="main">添加信息</a></li>
          <li><a href="way_manage.php?language=<?php echo $langauge?>&p_typelist=case" target="main">管理信息</a></li>
        </ul>
      </div>
    </div>
	<div style="display:;">
    <h1 class="type"><a href="javascript:void(0)">加盟企业</a></h1>
      <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="images/menu_topline.gif" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">
          <!--<li><a href="list_type.php?language=<?php echo $langauge?>&p_typelist=case" target="main">类别管理</a></li>-->
          <li><a href="join_add.php?language=<?php echo $langauge?>&p_typelist=case" target="main">添加信息</a></li>
          <li><a href="join_manage.php?language=<?php echo $langauge?>&p_typelist=case" target="main">管理信息</a></li>
        </ul>
      </div>
    </div>
    </div>
    
       <div style="display:;">
    <h1 class="type"><a href="javascript:void(0)">会员管理</a></h1>
      <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="images/menu_topline.gif" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">
          <!--<li><a href="list_type.php?language=<?php echo $langauge?>&p_typelist=case" target="main">类别管理</a></li>
          <li><a href="car_add.php?language=<?php echo $langauge?>&p_typelist=case" target="main">添加信息</a></li>-->
          <li><a href="reg_manage.php?language=<?php echo $langauge?>&p_typelist=case" target="main">管理信息</a></li>
        </ul>
      </div>
    </div>
 
 
    <div style="display:none;">
    <h1 class="type"><a href="javascript:void(0)">下载管理</a></h1>
      <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="images/menu_topline.gif" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">
          <li><a href="#" target="main">类别管理</a></li>
          <li><a href="#" target="main">添加信息</a></li>
          <li><a href="#" target="main">管理信息</a></li>
        </ul>
      </div>
    </div>
    </div>

      
      
      

<?php
      	$sql="select * from p_type where p_bigtype=0 and language='".$langauge."'";
	 	$array=$d->Query($sql);
		while($row=mysql_fetch_array($array))
		{
	  ?>
      <!----------------------------------------------------------------->
      <h1 class="type"><a href="javascript:void(0)"><?php echo $row["p_title"]?></a></h1>
      <div class="content">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><img src="images/menu_topline.gif" width="182" height="5" /></td>
            </tr>
          </table>
        <ul class="MM">
          <?php
          	$sql="select * from p_type where p_bigtype=".$row["p_id"]." and p_id<>94 and p_id<>96";
			$array1=$d->Query($sql);
			while($row1=mysql_fetch_array($array1))
			{
			?>
					<li><a href="type_edit.php?p_id=<?php echo $row1["p_id"]?>" target="main" class="ft" style="text-align:left;padding-left:20px;"><?php echo $row1["p_title"]?></a></li>	
             <?php
				$sql="select * from p_type where p_bigtype=".$row1["p_id"]." ";
			$array2=$d->Query($sql);
			while($row2=mysql_fetch_array($array2))
			{

		  ?>
         			 <li><a href="type_edit.php?p_id=<?php echo $row2["p_id"]?>" target="main"  style="color:#666;text-align:left;padding-left:20px;">|--<?php echo $row2["p_title"]?></a></li>
          <?php
			
				
				
          	}
				
				
          	}
		  ?>
        </ul>
      </div>
      </div>
      <!----------------------------------------------------------------->
      <?php
      	}
	  ?>
      
      
          <div style="display:none;">
    <h1 class="type"><a href="javascript:void(0)">电子期刊管理</a></h1>
      <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="images/menu_topline.gif" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">
          <li><a href="qikan.php" target="main">期刊生成</a></li>
          <li><a href="epush.php" target="main">邮箱推送设置</a></li>
          <li><a href="epushto.php" target="main">期刊发送</a></li>
        </ul>
      </div>
    </div>
    </div>
      


      
        <script type="text/javascript">
		var contents = document.getElementsByClassName('content');
		var toggles = document.getElementsByClassName('type');
	
		var myAccordion = new fx.Accordion(
			toggles, contents, {opacity: true, duration: 400}
		);
		myAccordion.showThisHideOpen(contents[0]);
	</script>
        </td>
  </tr>
</table>
</body>
</html>
<?php

?>