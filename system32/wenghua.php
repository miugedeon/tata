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
id : 'p_file1',
width : '100%',
height : '300px'
});
</script>

<script>
KE.show({
id : 'p_file2',
width : '100%',
height : '300px'
});
</script>

<script>
KE.show({
id : 'p_file3',
width : '100%',
height : '300px'
});
</script>

<?php
	if(isset($_GET["state"]))
	{
		$p_file1=$_POST["p_file1"];
		$p_file2=$_POST["p_file2"];
		$p_file3=$_POST["p_file3"];
		$language=$_POST["language"];
		
		$sql="update p_content set p_file1='".$p_file1."',p_file2='".$p_file2."',p_file3='".$p_file3."' where language='".$language."'";
		$d->Admin($_SESSION["admin"],"更新成功",$sql,"wenghua.php?language=".$language."");
	}
?>


<?php
	$language=$_GET["language"];
	$sql="select * from p_content where language='".$language."'";
	$query=$d->Query($sql);
	while($row=mysql_fetch_array($query))
	{
?>
<form name="form1" id="form1" action="?state=edit" method="post">
<input type="hidden" name="language" id="language" value="<?php echo $language?>">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="17" valign="top" background="images/mail_leftbg.gif"><img src="images/left-top-right.gif" width="17" height="29" /></td>
    <td valign="top" background="images/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2">
      <tr>
        <td height="31" style="text-align:right; font-size:12px; color:#666;">当前位置:　网站后台 &gt 企业文化 </td>
      </tr>
    </table></td>
    <td width="16" valign="top" background="images/mail_rightbg.gif"><img src="images/nav-right-bg.gif" width="16" height="29" /></td>
  </tr>
  <tr>
    <td valign="middle" background="images/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" bgcolor="#F7F8F9">
    	<table width="100%" cellpadding="0" cellspacing="1" border="0" class="alltable" style="margin-top:20px;">
        	<tr>
            	<td width="140" align="right">使命愿景核心价值观:</td>
                <td><textarea id="p_file1" name="p_file1"><?php echo $row["p_file1"]?></textarea></td>
            </tr>
            <tr>
            	<td align="right">企业发展战略:</td>
                <td><textarea id="p_file2" name="p_file2"><?php echo $row["p_file2"]?></textarea></td>
            </tr>
            <tr>
            	<td align="right">八大理念:</td>
                <td><textarea id="p_file3" name="p_file3"><?php echo $row["p_file3"]?></textarea></td>
            </tr>
            
            <tr>
            	<td colspan="2" align="center" style="height:60px;">
                	<input type="submit" name="send" id="send" value="更新" class="but_60">
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
<?php
	}
?>
</body>
