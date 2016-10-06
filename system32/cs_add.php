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
<style type="text/css">
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
</style>
<body>
<?php
	$language="";
	//&p_typelist=designer
	$p_typelist="";
	if(isset($_GET["language"]))
	{
		$language=$_GET["language"];
		$p_typelist=$_GET["p_typelist"];
	}
	if(isset($_GET["state"]))
	{
		$p_type=0+$_POST["p_type"];
		$p_sn=$_POST["p_sn"];
		
		$sql1="insert into p_cs";
		$sql2="(";
		$sql3="";
		$sql4=")";
		$sql5=" values";
		$sql6="(";
		$sql7="";
		$sql8=")";
		
		$sql3=$sql3."p_type";
		$sql7=$sql7."".$p_type."";
		
		if($p_type==0){
			$sql3=$sql3.",p_sq";
			$sql7=$sql7.",'".$p_sn."'";
		}elseif($p_type==1){
			$sql3=$sql3.",p_ww";
			$sql7=$sql7.",'".$p_sn."'";
		}
		
		$sql=$sql1.$sql2.$sql3.$sql4.$sql5.$sql6.$sql7.$sql8;
		$d->Admin($_SESSION["admin"],"添加成功",$sql,"cs_add.php?language=".$language);
	}
?>
<form name="form" id="form" action="?state=add" method="post" enctype="multipart/form-data">
<input type="hidden" name="language" id="language" value="<?php echo $language?>">
<input type="hidden" name="p_typelist" id="p_typelist" value="<?php echo $p_typelist?>">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="17" valign="top" background="images/mail_leftbg.gif"><img src="images/left-top-right.gif" width="17" height="29" /></td>
    <td valign="top" background="images/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2">
      <tr>
        <td height="31" style="text-align:right; font-size:12px; color:#666;">当前位置:　网站后台 &gt 案例添加(A) </td>
      </tr>
    </table></td>
    <td width="16" valign="top" background="images/mail_rightbg.gif"><img src="images/nav-right-bg.gif" width="16" height="29" /></td>
  </tr>
  <tr>
    <td valign="middle" background="images/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" bgcolor="#F7F8F9">
    	<table width="100%" cellpadding="0" cellspacing="1" border="0" class="alltable" style="margin-top:20px;">
        	<tr style="height:35px; line-height:35px;">
            	<td width="100" align="center" class="c_666">类别信息:</td>
                <td>
                	<select name="p_type" id="p_type">
                        <option value="0">授权编码</option>
                        <option value="1">店铺掌柜</option>
                    </select>
                </td>
            </tr>
            <tr style="height:35px; line-height:35px;">
            	<td align="center" class="c_666">编码:</td>
                <td><input type="text" name="p_sn" id="p_sn" style="width:638px;"></td>
            </tr>
            <tr style="height:50px; line-height:50px;">
            	<td colspan="2" align="center">
                	<input type="submit" name="send" id="send" value="添加(A)" class="but_60" onclick="return check();" />
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
<script>
function check(){
	var	val=document.getElementById('p_sn').value;
	if(val==''){window.alert('编码不能为空');return false;}
}
</script>
</body>
