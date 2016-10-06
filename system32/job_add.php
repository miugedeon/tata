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
<script charset="utf-8" src="../editor/kindeditor.js"></script>
<script>
KE.show({
id : 'p_content',
width : '100%',
height : '250px'
});
</script>
<script>
KE.show({
id : 'p_wrok',
width : '100%',
height : '250px'
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
		$p_file1=$_POST["p_file1"];
		$p_file2=$_POST["p_file2"];
		$p_file3=$_POST["p_file3"];
		$p_file4=$_POST["p_file4"];
		$p_file5=$_POST["p_file5"];
		$p_file6=$_POST["p_file6"];
		$p_content=$_POST["p_content"];
		$p_wrok=$_POST["p_wrok"];
		$language=$_POST["language"];
		$sql="";
		$sql1="insert into p_job";
		$sql2="(";
		$sql3="";
		$sql4=")";
		$sql5=" values";
		$sql6="(";
		$sql7="";
		$sql8=")";
		
		$sql3=$sql3."p_file1";
		$sql7=$sql7."'".$p_file1."'";
		
		$sql3=$sql3.",p_file2";
		$sql7=$sql7.",'".$p_file2."'";
		
		$sql3=$sql3.",p_file3";
		$sql7=$sql7.",'".$p_file3."'";
		
		$sql3=$sql3.",p_file4";
		$sql7=$sql7.",'".$p_file4."'";
		
		$sql3=$sql3.",p_file5";
		$sql7=$sql7.",'".$p_file5."'";
		
		$sql3=$sql3.",p_file6";
		$sql7=$sql7.",'".$p_file6."'";
		
		$sql3=$sql3.",p_content";
		$sql7=$sql7.",'".$p_content."'";
		
		$sql3=$sql3.",p_wrok";
		$sql7=$sql7.",'".$p_wrok."'";
		
		$sql3=$sql3.",language";
		$sql7=$sql7.",'".$language."'";
		
		$sql3=$sql3.",p_addDate";
		$sql7=$sql7.",'".date("Y-m-d")."'";
		
		$sql3=$sql3.",p_admin";
		$sql7=$sql7.",'".$_SESSION["admin"]."'";


		
		$sql=$sql1.$sql2.$sql3.$sql4.$sql5.$sql6.$sql7.$sql8;
		$d->Admin($_SESSION["admin"],"添加成功",$sql,"job_add.php?language=".$language."");
	}
?>
<form name="form1" id="form1" action="?state=add" method="post">
<input type="hidden" name="language" id="language" value="<?php echo $language?>">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="17" valign="top" background="images/mail_leftbg.gif"><img src="images/left-top-right.gif" width="17" height="29" /></td>
    <td valign="top" background="images/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2">
      <tr>
        <td height="31" style="text-align:right; font-size:12px; color:#666;">当前位置:　网站后台 &gt 人才信息发布 </td>
      </tr>
    </table></td>
    <td width="16" valign="top" background="images/mail_rightbg.gif"><img src="images/nav-right-bg.gif" width="16" height="29" /></td>
  </tr>
  <tr>
    <td valign="middle" background="images/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" bgcolor="#F7F8F9">
    	<table width="100%" cellpadding="0" cellspacing="1" border="0" class="alltable" style="margin-top:20px;">
        	
            <tr style="height:35px; line-height:35px;">
            	<td width="100" align="center">招聘职位:</td>
                <td width="89%" style="padding-left:10px;"><input type="text" name="p_file2" id="p_file2"></td>
            </tr>
            <tr style="height:35px; line-height:35px;">
            	<td colspan="2">
                	<table width="100%" cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td align="center" width="116" style="border-right:#BAD6EC 1px solid; height:35px; line-height:35px;">招聘人数:</td>
                            <td style="padding-left:10px;" style="border-right:#BAD6EC 1px solid; height:35px; line-height:35px;"><input type="text" name="p_file5" id="p_file5"></td>
                            <td align="center" style="border-right:#BAD6EC 1px solid; height:35px; line-height:35px;">学历要求:</td>
                            <td style="border-right:#BAD6EC 1px solid; height:35px; line-height:35px;" align="center">
                            	<select name="p_file3" id="p_file3">
                                	<option value="不限">--不限--</option>
                                    <option value="中专/技校">中专/技校</option>
                                    <option value="高等职院">高等职院</option>
                                    <option value="大专">大专</option>
                                    <option value="本科以上">本科以上</option>
                                </select>
                            </td>
                            <td align="center" style="border-right:#BAD6EC 1px solid; height:35px; line-height:35px;">薪资待遇:</td>
                            <td align="center"><input type="text" name="p_file4" id="p_file4"></td>
                            <td align="center" style="border-right:#BAD6EC 1px solid; height:35px; line-height:35px;">工作地点:</td>
                            <td align="center"><input type="text" name="p_file6" id="p_file6"></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr style="height:35px; line-height:35px;">
            	<td align="center">工作内容:</td>
                <td><textarea id="p_content" name="p_content"></textarea></td>
            </tr>
            <tr style="height:35px; line-height:35px;">
            	<td align="center">职位要求:</td>
                <td><textarea id="p_wrok" name="p_wrok"></textarea></td>
            </tr>
            <tr style="height:50px; line-height:50px;">
            	<td colspan="2" align="center">
                	<input type="submit" name="send" id="send" value="添加" class="but_60" onClick="return check();" />
                </td>
            </tr>
        </table>
   
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
		//招聘部门
		var _p_file1=form1.p_file1.value;
		if(_p_file1=="")
		{
			alert("请输入招聘部门");
			form1.p_file1.focus();
			return false;
		}
		 //招聘职位
		var _p_file2=form1.p_file2.value;
		if(_p_file2=="")
		{
			alert("请输入招聘职位");
			form1.p_file2.focus();
			return false;
		}
	}
</script>
</body>
