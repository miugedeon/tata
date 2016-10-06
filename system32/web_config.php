<?php include_once("config.php")?>
<link href="images/skin.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><style type="text/css">
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
<?php
	if(isset($_GET["state"]))
	{
		$p_title=$_POST["p_title"];
		$p_keyword=$_POST["p_keyword"];
		$p_description=$_POST["p_description"];
		$p_copyright=$_POST["p_copyright"];
		$p_author=$_POST["p_author"];
		$p_idc=$_POST["p_idc"];
		$language=$_POST["language"];
		$sql="update p_title set p_title='".$p_title."',p_keyword='".$p_keyword."',p_description='".$p_description."',p_copyright='".$p_copyright."',p_author='".$p_author."',p_idc='".$p_idc."' where language='".$language."'";
		$d->Admin($_SESSION["admin"],"更新成功",$sql,"web_config.php?language=".$language."");
	}
?>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="17" valign="top" background="images/mail_leftbg.gif"><img src="images/left-top-right.gif" width="17" height="29" /></td>
    <td valign="top" background="images/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2">
      <tr>
        <td height="31" style="text-align:right; font-size:12px; color:#666;">当前位置:　网站后台 &gt 系统配置 </td>
      </tr>
    </table></td>
    <td width="16" valign="top" background="images/mail_rightbg.gif"><img src="images/nav-right-bg.gif" width="16" height="29" /></td>
  </tr>
  <tr>
    <td valign="middle" background="images/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" bgcolor="#F7F8F9">
    	<form name="form1" id="form1" action="web_config.php?state=edit" method="post">
        <?php
			$language=$_GET["language"];
        	$sql="select * from p_title where language='".$language."'";
			$row=$d->Row($sql);
		?>
        <input type="hidden" name="language" id="language" value="<?php echo $language?>">
    	<table width="70%" cellpadding="0" cellspacing="1" border="0" class="alltable" style="margin-top:20px;">
        	<tr style="height:35px; line-height:35px;">
            	<td width="150" align="right" style="color:#666666;">网站标题:</td>
                <td><input type="text" name="p_title" id="p_title" style="width:470px;" value="<?php echo $row["p_title"]?>" /></td>
            </tr>
            <tr style="height:35px; line-height:35px;">
            	<td align="right" style=" background:#F3F8F7; color:#666;">关键字:</td>
                <td style=" background:#F3F8F7; padding-top:8px; padding-bottom:8px;">
                	<textarea name="p_keyword" id="p_keyword" rows="5" cols="75"><?php echo $row["p_keyword"]?></textarea>
                </td>
            </tr>
            <tr style="height:35px; line-height:35px;">
            	<td align="right" style=" color:#666;">网站描述:</td>
                <td style="padding-top:8px; padding-bottom:8px;">
                <textarea name="p_description" id="p_description" rows="5" cols="75"><?php echo $row["p_description"]?></textarea>
                </td>
            </tr>
            <tr style="height:35px; line-height:35px;">
            	<td align="right" style=" background:#F3F8F7; color:#666; font-family:Arial, Helvetica, sans-serif;">CopyRight:</td>
                <td style=" background:#F3F8F7;"><input type="text" name="p_copyright" id="p_copyright" style="width:470px;" value="<?php echo $row["p_copyright"]?>" /></td>
            </tr>
            <tr style="height:35px; line-height:35px;">
            	<td align="right" style="color:#666; font-family:Arial, Helvetica, sans-serif;">Author:</td>
                <td><input type="text" name="p_author" id="p_author" style="width:470px;" value="<?php echo $row["p_author"]?>" /></td>
            </tr>
            <tr style="height:35px; line-height:35px;">
            	<td align="right" style="color:#666; font-family:Arial, Helvetica, sans-serif;">备案号码:</td>
                <td><input type="text" name="p_idc" id="p_idc" style="width:470px;" value="<?php echo $row["p_idc"]?>" /></td>
            </tr>
            <tr>
            	<td colspan="2" align="left" style="padding-left:150px; height:60px; line-height:60px;">
                	<input type="submit" name="send" id="send" value="更新" class="but_60">
                </td>
            </tr>
        </table>
        </form>
    </td>
    <td background="images/mail_rightbg.gif">&nbsp;</td>
  </tr>
  <tr>
    <td valign="bottom" background="images/mail_leftbg.gif"><img src="images/buttom_left2.gif" width="17" height="17" /></td>
    <td background="images/buttom_bgs.gif"><img src="images/buttom_bgs.gif" width="17" height="17"></td>
    <td valign="bottom" background="images/mail_rightbg.gif"><img src="images/buttom_right2.gif" width="16" height="17" /></td>
  </tr>
</table>
</body>
<?php include_once("foot.php")?>
