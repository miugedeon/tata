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
<script charset="utf-8" src="../editor/kindeditor.js"></script>
<script>
KE.show({
id : 'p_content',
width : '100%',
height : '300px'
});
</script>

<?php

	//��ʼ����
	if(isset($_GET["state"]))
	{
		$p_year=$_POST["p_year"];
		$p_title=$_POST["p_title"];
		$p_content=$_POST["p_content"];
		$language=$_POST["language"];
		$p_id=$_POST["p_id"];
		$sql="update p_licheng set p_year='".$p_year."',p_title='".$p_title."',p_content='".$p_content."',p_admin='".$_SESSION["admin"]."' where p_id=".$p_id;
		$d->AdminBack($_SESSION["admin"],"���³ɹ�",$sql);
	}

	$language="";
	$p_id="";
	if(isset($_GET["language"]))
	{
		$language=$_GET["language"];
		$p_id=$_GET["p_id"];
		$sql="select * from p_licheng where p_id=".$p_id;
		$query=$d->Query($sql);
		while($row=mysql_fetch_array($query))
		{
?>

<form name="form1" id="form1" action="?state=add" method="post">
<input type="hidden" name="language" id="language" value="<?php echo $language?>">
<input type="hidden" name="p_id" id="p_id" value="<?php echo $p_id?>">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="17" valign="top" background="images/mail_leftbg.gif"><img src="images/left-top-right.gif" width="17" height="29" /></td>
    <td valign="top" background="images/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2">
      <tr>
        <td height="31" style="text-align:right; font-size:12px; color:#666;">��ǰλ��:����վ��̨ &gt ��ҵ���� </td>
      </tr>
    </table></td>
    <td width="16" valign="top" background="images/mail_rightbg.gif"><img src="images/nav-right-bg.gif" width="16" height="29" /></td>
  </tr>
  <tr>
    <td valign="middle" background="images/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" bgcolor="#F7F8F9">
    	<table width="100%" cellpadding="0" cellspacing="1" border="0" class="alltable" style="margin-top:20px;">
        	<tr style="height:30px; line-height:30px;">
            	<td align="center" style="width:100px;">��չ���:</td>
                <td>
                	<select name="p_year" id="p_year">
                    	<option value="0">��ѡ�����</option>
                        <option value="1993" <?php if($row["p_year"]==1993){?> selected="selected"<?php } ?>>1993��</option>
                        <option value="1994" <?php if($row["p_year"]==1994){?> selected="selected"<?php } ?>>1994��</option>
                        <option value="1995" <?php if($row["p_year"]==1995){?> selected="selected"<?php } ?>>1995��</option>
                        <option value="1996" <?php if($row["p_year"]==1996){?> selected="selected"<?php } ?>>1996��</option>
                        <option value="1997" <?php if($row["p_year"]==1997){?> selected="selected"<?php } ?>>1997��</option>
                        <option value="1998" <?php if($row["p_year"]==1998){?> selected="selected"<?php } ?>>1998��</option>
                        <option value="1999" <?php if($row["p_year"]==1999){?> selected="selected"<?php } ?>>1999��</option>
                        <option value="2000" <?php if($row["p_year"]==2000){?> selected="selected"<?php } ?>>2000��</option>
                        <option value="2001" <?php if($row["p_year"]==2001){?> selected="selected"<?php } ?>>2001��</option>
                        <option value="2002" <?php if($row["p_year"]==2002){?> selected="selected"<?php } ?>>2002��</option>
                        <option value="2003" <?php if($row["p_year"]==2003){?> selected="selected"<?php } ?>>2003��</option>
                        <option value="2004" <?php if($row["p_year"]==2004){?> selected="selected"<?php } ?>>2004��</option>
                        <option value="2005" <?php if($row["p_year"]==2005){?> selected="selected"<?php } ?>>2005��</option>
                        <option value="2006" <?php if($row["p_year"]==2006){?> selected="selected"<?php } ?>>2006��</option>
                        <option value="2007" <?php if($row["p_year"]==2007){?> selected="selected"<?php } ?>>2007��</option>
                        <option value="2008" <?php if($row["p_year"]==2008){?> selected="selected"<?php } ?>>2008��</option>
                        <option value="2009" <?php if($row["p_year"]==2009){?> selected="selected"<?php } ?>>2009��</option>
                        <option value="2010" <?php if($row["p_year"]==2010){?> selected="selected"<?php } ?>>2010��</option>
                        <option value="2011" <?php if($row["p_year"]==2011){?> selected="selected"<?php } ?>>2011��</option>
                        <option value="2012" <?php if($row["p_year"]==2012){?> selected="selected"<?php } ?>>2012��</option>
                    </select>
                </td>
            </tr>
            <tr style="height:30px; line-height:30px;">
            	<td align="center">��չʱ��:</td>
                <td>
                	<input type="text" name="p_title" id="p_title" style=" width:300px;" value="<?php echo $row["p_title"]?>">
                </td>
            </tr>
            <tr>
            	<td align="center">��Ϣ����:</td>
                <td><textarea id="p_content" name="p_content"><?php echo $row["p_content"]?></textarea></td>
            </tr>
            <tr>
            	<td colspan="2" align="center" height="70">
                	<input type="submit" id="send" name="send" value="����" class="but_60" onClick="return check()">
                </td>
            </tr>
            <tr>
            	<td colspan="2" style="height:30px; padding-left:20px;"><a href="lichengManage.php?language=<?php echo $language?>">������Ϣ</a></td>
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
<?php
		}
	}
?>
<script language="javascript">
	function check()
	{
		var _p_year=form1.p_year.value;
		if(_p_year==0)
		{
			alert("��ѡ�����");
			form1.p_year.focus();
			return false;
		}
		var _p_title=form1.p_title.value;
		if(_p_title=="")
		{
			alert("�����뷢չʱ��");
			form1.p_title.focus();
			return false;
		}
	}
</script>
</body>
