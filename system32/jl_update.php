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
		$p_id=$_POST["p_id"];
		$p_file1=$_POST["p_file1"];
		$p_file2=$_POST["p_file2"];
		$p_file3=$_POST["p_file3"];
		$p_file4=$_POST["p_file4"];
		$p_file5=$_POST["p_file5"];
		$p_file6=$_POST["p_file6"];
		$p_content=$_POST["p_content"];
		$p_wrok=$_POST["p_wrok"];
		$language=$_POST["language"];
		
		$sql="update p_job set p_file1='".$p_file1."',p_file2='".$p_file2."',p_file3='".$p_file3."',p_file4='".$p_file4."',p_file5='".$p_file5."',p_file6='".$p_file6."',p_content='".$p_content."',p_wrok='".$p_wrok."',p_addDate='".date("Y-m-d")."',p_admin='".$_SESSION["admin"]."' where p_id=".$p_id;
		$d->Admin($_SESSION["admin"],"更新成功",$sql,"job_update.php?p_id=".$p_id."");
	}
?>

<?php
	if(isset($_GET["p_id"]))
	{
	
	$p_id=$_GET["p_id"];
	$sql="select * from p_jobfrom where id=".$p_id;
	$query=$d->Query($sql);
	while($row=mysql_fetch_array($query))
	{
?>
<form name="form1" id="form1" action="?state=edit" method="post">
<input type="hidden" name="language" id="language" value="<?php echo $language?>">
<input type="hidden" name="p_id" id="p_id" value="<?php echo $row["p_id"]?>" />
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
		<table width="720" border="0" cellspacing="0" cellpadding="1">
			<form name="formWrite" method="post" action="inc/job/jobSave.php">
              <tr>
                <td width="184" align="right">认聘职位：</td>
                <td width="400">
					<?php echo $row["TalentsName"]?>
				</td>
              </tr>
              <tr>
                <td align="right">姓　　名：</td>
                <td><?php echo $row["Linkman"]?></td>
              </tr>
              <tr>
                <td align="right">性　　别：</td>
                <td><?php echo $row["Sex"]?> </tr>
              <tr>
                <td align="right">出生日期：</td>
                <td><?php echo $row["BirthDate"]?></td>
              </tr>
              <tr>
                <td align="right">婚姻状况：</td>
                <td><?php echo $row["Marriage"]?></td>
              </tr>
              <tr>
                <td align="right">身　　高：</td>
                <td><?php echo $row["Stature"]?></td>
              </tr>
              <tr>
                <td align="right">户口所在地：</td>
                <td><?php echo $row["RegResidence"]?></td>
              </tr>
              <tr>
                <td align="right">教育经历：</td>
                <td bgcolor="#fff"><table width="450" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="15%" align="center" bgcolor="#E1EAEE">学历</td>
                    <td width="23%" align="center" bgcolor="#E1EAEE">起止日期</td>
                    <td width="20%" align="center" bgcolor="#E1EAEE">专业名称</td>
                    <td width="20%" align="center" bgcolor="#E1EAEE">证书</td>
                    <td width="22%" align="center" bgcolor="#E1EAEE">就读学校</td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td align="right">&nbsp;</td>
                <td><textarea name="EduResume" rows="6" class="input" style="width:450px;"><?php echo $row["EduResume"]?></textarea></td>
              </tr>
              <tr>
                <td align="right">工作经历：</td>
                <td bgcolor="#fff"><table width="450" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="25%" align="center" bgcolor="#E1EAEE">起止日期</td>
                      <td width="25%" align="center" bgcolor="#E1EAEE">职位名称</td>
                      <td width="25%" align="center" bgcolor="#E1EAEE">工作内容</td>
                      <td width="25%" align="center" bgcolor="#E1EAEE">就职单位</td>
                      </tr>
                </table></td>
              </tr>
              <tr>
                <td align="right">&nbsp;</td>
                <td><textarea name="JobResume" rows="6" class="input" id="JobResume" style="width:450px;"><?php echo $row["JobResume"]?></textarea></td>
              </tr>
              <tr>
                <td align="right">地　　址：</td>
                <td><?php echo $row["Address"]?></td>
              </tr>

              <tr>
                <td align="right">电　　话：</td>
                <td><?php echo $row["Telephone"]?></td>
              </tr>

              <tr>
                <td align="right">电子邮箱：</td>
                <td><?php echo $row["Email"]?>
                </td>
              </tr>
              <tr>
                <td height="30" align="right">&nbsp;</td>
                <td valign="bottom">
					<a href="jl_manage.php" style="color:#f00;">返回</a>
				</td>
              </tr>
			</form>
            <script type="text/javascript">
            function resetBtn(fm){
		   　　 fm.reset();
			　　return false;
			}
			</script>
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
