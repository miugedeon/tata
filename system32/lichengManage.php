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
<title>�й�Ʒ����</title><body>
<?php
	$language="";
	if(isset($_GET["language"]))
	{
		$language=$_GET["language"];
	}
?>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="17" valign="top" background="images/mail_leftbg.gif"><img src="images/left-top-right.gif" width="17" height="29" /></td>
    <td valign="top" background="images/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2">
      <tr>
        <td height="31" style="text-align:right; font-size:12px; color:#666;">��ǰλ��:����վ��̨ &gt �û����� </td>
      </tr>
    </table></td>
    <td width="16" valign="top" background="images/mail_rightbg.gif"><img src="images/nav-right-bg.gif" width="16" height="29" /></td>
  </tr>
  <tr>
    <td valign="middle" background="images/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" bgcolor="#F7F8F9">
    	<table width="100%" cellpadding="0" cellspacing="1" border="0" class="alltable" style="margin-top:20px;">
        	<tr style="height:35px; line-height:35px;">
            	<td align="center" width="8%">���</td>
                <td align="center" width="15%">���</td>
                <td align="center">��Ϣ����</td>
                <td align="center">����Ա</td>
                <td align="center">����</td>
            </tr>
            <?php
            	$sql="select * from p_licheng where language='".$language."'";
				$query=$d->Query($sql);
				while($row=mysql_fetch_array($query))
				{
			?>
            <tr style="height:25px; line-height:25px;">
            	<td align="center" width="8%"><?php echo $row["p_id"]?></td>
                <td align="center" width="15%"><?php echo $row["p_year"]?></td>
                <td align="center"><?php echo $row["p_title"]?></td>
                <td align="center"><?php echo $row["p_admin"]?></td>
                <td align="center"><a onClick="return confirm('��ȷ��ɾ����')" href="lichengDelete.php?p_id=<?php echo $row["p_id"]?>&language=<?php echo $language?>">ɾ��</a>|<a href="lichengUpdate.php?p_id=<?php echo $row["p_id"]?>&language=<?php echo $language?>">����</a></td>
            </tr>
            <?php
            	}
			?>
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
</body>
