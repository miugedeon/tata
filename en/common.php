<?php 
session_start(); 
include_once("../common/conn.php");
include("../common/str.php");
include("common/language.php");
include("../common/vip.php");
include("../common/page_en.php");
$p=get(p);
$sqltt="select * from p_title where language='".$language."'";
$querytt=$d->Query($sqltt);
$rowtt=mysql_fetch_array($querytt);
include_once("inc/$p/db.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php echo $rowtt["p_keyword"]?>" />
<meta name="description" content="<?php echo $rowtt["p_description"]?>" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/sam.css" />
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/web.common.js"></script>
<script type="text/javascript" src="js/MSClass.js"></script>
<title><?php if($changeTitle != "") echo $changeTitle; else echo $pTitle; ?>|<?php echo $rowtt["p_title"]?></title>
<!--[if IE 6]>
<script src="js/iepng.js" type="text/javascript"></script>
<script type="text/javascript">
   EvPNG.fix('div, ul, img, li, input');  //EvPNG.fix('包含透明PNG图片的标签'); 多个标签之间用英文逗号隔开。
</script>
<![endif]-->
</head>
<body>
<div id="c_outter">
    <div id="header"><?php include_once("inc/header.php") ?></div>
	<div id="c_content">
        <?php if(!$channelPicCanceled){ ?>
        <div class="c_channelpic" style="background:url(images/<?php echo $bgName ?>) no-repeat center center;height:334px;"></div>
        <?php } ?>
        <?php if(!$c_pathCanceled){ ?>
        <div class="c_path"><?php include_once("inc/c_path.php"); ?></div>
        <?php } ?>
        <div class="c_showContent">
            <?php
            if($c_navCanceled==1){
            ?>
            <div class="content_without_nav">
                <?php 
                    if(isset($_GET['a'])){
                        include_once("inc/$p/".$_GET['a'].".php");
                    }else{
                        include_once("inc/$p/index.php");
                    }
                ?>
            </div>
            <?php
            }else{
            ?>
            <div class="c_nav"><?php include_once("inc/c_nav.php") ?></div>
            <div class="content_with_nav">
                <?php 
                    if(isset($_GET['a'])){
                        include_once("inc/$p/".$_GET['a'].".php");
                    }else{
                        include_once("inc/$p/index.php");
                    }
                ?>
            </div>
            <?php	
            }
            ?>
        </div>
	</div>
    <div id="footer"><?php include_once("inc/footer.php"); ?></div>
</div>
<div id="pppp"></div>
<div id="ssss"></div>
<style type="text/css">
#pppp{position:fixed;top:30px;left:50%;width:1004px;margin-left:-507px;overflow:hidden;display:none;z-index:99999}
#ssss{position:fixed;top:0px;left:0px;width:100%;height:100%;background:#000;overflow:hidden;display:none;FILTER: alpha(opacity=80); opacity: 0.8; -moz-opacity: 0.8;z-index:99998}
</style>
</body>
</html>
