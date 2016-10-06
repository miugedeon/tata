<?php
 include_once("checkUser.php");
	include_once("../common/conn.php");
?>
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
<link type="text/css" rel="stylesheet" href="css/admin.css">
<title>中山公明网站后台管理系统 PHP5.0版</title><body>

<?php

	if(isset($_GET["state"]))
	{
		$state=$_GET["state"];
		switch($state)
		{
			case "add":
				$p_linkName=$_POST["p_linkName"];
				$p_linkUrl=$_POST["p_linkUrl"];
				$p_linkImg=$_FILES["p_linkImg"];

				include("../common/str.php");
				
					$sql="insert into p_link(p_linkName,p_linkUrl) values('".$p_linkName."','".$p_linkUrl."')";
					include_once("../common/conn.php");
					if($d->row($sql))
					{
						alertUrl("添加成功","linkMange.php");
					}
					else
					{
						alertUrl("操作失败","linkMange.php");
					}
					$d->close();


			break;
			case "update_ok":
				include("../common/str.php");
				$p_linkName=$_POST["p_linkName"];
				$p_linkUrl=$_POST["p_linkUrl"];
				$p_linkImg=$_FILES["p_linkImg"];
				$sql="update p_link set p_linkName='".$p_linkName."',p_linkUrl='".$p_linkUrl."'";
				if($p_linkImg["size"]==0)
				{
					$sql=$sql." where p_id=".$_POST["p_id"];
					$d->Query($sql);
					alertUrl("更新成功","linkMange.php");
					$d->close();
				}
				else
				{
					$array=$d->row("select * from p_link where p_id=".$_POST["p_id"]);
					$row=mysql_fetch_array($array);
					if(file_exists($row["p_linkImg"]))
					{
						unlink($row["p_linkImg"]);
					}
					
					include("../common/myfile.php");
					$fileName=date("Ymdhis").mt_rand(0,9);
					$f=new myfile($fileName,$p_linkImg,"../upload/Link/");
					if($f->type())
					{
						$f->upload();
						$sql=$sql.",p_linkImg='".$f->fileName()."' where p_id=".$_POST["p_id"];
						echo $sql;
						$d->row($sql);
						alertUrl("更新成功","linkMange.php");
						$d->close();
					}
					else
					{
						alertBack("图片格式不对");
					}	
				}
				
			break;
			
			default:
			break;
		}
	}
	else
	{
		$state="add";
	}
?>


<?php
	if($state=="add")
	{
?>
<form name="form1" id="form1" action="linkMange.php?state=add" method="post" enctype="multipart/form-data">
<?php
	}
	else
	{
		if($state="update")
		{
?>
<form name="form1" id="form1" action="linkMange.php?state=update_ok" method="post" enctype="multipart/form-data">
<?php
		}
	}
?>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="17" valign="top" background="images/mail_leftbg.gif"><img src="images/left-top-right.gif" width="17" height="29" /></td>
    <td valign="top" background="images/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2">
      <tr>
        <td height="31"><div class="titlebt">友情链接</div></td>
      </tr>
    </table></td>
    <td width="16" valign="top" background="images/mail_rightbg.gif"><img src="images/nav-right-bg.gif" width="16" height="29" /></td>
  </tr>
  <tr>
    <td valign="middle" background="images/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" bgcolor="#F7F8F9">
    	<table width="850" cellpadding="0" cellspacing="0" border="0">
        	<tr>
           	  <td align="center" style="width:450px; padding-top:20px;" valign="top">
                	<table width="400" cellpadding="0" cellspacing="0" border="0">
                    	<tr>
                        	<td>
                            	<table cellpadding="0" cellspacing="0" width="100%" style="background:#7F9DB9; height:28px;">
                                    <tr>
                                        <td style="padding-left:10px; color:#FFFFFF;"><strong>友情链接列表管理</strong></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                        	<td>
                            	<table cellpadding="0" cellspacing="1" border="0" width="100%" class="alltable">
                                	<tr style="height:28px;">
                                    	<td align="center" style="width:30px;"><strong style="color:#000000;">编号</strong></td>
                                        <td align="center" style="color:#666; width:80px;"><strong style="color:#000000;">名称</strong></td>
                                        <td align="center" style="color:#666;"><strong style="color:#000000;">地址(URL)</strong></td>
                                        <td align="center" style="color:#666; width:80px;"><strong style="color:#000000;">管理</strong></td>
                                    </tr>
                                    <?php
                                    	$sql="select * from p_link order by p_id desc";
										
										$array=$d->Query($sql);
										while($row=mysql_fetch_array($array))
										{
									?>
                                    <tr style="height:24px; line-height:24px;">
                                    	<td align="center" style="color:#666; width:30px;"><?php echo $row["p_id"]?></td>
                                        <td align="center" style="color:#666; width:80px;"><?php echo $row["p_linkName"]?></td>
                                        <td align="center" style="color:#666; font-family:Arial, Helvetica, sans-serif;"><?php echo $row["p_linkUrl"]?></td>
                                        <td align="center" style="color:#666; width:80px;"><a href="linkDelete.php?p_id=<?php echo $row["p_id"]?>&state=delete" onClick="return confirm('您确认删除吗？')">删除</a>|<a href="linkMange.php?p_id=<?php echo $row["p_id"]?>&state=update">更新</a></td>
                                    </tr>
                                    <?php
                                    	}
									?>
                                    
                                </table>
                            </td>
                        </tr>
                        <tr>
                        	<td style="height:30px;">&nbsp;</td>
                        </tr>
                    </table>
              </td>
                <td align="right" width="340" valign="top" style="padding-top:20px;">
                	<table cellpadding="0" cellspacing="0" width="100%" style="background:#7F9DB9; height:28px;">
                        <tr>
                            <td style="padding-left:10px; color:#FFFFFF;"><strong>友情链接添加</strong></td>
                        </tr>
                    </table>
               	  <table width="100%" cellpadding="0" cellspacing="1" border="0" class="alltable">

						<?php
                            if($state=="add")
                            {
                        ?>
                        <tr>
                        	<td height="30" align="center" style="color:#666;">名称:</td>
                            <td style="padding-left:8px;"><input type="text" name="p_linkName" id="p_linkName" style="width:220px;" /></td>
                        </tr>
                        <tr>
                        	<td height="30" align="center" style="color:#666;">网址:</td>
                            <td style="padding-left:8px;"><input type="text" name="p_linkUrl" id="p_linkUrl" style="width:220px;" /></td>
                        </tr>	
                        <tr>
                        	<td height="30" align="center" style="color:#666;">图片:</td>
                            <td style="padding-left:8px;"><input type="file" name="p_linkImg" id="p_linkImg" style="width:220px;" /></td>
                        </tr>
                        <tr>
                        	<td height="50" align="center" style="color:#666;">操作:</td>
                            <td style="padding-left:8px;"><input type="submit" name="send" id="send" value="添加" class="ba" onClick="return checkLink()" /></td>
                        </tr>	
                        <?php
                            }
                            else
                            { 
							if($state=="update")
							{ 	
							include_once("../common/conn.php");
							$p_id=$_GET["p_id"];
							$sql="select * from p_link where p_id=".$p_id;
							$array=$d->Query($sql);
								while($row=mysql_fetch_array($array))
								{
						?>
                        <input type="hidden" name="p_id" id="p_id" value="<?php echo $row["p_id"]?>">
                    	<tr>
                        	<td height="30" align="center" style="color:#666;">名称:</td>
                            <td style="padding-left:8px;"><input type="text" name="p_linkName" id="p_linkName" style="width:220px;" value="<?php echo $row["p_linkName"]?>" /></td>
                        </tr>
                        <tr>
                        	<td height="30" align="center" style="color:#666;">网址:</td>
                            <td style="padding-left:8px;"><input type="text" name="p_linkUrl" id="p_linkUrl" style="width:220px;" value="<?php echo $row["p_linkUrl"]?>" /></td>
                        </tr>	
                        <tr>
                        	<td height="30" align="center" style="color:#666;">图片:</td>
                            <td style="padding-left:8px;"><input type="file" name="p_linkImg" id="p_linkImg" style="width:220px;" /></td>
                        </tr>
                        <tr>
                        	<td height="50" align="center" style="color:#666;">操作:</td>
                            <td style="padding-left:8px;"><input type="submit" name="send" id="send" value="更新" class="ba" onClick="return checkLink2()" /></td>
                        </tr>	
                        <tr>
                        	<td colspan="2" style="color:#666;">
                            	<table cellpadding="0" cellspacing="0">
                                    <tr>
                                    	<td style="height:30px; color:#666; padding-left:48px;">系统提示您:图片为空,系统则不更新图片</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>	
                        <?php	
									}
                               } 
                            }
                        ?>
                        
                  </table>	
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

<script language="javascript">
	function checkLink()
	{
		var _p_linkName=form1.p_linkName.value;
		if(_p_linkName=="")
		{
			alert("请输入友情链接名称");
			form1.p_linkName.focus();
			return false;
		}
		var _p_linkUrl=form1.p_linkUrl.value;
		if(_p_linkUrl=="")
		{
			alert("请输入链接地址");
			form1.p_linkUrl.focus();
			return false;
		}

	}
	
	
	function checkLink2()
	{
		var _p_linkName=form1.p_linkName.value;
		if(_p_linkName=="")
		{
			alert("请输入友情链接名称");
			form1.p_linkName.focus();
			return false;
		}
		var _p_linkUrl=form1.p_linkUrl.value;
		if(_p_linkUrl=="")
		{
			alert("请输入链接地址");
			form1.p_linkUrl.focus();
			return false;
		}
		
	}
</script>

</body>
