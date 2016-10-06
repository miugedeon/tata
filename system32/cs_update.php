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
		$p_type=0+$_POST["p_type"];
		$p_sn=$_POST["p_sn"];
		
		if($p_type==0){
			$sql2=",p_sq='".$p_sn."'";
		}elseif($p_type==1){
			$sql2=",p_ww='".$p_sn."'";	
		}
		
		$sqlclear="update p_cs set p_sq='',p_ww='' where p_id=".$p_id;
		$query=$d->Query($sqlclear);
		$sql="update p_cs set p_type=".$p_type.$sql2;
		$sql=$sql." where p_id=".$p_id;
		$d->Admin($_SESSION["admin"],"更新成功",$sql,"cs_update.php?p_id=".$p_id."&language=".$language);
	}
	
	if(isset($_GET["p_id"]))
	{
		$p_id=$_GET["p_id"];
		$sql="select * from p_cs where p_id=".$p_id;
		$query=$d->Query($sql);
		$rowlist=mysql_fetch_array($query);
	}
?>
<form name="form" id="form" action="?state=add" method="post" enctype="multipart/form-data">
<input type="hidden" name="language" id="language" value="<?php echo $language?>">
<input type="hidden" name="p_id" id="p_id" value="<?php echo $p_id?>">
<input type="hidden" name="p_typeBerfore" id="p_typeBerfore" value="<?php echo $rowlist['p_type']; ?>">
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
                    	<option value="0" <?php if(!$rowlist['p_type']) echo "selected=selected" ?>>授权编码</option>
                        <option value="1" <?php if($rowlist['p_type']) echo "selected=selected" ?>>店铺掌柜</option>
                    </select>
                </td>
            </tr>
            <tr style="height:35px; line-height:35px;">
            	<td align="center" class="c_666">编码:</td>
                <td><input type="text" name="p_sn" id="p_sn" value="<?php echo $rowlist["p_sq"]?><?php echo $rowlist["p_ww"]?>" style="width:638px;"></td>
            </tr>
            
            <tr style="height:50px; line-height:50px;">
            	<td colspan="2" align="center">
                	<input type="submit" name="send" id="send" value="更新" class="but_60" onClick="return check()" />
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
<script language="javascript" src="js/case1.js"></script>
</body>
