<?php ini_set('max_execution_time','3600');?>
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
<script charset="utf-8" src="../editor/kindeditor.js"></script>

<link href="css/admin.css" rel="stylesheet" type="text/css">
<style type="text/css">
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
</style>
<body>
<?php

	
	$language="";
	$p_typelist="";
	if(isset($_GET["language"]))
	{
		$language=$_GET["language"];
		$p_typelist=$_GET["p_typelist"];
	}
	if(isset($_GET["state"]))
	{
			$p_id=$_POST["p_id"];
			$p_company=$_POST["company"];
			$p_Linkman=$_POST["Linkman"];
			$p_tel=$_POST["tel"];
			$p_Address=$_POST["Address"];
			$p_Email=$_POST["Email"];
			$p_Content=$_POST["Content"];
			if($_POST["ViewFlag"]=='')
				$p_viewflag=0;
			else
				$p_viewflag=1;
			

	
		$language=$_POST["language"];
		
		$sql="update p_join set company='".$p_company."',Linkman='".$p_Linkman."',tel='".$p_tel."',Address='".$p_Address."',Email='".$p_Email."',remark='".$p_Content."',ViewFlag='".$p_viewflag."'";
				
		include("../common/myfile.php");
		include("../common/smallpic.class.php");
		
		
		
		$sql=$sql." where id=".$p_id;
		//echo $sql;
		$d->Admin($_SESSION["admin"],"更新成功",$sql,"join_manage.php?");
	}
	
	if(isset($_GET["p_id"]))
	{
		$p_id=$_GET["p_id"];
		$sql="select * from p_join where id=".$p_id;
		$query=$d->Query($sql);
		$rowlist=mysql_fetch_array($query);
	}
?>
<form name="form" id="form" action="?state=add" method="post" enctype="multipart/form-data">
<input type="hidden" name="language" id="language" value="<?php echo $language?>">
<input type="hidden" name="p_id" id="p_id" value="<?php echo $rowlist["id"]?>">
<input type="hidden" name="p_typelist" id="p_typelist" value="<?php echo $p_typelist?>">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
   <tr>
    <td width="17" valign="top" background="images/mail_leftbg.gif"><img src="images/left-top-right.gif" width="17" height="29" /></td>
    <td valign="top" background="images/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2">
      <tr>
        <td height="31" style="text-align:right; font-size:12px; color:#666;">当前位置:　网站后台 &gt (A) </td>
      </tr>
    </table></td>
    <td width="16" valign="top" background="images/mail_rightbg.gif"><img src="images/nav-right-bg.gif" width="16" height="29" /></td>
  </tr>
  <tr>
    <td valign="middle" background="images/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" bgcolor="#F7F8F9">
				
				<table width="100%" height="355" border="0" cellpadding="0" cellspacing="0">
						<tr><td>
						&nbsp;是否通过审核：
						<input name="ViewFlag" type="checkbox" style='HEIGHT: 13px;WIDTH: 13px;' value="1" <?php if($rowlist["ViewFlag"]==1) echo "checked"; ?>>
						</td></tr>
						  <tr>
							<td width="21%" ><div align="right">物流公司名称：</div> 
							</td>
							<td width="79%" >
							<input name="company" type="text" class="input" id="company" size="40" maxlength="100" value="<?php echo $rowlist["company"]?>">&nbsp;<font color="#CC0000">*</font></td>
						  </tr>
						
						  
						  <tr>
							<td><div align="right">联系人：</div></td>
							<td><input name="Linkman" id="Linkman" type="text" class="input"  size="40" maxlength="100" value="<?php echo $rowlist["linkman"]?>" >&nbsp;<font color="#CC0000" ">*</font></td>
						  </tr>
						   <!--   
						   <tr>
							<td><div align="right">物流公司线路：</div></td>
							<td><input name="waylist" id="waylist" type="text" class="input" size="40" maxlength="100">&nbsp;<font color="#CC0000">*</font></td>
						  </tr>
						  -->
						  <tr>
							<td><div align="right">物流公司电话：</div></td>
							<td><input name="tel" id="tel" type="text" class="input" size="40" maxlength="100" value="<?php echo $rowlist["tel"]?>">&nbsp;<font color="#CC0000">*</font></td>
						  </tr>
						  <tr>
							<td><div align="right">物流公司地址：</div></td>
							<td><input name="Address" type="text" class="input"  size="40" maxlength="100" value="<?php echo $rowlist["address"]?>" >
									  &nbsp;</td>
						  </tr>
					 
					
						  <tr>
							<td><div align="right">物流公司email：</div></td>
							<td><input name="Email" type="text" class="input" id="Email"  size="40" maxlength="100" value="<?php echo $rowlist["email"]?>" > &nbsp;</td>
						  </tr>
							<tr>
							<td height="87"><div align="right">备&nbsp;注：</div></td>
							<td>
							<textarea name="Content" cols="50" rows="6" class="input"><?php echo $rowlist["remark"]?></textarea>&nbsp;</td>
						  </tr>
						  <tr>
							<td height="40"><div align="right"></div></td>
							<td>
							<input type="image" name="imageField" id="imageField" src="../images/save.jpg" />
							&nbsp;
							<input type="image" name="re" id="re"  src='../images/re.jpg' border='0' onClick="return resetBtn(this.form);"/>				</td>
						  </tr>
						
			 </table>
			 <SCRIPT language=JavaScript>   
				//验证电子邮件.

					
			  
			function isEmail(vEMail)     
			{     
				var regInvalid=/(@.*@)|(\.\.)|(@\.)|(\.@)|(^\.)/;     
				var regValid=/^.+\@(\[?)[a-zA-Z0-9\-\.]+\.([a-zA-Z]{2,3}|[0-9]{1,3})(\]?)$/;     
				return (!regInvalid.test(vEMail)&&regValid.test(vEMail));     
			}     
			function check()     
			{  

			  if (document.submitform.company.value == "")     
			  {     
				alert("物流公司不能为空.");     
				document.submitform.company.focus();     
				return (false);     
			  }    
				
			  if (document.submitform.Linkman.value == "")     
			  {     
				alert("联系人不能为空.");     
				document.submitform.Linkman.focus();     
				return (false);     
			  }     


			   if (document.submitform.tel.value == "")     
			  {     
				alert("电话不能为空.");     
				document.submitform.tel.focus();     
				return (false);     
			  }    
			  

			}     

			</SCRIPT> 

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
