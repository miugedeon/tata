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
<title>中国品牌网</title><body>
<?php
	if(isset($_GET["state"]))
	{
		$p_id=$_POST["p_id"];
		$p_hhcontent=$_POST["p_hhcontent"];
		$p_index=$_POST["p_index"];
		$p_hhdate=date("Y-m-d");
		$sql="update p_fck set p_hhcontent='".$p_hhcontent."',p_index=".$p_index.",p_hhdate='".$p_hhdate."' where p_id=".$p_id;
		$d->Query($sql);
		alertUrl("更新成功","fckManage.php");
	}
?>
<form name="form1" id="form1" action="?state=edit" method="post">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="17" valign="top" background="images/mail_leftbg.gif"><img src="images/left-top-right.gif" width="17" height="29" /></td>
    <td valign="top" background="images/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2">
      <tr>
        <td height="31" style="text-align:right; font-size:12px; color:#666;">当前位置:　网站后台 &gt 留言查看 </td>
      </tr>
    </table></td>
    <td width="16" valign="top" background="images/mail_rightbg.gif"><img src="images/nav-right-bg.gif" width="16" height="29" /></td>
  </tr>
  <tr>
    <td valign="middle" background="images/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" bgcolor="#F7F8F9">
    	<?php
        	$p_id=$_GET["p_id"];
			$sql="select * from p_fck where p_id=".$p_id;
			$query=$d->Query($sql);
			while($row=mysql_fetch_array($query))
			{
		?>
        <input type="hidden" name="p_id" id="p_id" value="<?php echo $row["p_id"]?>">
    	<table width="100%" cellpadding="0" cellspacing="1" border="0" class="alltable" style="margin-top:20px;">
        	<tr style="height:35px; line-height:35px;">
            	<td width="120" align="center">留言编号:</td>
                <td><?php echo $row["p_id"]?></td>
            </tr>
            <tr style="height:35px; line-height:35px;">
            	<td width="120" align="center">公司名称:</td>
                <td><?php echo $row["p_company"]?></td>
            </tr>
            <tr style="height:35px; line-height:35px;">
            	<td width="120" align="center">联系邮箱:</td>
                <td><?php echo $row["p_email"]?></td>
            </tr>
            <tr style="height:35px; line-height:35px;">
            	<td width="120" align="center">性别:</td>
                <td><?php echo $row["p_sex"]?></td>
            </tr>
            <tr style="height:35px; line-height:35px;">
            	<td width="120" align="center">联系地址:</td>
                <td><?php echo $row["p_address"]?></td>
            </tr>
            <tr style="height:35px; line-height:35px;">
            	<td width="120" align="center">联系电话:</td>
                <td><?php echo $row["p_tel"]?></td>
            </tr>
            <tr style="height:35px; line-height:35px;">
            	<td width="120" align="center">传真:</td>
                <td><?php echo $row["p_fax"]?></td>
            </tr>
            <tr style="height:35px; line-height:35px;">
            	<td width="120" align="center">留言内容:</td>
                <td><?php echo $row["p_content"]?></td>
            </tr>
            <tr style="height:35px; line-height:35px;display:none;">
            	<td width="120" align="center">回复信息:</td>
                <td>
                	<textarea name="p_hhcontent" rows="5" cols="50" id="p_hhcontent">
                    <?php echo $row["p_hhcontent"]?>
                    </textarea>
                </td>
            </tr>
            <tr style="height:35px; line-height:35px;display:none;">
            	<td width="120" align="center">前台显示:</td>
                <td>
                	<input type="radio" name="p_index" id="p_index" value="1" <?php if($row["p_index"]==1){?>checked="checked"<?php }?>>是
                    <input type="radio" name="p_index" id="p_index" value="0" <?php if($row["p_index"]==0){?>checked="checked"<?php }?>>否
                </td>
            </tr>
            <tr style="display:none;">
            	<td colspan="2" style="height:40px; padding-left:120px;">
                	<input type="submit" name="" id="" value="提交" class="but_60">
                </td>
            </tr>
        </table>
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
</form>
</body>
