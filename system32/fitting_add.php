<?php include_once("config.php")?>
<link href="images/skin.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" /><style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #EEF2FB;
}
-->
</style>
<title>中国品牌网</title><body>
<script charset="utf-8" src="../editor/kindeditor.js"></script>
<script>
KE.show({
id : 'p_content',
width : '100%',
height : '300px'
});
</script>
<?php
	$language="";
	if(isset($_GET["language"]))
	{
		$language.=$_GET["language"];
	}
	
	if(isset($_GET["state"]))
	{
		$language=$_POST["language"];//语言
		$p_productname=$_POST["p_productname"];;//产品名称
		$p_content=$_POST["p_content"];//产品说明
		$p_pic1_name="";//第一图片
		$p_pic2_name="";//第二图片
				
		$sql1="insert into p_fitting";
		$sql2="(";
		$sql4=")";
		$sql5=" values";
		$sql6="(";
		$sql8=")";
		
		$sql3=$sql3."p_productname";
		$sql7=$sql7."'".$p_productname."'";
		
		$sql3=$sql3.",p_content";
		$sql7=$sql7.",'".$p_content."'";
		
		include_once("inc/fitting/upload.php");
		$sql3=$sql3.",p_pic1";
		$sql7=$sql7.",'".$p_pic1_name."'";
		
		$sql3=$sql3.",p_pic2";
		$sql7=$sql7.",'".$p_pic2_name."'";
		
		$sql3=$sql3.",language";
		$sql7=$sql7.",'".$language."'";
		$sql=$sql1.$sql2.$sql3.$sql4.$sql5.$sql6.$sql7.$sql8;
		$d->Admin($_SESSION["admin"],"添加成功",$sql,"fitting_add.php?language=".$language."");
	}
?>
<form name="form" id="form" action="fitting_add.php?state=add&language=<?php echo $language; ?>" method="post" enctype="multipart/form-data">
<input type="hidden" name="language" id="language" value="<?php echo $language?>">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="17" valign="top" background="images/mail_leftbg.gif"><img src="images/left-top-right.gif" width="17" height="29" /></td>
    <td valign="top" background="images/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2">
      <tr>
        <td height="31" style="text-align:right; font-size:12px; color:#666;">当前位置:　网站后台 &gt 零配件添加(A) </td>
      </tr>
    </table></td>
    <td width="16" valign="top" background="images/mail_rightbg.gif"><img src="images/nav-right-bg.gif" width="16" height="29" /></td>
  </tr>
  <tr>
    <td valign="middle" background="images/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" bgcolor="#F7F8F9">
    	<table width="100%" cellpadding="0" cellspacing="1" border="0" class="alltable" style="margin-top:20px;">
        	
            <tr style="height:35px; line-height:35px;">
            	<td align="center" class="c_666" width="120">型号:</td>
                <td style="padding-left:19px;"><input type="text" name="p_productname" id="p_productname" style="width:638px;"></td>
            </tr>
            
            <tr style="height:35px; line-height:35px;">
            	<td align="center" class="c_666">配件说明:</td>
                <td style="padding-left:19px; padding-right:20px; padding-top:10px; padding-bottom:10px;"><textarea id="p_content" name="p_content"></textarea></td>
            </tr>
            <tr style="height:35px; line-height:35px;">
            	<td width="150" align="center" class="c_666">配件小图:<br /><span style="color:red;">（小图格式：335 * 545）</span></td>
              <td style="padding-left:19px;"><input type="file" name="p_pic1" id="p_pic1" style="width:400px;"></td>
            </tr>
            <tr style="height:35px; line-height:35px;">
            	<td align="center" class="c_666">配件大图:</td>
                <td style="padding-left:19px;"><input type="file" name="p_pic2" id="p_pic2" style="width:400px;"></td>
            </tr>
           
            <tr>
            	<td colspan="2" align="center">
                	<table cellpadding="0" cellspacing="0" height="80">
                    	<tr>
                        	<td><input type="submit" name="" id="" value="添加(A)" class="but_60"></td>
                            <td width="10"></td>
                            <td><input type="reset" name="" id="" value="重填(R)" class="but_60"></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </td>
    <td background="images/mail_rightbg.gif">&nbsp;</td>
  </tr>
  <tr>
    <td valign="bottom" background="images/mail_leftbg.gif"><img src="images/buttom_left2.gif" width="17" height="17" /></td>
    <td background="images/buttom_bgs.gif"><img src="images/buttom_bgs.gif" width="17" height="17"></td>
    <td valign="bottom" background="images/mail_rightbg.gif"><img src="images/buttom_right2.gif" width="16" height="17" /></td>
  </tr>
</table>
</form>
</body>
