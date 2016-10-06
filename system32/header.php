<?php include_once("config.php")?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<META http-equiv=Content-Type content="text/html; charset=utf-8">
<LINK href="css/admin.css" type="text/css" rel="stylesheet">
<title></title></HEAD>
<BODY>
<TABLE cellSpacing=0 cellPadding=0 width="100%" 
background="images/header_bg.jpg" border=0>
  <TR height=56>
    <TD width=260><IMG height=56 src="images/header_left.jpg" 
    width=260></TD>
    <TD width="320" 
      align=middle style="FONT-WEIGHT: bold; COLOR: #fff; PADDING-TOP: 20px">当前用户：
    <?php 
		
		$sql="select * from p_admin where p_username='".$_SESSION["admin"]."'";
		
		$row=$d->Row($sql);
		
		$lv="";
		if($row["p_lv"]==1)
		{
			$lv="系统管理员";
		}
		else
		{
			$lv="普通用户";
		}
		echo $_SESSION["admin"];
	  ?> &nbsp;&nbsp;<?php echo $lv?> <A style="COLOR: #fff" 
      href="admin_manage.php" 
      target=main>用户管理</A> &nbsp;&nbsp; <A style="COLOR: #fff" 
      onclick="if (confirm('您确定要注销吗？')) return true; else return false;" 
      href="exit.php" target=_top>注销系统</A>    </TD>
  <td align=left style="FONT-WEIGHT: bold; COLOR: #fff; PADDING-TOP: 20px; padding-left:50px;">
  		<a href="admin.php?language=cn" style="COLOR: #fff;" target="_top">中文版</a> <a target="_top" href="admin.php?language=en" style="COLOR: #fff;">英文版</a>      </td>
    <td style="FONT-WEIGHT: bold; COLOR: #fff; PADDING-TOP: 20px">
      	<span id="www__net" style="color:#F18B11; font-family:Arial, Helvetica, sans-serif;">
				<script language="javascript" src="js/datetime.js"></script>
      </span>
    </td>
    
  <TD align=right width=268><IMG height=56 
      src="images/header_right.jpg" width=268></TD></TR></TABLE>
<TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
  <TR bgColor=#1c5db6 height=4>
    <TD></TD></TR></TABLE></BODY></HTML>
