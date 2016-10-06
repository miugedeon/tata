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
<title>news</title>

<?php
if(isset($_GET['a'])){
	$p_from=$_POST['p_from'];
	$p_formPwd=$_POST['p_formPwd'];
	$p_smtp=$_POST['p_smtp'];
	$p_prot=$_POST['p_prot'];
	$p_to=$_POST['p_to'];
	
	$sql="update p_emil set p_from='".$p_from."',p_formPwd='".$p_from."',p_formPwd='".$p_formPwd."',p_smtp='".$p_smtp."',p_prot='".$p_prot."',p_to='".$p_to."' where p_id=1";
	$d->Admin($_SESSION["admin"],"设置成功",$sql,"epush.php");
}
?>


<body>
<form name="form" id="form" action="?a=edit" method="post" enctype="multipart/form-data">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="17" valign="top" background="images/mail_leftbg.gif"><img src="images/left-top-right.gif" width="17" height="29" /></td>
    <td valign="top" background="images/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2">
      <tr>
        <td height="31" style="text-align:right; font-size:12px; color:#666;">当前位置:　网站后台 &gt 邮件推送设置(A) </td>
      </tr>
    </table></td>
    <td width="16" valign="top" background="images/mail_rightbg.gif"><img src="images/nav-right-bg.gif" width="16" height="29" /></td>
  </tr>
  <tr>
    <td valign="middle" background="images/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" bgcolor="#F7F8F9">
    	<?php
		$sql="select * from p_emil limit 1";
		$query=$d->Query($sql);
		$row=mysql_fetch_array($query);
		?>
    	<div style="clear:both;margin-top:10px;"><div style="width:120px;margin-top:10px;text-align:right;float:left;">推送邮箱地址：</div><div style="float:left;"><input type="text" value="<?php echo $row['p_from']; ?>" name="p_from" id="p_from" style="width:300px;"><span style="color:red;">*设置发送邮箱</span></div></div>
        <div style="clear:both;margin-top:10px;"><div style="width:120px;margin-top:10px;text-align:right;float:left;">推送邮箱密码：</div><div style="float:left;"><input type="password" value="<?php echo $row['p_formPwd']; ?>" name="p_formPwd" id="p_formPwd" style="width:300px;"><span style="color:red;">*设置发送邮箱密码</span></div></div>
        <div style="clear:both;margin-top:10px;"><div style="width:120px;margin-top:10px;text-align:right;float:left;">发送服务器SMTP：</div><div style="float:left;"><input type="text" value="<?php echo $row['p_smtp']; ?>" name="p_smtp" id="p_smtp" style="width:300px;"><span style="color:red;">*邮件发送SMTP服务器</span></div></div>
        <div style="clear:both;margin-top:10px;"><div style="width:120px;margin-top:10px;text-align:right;float:left;">邮件发送端口：</div><div style="float:left;"><input type="text" value="<?php echo $row['p_prot']; ?>" name="p_prot" id="p_prot" style="width:300px;"><span style="color:red;">*邮件发送端口，默认25；一般不需更改</span></div></div>
        <div style="clear:both;margin-top:10px;"><div style="width:120px;margin-top:10px;text-align:right;float:left;">邮箱池：</div><div style="float:left;"><textarea name="p_to" cols="100" rows="10"><?php echo $row['p_to']; ?></textarea><span style="color:red;">*发送到指定的客户邮箱，多个邮箱请用英文字符的空格隔开</span></div></div>
        <div style="clear:both;margin-top:10px;"><div style="float:left;margin-left:50px;"><input type="submit" value="确认邮箱配置" name="submit" id="submit"></div></div>
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
