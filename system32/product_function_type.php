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
	$p_typelist="";
	$language="";
	if(isset($_GET["p_typelist"]))
	{
		$p_typelist=$_GET["p_typelist"];
	}
	if(isset($_GET["language"]))
	{
		$language=$_GET["language"];
	}
	$state="";
	if(isset($_GET["state"]))
	{
		$state=$_GET["state"];
		switch($state)
		{
			case "add":
				$p_title=$_POST["p_title"];
				$language=$_POST["language"];
				
				$sql="select * from p_product_function where p_title='".$p_title."' and language='".$language."'";
				$query=$d->Query($sql);
				$rows=mysql_num_rows($query);
				if($rows==0)
				{
					$sql="insert into p_product_function(p_title,language) values('".$p_title."','".$language."')";
					$d->Admin($_SESSION["admin"],"添加成功",$sql,"product_function_type.php?language=".$language);
				}
				else
				{
					alertBack("活动已存在");
				}
			break;
			
			case "delete":
				$p_id=$_GET["p_id"];
				$language=$_GET["language"];
				$p_typelist=$_GET["p_typelist"];
				$sql="delete from p_list where p_id=".$p_id;
				$d->Admin($_SESSION["admin"],"删除成功",$sql,"list_type.php?language=".$language."&p_typelist=".$p_typelist."");
			break;
			
			case "edit":
				$p_id=$_POST["p_id"];
				$p_title=$_POST["p_title"];
				$language=$_POST["language"];
				$sql="update p_product_function set p_title='".$p_title."' where p_id=".$p_id;
				$d->Admin($_SESSION["admin"],"更新成功",$sql,"product_function_type.php?language=".$language);
			break;
		}
	}
	else
	{
		$state="add";
	}
?>

<form name="form" id="form" action="product_function_type.php?state=<?php if($state=="add"){?>add<?php }else{?>edit<?php }?>" method="post">
<input type="hidden" name="language" id="language" value="<?php echo $language?>" />
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="17" valign="top" background="images/mail_leftbg.gif"><img src="images/left-top-right.gif" width="17" height="29" /></td>
    <td valign="top" background="images/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2">
      <tr>
        <td height="31" style="text-align:right; font-size:12px; color:#666;">当前位置:　网站后台 &gt 活动管理 </td>
      </tr>
    </table></td>
    <td width="16" valign="top" background="images/mail_rightbg.gif"><img src="images/nav-right-bg.gif" width="16" height="29" /></td>
  </tr>
  <tr>
    <td valign="middle" background="images/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" bgcolor="#F7F8F9">
    	<table width="450" cellpadding="0" cellspacing="1" border="0" class="alltable" style="margin-top:20px;">
        	<?php
            	if($state=="update")
				{
				$p_id=$_GET["p_id"];
				$language=$_GET["language"];
				$sql="select * from p_product_function where p_id=".$p_id;
				$query=$d->Query($sql);
				while($row=mysql_fetch_array($query))
					{
			?>
        	<tr style="height:35px; line-height:35px;">
            	<input type="hidden" name="p_id" id="p_id" value="<?php echo $row["p_id"]?>">
                <input type="hidden" name="language" id="language" value="<?php echo $row["language"]?>">
            	<td width="100" align="center" style="color:#333;">活动名称:</td>
                <td align="center"><input type="text" name="p_title" id="p_title" style="width:200px;" value="<?php echo $row["p_title"]?>" /></td>
                <td align="center" rowspan="2"><input type="submit" name="send" id="send" value="更新" class="but_60" onClick="return check()" /></td>
            </tr>
            
            <?php
					}
            	}
				else
				{
			?>
            <tr style="height:35px; line-height:35px;">
            	<td width="100" align="center" style="color:#333;">类别名称:</td>
                <td align="center"><input type="text" name="p_title" id="p_title" style="width:200px;" /></td>
                <td align="center"><input type="submit" name="send" id="send" value="添加(A)" class="but_60" onClick="return check()" /></td>
            </tr>
            <?php
            	}
			?>
        </table>
        
        <table width="450" cellpadding="0" cellspacing="1" border="0" class="alltable" style="margin-top:15px;">
        	<tr style="height:35px; line-height:35px;">
            	<td align="center" width="100"><strong style="color:#333333;">编号</strong></td>
                <td align="center"><strong style="color:#333333;">活动名称</strong></td>
                <td align="center"><strong style="color:#333333;">管理</strong></td>
            </tr>
            <?php
            	$sql="select * from p_product_function where language='".$language."'";
				$query=$d->Query($sql);
				while($row=mysql_fetch_array($query))
				{
			?>
            <tr style="height:25px; line-height:25px;">
            	<td width="100" align="center" style="color:#333;"><?php echo $row["p_id"]?></td>
                <td align="center" style="color:#333;"><?php echo $row["p_title"]?></td>
                <td align="center" style="color:#333;"><a href="product_function_type.php?state=delete&p_id=<?php echo $row["p_id"]?>&language=<?php echo $language?>">删除</a>|<a href="product_function_type.php?state=update&p_id=<?php echo $row["p_id"]?>&language=<?php echo $language?>">更新</a></td>
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
</form>
</body>


<script language="javascript">
	function check()
	{
		var _p_title=form.p_title.value;
		if(_p_title=="")
		{
			alert("请输入类别名称");
			form.p_title.focus();
			return false;
		}
	}
</script>
