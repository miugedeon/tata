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
		$language=$_GET["language"];
	}
	
	if(isset($_GET["state"]))
	{
		$language=$_POST["language"];
		$p_year=$_POST["p_year"];
		$p_title=$_POST["p_title"];
		$p_content=$_POST["p_content"];
		$sql="insert into p_licheng(p_year,p_title,p_content,p_admin,language) values('".$p_year."','".$p_title."','".$p_content."','".$_SESSION["admin"]."','".$language."')";
		$d->Admin($_SESSION["admin"],"添加成功",$sql,"licheng.php?language=".$language."");
	}
?>

<form name="form1" id="form1" action="?state=add" method="post">
<input type="hidden" name="language" id="language" value="<?php echo $language?>">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="17" valign="top" background="images/mail_leftbg.gif"><img src="images/left-top-right.gif" width="17" height="29" /></td>
    <td valign="top" background="images/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2">
      <tr>
        <td height="31" style="text-align:right; font-size:12px; color:#666;">当前位置:　网站后台 &gt 企业历程 </td>
      </tr>
    </table></td>
    <td width="16" valign="top" background="images/mail_rightbg.gif"><img src="images/nav-right-bg.gif" width="16" height="29" /></td>
  </tr>
  <tr>
    <td valign="middle" background="images/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" bgcolor="#F7F8F9">
    	<table width="100%" cellpadding="0" cellspacing="1" border="0" class="alltable" style="margin-top:20px;">
        	<tr style="height:30px; line-height:30px;">
            	<td align="center" style="width:100px;">发展年份:</td>
                <td>
                	<select name="p_year" id="p_year">
                    	<option value="0">请选择年份</option>
                        <option value="1993">1993年</option>
                        <option value="1994">1994年</option>
                        <option value="1995">1995年</option>
                        <option value="1996">1996年</option>
                        <option value="1997">1997年</option>
                        <option value="1998">1998年</option>
                        <option value="1999">1999年</option>
                        <option value="2000">2000年</option>
                        <option value="2001">2001年</option>
                        <option value="2002">2002年</option>
                        <option value="2003">2003年</option>
                        <option value="2004">2004年</option>
                        <option value="2005">2005年</option>
                        <option value="2006">2006年</option>
                        <option value="2007">2007年</option>
                        <option value="2008">2008年</option>
                        <option value="2009">2009年</option>
                        <option value="2010">2010年</option>
                        <option value="2011">2011年</option>
                        <option value="2012">2012年</option>
                    </select>
                </td>
            </tr>
            <tr style="height:30px; line-height:30px;">
            	<td align="center">发展时间:</td>
                <td>
                	<input type="text" name="p_title" id="p_title" style=" width:300px;">
                </td>
            </tr>
            <tr>
            	<td align="center">信息内容:</td>
                <td><textarea id="p_content" name="p_content"></textarea></td>
            </tr>
            <tr>
            	<td colspan="2" align="center" height="70">
                	<input type="submit" id="send" name="send" value="添加" class="but_60" onClick="return check()">
                </td>
            </tr>
            <tr>
            	<td colspan="2" style="height:30px; padding-left:20px;"><a href="lichengManage.php?language=<?php echo $language?>">管理信息</a></td>
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
<script language="javascript">
	function check()
	{
		var _p_year=form1.p_year.value;
		if(_p_year==0)
		{
			alert("请选择年份");
			form1.p_year.focus();
			return false;
		}
		var _p_title=form1.p_title.value;
		if(_p_title=="")
		{
			alert("请输入发展时间");
			form1.p_title.focus();
			return false;
		}
	}
</script>
</body>
