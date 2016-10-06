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
<script charset="utf-8" src="../editor/kindeditor.js"></script>
<script>
KE.show({
id : 'p_content',
width : '100%',
height : '380px'
});

KE.show({
id : 'p_content_en',
width : '100%',
height : '380px'
});
</script>
<?php


	if(isset($_GET["state"]))
	{
		$p_id=$_POST["p_id"];
		$p_content=addslashes($_POST["p_content"]);
		$p_content_en=addslashes($_POST["p_content_en"]);
		$sql="update p_type set p_content='".$p_content."',p_content_en='".$p_content_en."' where p_id=".$p_id;
		$d->Admin($_SESSION["admin"],"更新成功",$sql,"type_edit.php?p_id=".$p_id);
	}

	$row="";
	if(isset($_GET["p_id"]))
	{
		$p_id=$_GET["p_id"];
		$sql="select * from p_type where p_id=".$p_id;
		$row=$d->Row($sql);
	}
?>
<form name="form" id="form" action="?state=edit" method="post">
<input type="hidden" name="p_id" id="p_id" value="<?php echo $p_id?>">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="17" valign="top" background="images/mail_leftbg.gif"><img src="images/left-top-right.gif" width="17" height="29" /></td>
    <td valign="top" background="images/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2">
      <tr>
        <td height="31" style="text-align:right; font-size:12px; color:#666;">当前位置:　网站后台 &gt <?php echo $row["p_title"]?> </td>
      </tr>
    </table></td>
    <td width="16" valign="top" background="images/mail_rightbg.gif"><img src="images/nav-right-bg.gif" width="16" height="29" /></td>
  </tr>
  <tr>
    <td valign="middle" background="images/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" bgcolor="#F7F8F9">
    	<table width="100%" cellpadding="0" cellspacing="0" border="0" class="alltable" style="margin-top:20px;">
        	<tr>
            	<td style="height:20px;font-size:16px;">中文</td>
            </tr>
        	<tr>
            	<td><textarea id="p_content" name="p_content"><?php echo $row["p_content"]?></textarea></td>
            </tr>
			<!--
            <tr>
            	<td style="height:20px;font-size:16px;">英文</td>
            </tr>
            <tr>
            	<td><textarea id="p_content_en" name="p_content_en"><?php echo $row["p_content_en"]?></textarea></td>
            </tr>
			-->
            <tr>
            	<td style="height:20px;"></td>
            </tr>
            <tr>
            	<td align="center"><input type="submit" name="send" id="send" value="更新(U)" class="but_70"></td>
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
<?php include_once("foot.php")?>

