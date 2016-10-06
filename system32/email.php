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
<title>中国品牌网</title>
<link href="css/admin.css" rel="stylesheet" type="text/css">
<body>

<?php
	if(isset($_GET["state"]))
	{
		$p_from=$_POST["p_from"];
		$p_formPwd=$_POST["p_formPwd"];
		$p_to=$_POST["p_to"];
		$p_prot=$_POST["p_prot"];
		$p_smtp=$_POST["p_smtp"];
		$email2=$_POST["email2"];
		$sql="update p_emil set p_from='".$p_from."',p_formPwd='".$p_formPwd."',p_to='".$p_to."',p_prot='".$p_prot."',p_smtp='".$p_smtp."',email2='".$email2."' where p_id=1";
		$d->Admin($_SESSION["admin"],"更新成功",$sql,"email.php");
	}
?>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="17" valign="top" background="images/mail_leftbg.gif"><img src="images/left-top-right.gif" width="17" height="29" /></td>
    <td valign="top" background="images/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2">
      <tr>
        <td height="31" style="text-align:right; font-size:12px; color:#666;">当前位置:　网站后台 &gt 邮箱配置 </td>
      </tr>
    </table></td>
    <td width="16" valign="top" background="images/mail_rightbg.gif"><img src="images/nav-right-bg.gif" width="16" height="29" /></td>
  </tr>
  <tr>
    <td valign="middle" background="images/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" bgcolor="#F7F8F9">
    	<?php
        	$sql="select * from p_emil where p_id=1";
			$query=$d->Query($sql);
			while($row=mysql_fetch_array($query))
			{
		?>
        <form name="form1" id="form1" action="?state=edit" method="post">
    	<table width="100%" cellpadding="0" cellspacing="1" border="0" class="alltable" style="margin-top:20px;">
        	<tr style="height:35px; line-height:35px;">
            	<td width="10%" align="center">发送邮件:</td>
                <td width="30%" align="center"><input type="text" name="p_from" id="p_from" style="width:250px;" value="<?php echo $row["p_from"]?>" /></td>
                <td width="10%" align="center">邮件密码:</td>
                <td width="30%" align="center"><input type="password" name="p_formPwd" id="p_formPwd" style="width:250px;" value="<?php echo $row["p_formPwd"]?>" /></td>
                <td width="20%" align="center">注:发送邮件地址和密码必须填写</td>
            </tr>
            
            <tr style="height:35px; line-height:35px;">
            	<td width="10%" align="center">邮件端口:</td>
                <td width="15%" align="center"><input type="text" name="p_prot" id="p_prot" style="width:250px;" value="<?php echo $row["p_prot"]?>" /></td>
                <td width="10%" align="center">SMTP服务器:</td>
                <td width="15%" align="center"><input type="text" name="p_smtp" id="p_smtp" style="width:250px;" value="<?php echo $row["p_smtp"]?>" /></td>
                <td width="50%" align="center">接收来自网站的邮件,密码可不填写</td>
            </tr>
            
            
            <tr style="height:35px; line-height:35px;">
            	<td width="10%" align="center">接收邮件邮箱:</td>
                <td width="15%" align="left" colspan="4" style="padding-left:58px;"><input type="text" name="p_to" id="p_to" style="width:250px;" value="<?php echo $row["p_to"]?>" /></td>
            </tr>
            
            <tr>
            	<td colspan="5" style="height:50px; padding-left:28px;">
                	<input type="submit" name="" id="" value="更新" class="but_60" />
                </td>
            </tr>
        </table>
        </form>
        <?php
        	}
		?>
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
