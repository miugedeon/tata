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
<!--[if IE 6]>
<script src="js/iepng.js" type="text/javascript"></script>
<script type="text/javascript">
   EvPNG.fix('div, ul, img, li, input');  //EvPNG.fix('包含透明PNG图片的标签'); 多个标签之间用英文逗号隔开。
</script>
<![endif]-->

<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/sam.css" />
<link rel="stylesheet" type="text/css" href="css/nivo-slider.css" />
</head>
<body>
<!-- 
<div id="sam_ma2" style="position:absolute;left:50%;top:0;margin-left:-500px;z-index:99999;width:1000px;height:570px;display:none;"><img src="images/ma2.jpg" width=1000 height=570 alt="" /></div>
 -->
<div id="outter">
	<div id="header"><?php include_once("inc/header.php") ?></div>
    <div id="i_banner"><?php include_once("inc/i_banner.php") ?></div>
    <div id="i_sbg"></div>
    <div id="content">
    	<div id="middleCon">
            <div id="i_1"><?php include_once("inc/i_1.php") ?></div>
        </div>
    </div>
    <div id="footer"><?php include_once("inc/footer.php"); ?></div>
</div>
<!-- 
<script type="text/javascript">
	$("#sam_ma2").slideDown(1000);
	$("#sam_ma2").click(function(){
		$(this).hide(1000);
	});
</script>
 -->
</body>
</html>
