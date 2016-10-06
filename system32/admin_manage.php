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
	$state="";
	if(isset($_GET["state"]))
	{
		$state=$_GET["state"];
	}
	else
	{
		$state="add";
	}
	
	
	if(isset($_GET["state"]))
	{
		switch($state)
		{
			case "add":
				$p_username=$_POST["p_username"];//用户名
				$p_userpwd=$_POST["p_userpwd"];//密码
				$p_lv=$_POST["p_lv"];//权限
				$date=date("Y-m-d h:i:s");//系统时间
				$sql="select * from p_admin where p_username='".$p_username."'";
				$num=$d->Execute($sql);
				if($num==1)
				{
					alertBack("用户存在");
				}
				else
				{
					$sql="insert into p_admin(p_username,p_userpwd,p_lv,p_adddate,p_lastdate) values('".$p_username."','".md5($p_userpwd)."','".$p_lv."','".$date."','".$date."')";
					$d->Admin($_SESSION["admin"],"添加成功",$sql,"admin_manage.php");
				}
					
			break;
			//更新第一步
			case "edit":
				$p_id=$_GET["p_id"];
			break;
			//更新第二步
			case "update":
				$p_id=$_POST["p_id"];
				$p_username=$_POST["p_username"];
				$p_lv=$_POST["p_lv"];
				$sql="update p_admin set p_username='".$p_username."',p_lv='".$p_lv."'";
				if(!empty($_POST["p_userpwd"]))
				{
					$sql=$sql.", p_userpwd='".md5($_POST["p_userpwd"])."'";
				}
				$sql=$sql." where p_id=".$p_id;
				$d->Admin($_SESSION["admin"],"更新成功",$sql,"admin_manage.php");
			break;
			case "delete":
				$sql="delete from p_admin where p_id=".$_GET["p_id"];
				$d->Admin($_SESSION["admin"],"删除成功",$sql,"admin_manage.php");
			break;
			default:
			break;
		}
	}
	
	
?>


<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="17" valign="top" background="images/mail_leftbg.gif"><img src="images/left-top-right.gif" width="17" height="29" /></td>
    <td valign="top" background="images/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2">
      <tr>
        <td height="31" style="text-align:right; font-size:12px; color:#666;">当前位置:　网站后台 &gt 用户管理 </td>
      </tr>
    </table></td>
    <td width="16" valign="top" background="images/mail_rightbg.gif"><img src="images/nav-right-bg.gif" width="16" height="29" /></td>
  </tr>
  <tr>
    <td valign="middle" background="images/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" bgcolor="#F7F8F9">
    	<?php
        	if($state=="add")
			{
				include_once("inc/admin/admin_add.php");
        	}
			else
			{
				include_once("inc/admin/admin_edit.php");
        	}
		?>
        
        <table width="100%" cellpadding="0" cellspacing="1" border="0" class="alltable">
        	<tr style="height:30px; line-height:30px; ">
            	<td width="5%" style="background:#F3F8F7; text-align:center;"><strong style=" color:#333">编号</strong></td>
                <td width="14%" style="background:#F3F8F7; text-align:center;"><strong style=" color:#333">用户名</strong></td>
                <td width="26%" style="background:#F3F8F7; text-align:center;"><strong style=" color:#333">密码</strong></td>
                <td width="15%" style="background:#F3F8F7; text-align:center;"><strong style=" color:#333">添加(A)时间</strong></td>
                <td width="15%" style="background:#F3F8F7; text-align:center;"><strong style=" color:#333">最后登录</strong></td>
                <td width="6%" style="background:#F3F8F7; text-align:center;"><strong style=" color:#333">登录次数</strong></td>
                <td width="10%" style="background:#F3F8F7; text-align:center;"><strong style=" color:#333">权限</strong></td>
                <td width="10%" style="background:#F3F8F7; text-align:center;"><strong style=" color:#333">管理</strong></td>
            </tr>
            
            <?php
            	$sql="select * from p_admin";
				$array=$d->Query($sql);
				while($row=mysql_fetch_array($array))
				{
			?>
            <tr style="height:25px; line-height:25px; ">
            	<td width="5%" style="background:#fff; text-align:center; font-family:Arial, Helvetica, sans-serif; color:#666;"><?php echo $row["p_id"]?></td>
                <td width="14%" style="background:#fff; text-align:center; font-family:Arial, Helvetica, sans-serif; color:#666;"><?php echo $row["p_username"]?></td>
                <td width="26%" style="background:#fff; text-align:center; font-family:Arial, Helvetica, sans-serif; color:#666;"><?php echo $row["p_userpwd"]?></td>
                <td width="15%" style="background:#fff; text-align:center; font-family:Arial, Helvetica, sans-serif; color:#666;"><?php echo $row["p_adddate"]?></td>
                <td width="15%" style="background:#fff; text-align:center; font-family:Arial, Helvetica, sans-serif; color:#666;"><?php echo $row["p_lastdate"]?></td>
                <td width="6%" style="background:#fff; text-align:center; font-family:Arial, Helvetica, sans-serif; color:#666;"><?php echo $row["p_hist"]?></td>
                <td width="10%" style="background:#fff; text-align:center; color:#666;">
                	<?php
                    	if($row["p_lv"]==1)
						{
							echo "系统管理员";
						}
						else
						{
							echo "普通用户";
						}
					?>
                </td>
                <td width="10%" style="background:#fff; text-align:center;"><a onClick="return confirm('您确认删除吗？')" href="admin_manage.php?p_id=<?php echo $row["p_id"]?>&state=delete">删除</a>|<a href="admin_manage.php?p_id=<?php echo $row["p_id"]?>&state=edit">更新</a></td>
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
<input type="hidden" name="action" id="action" value="<?php echo $state?>">
<script language="javascript" src="js/user_manage.js"></script>
<?php include_once("foot.php")?>
