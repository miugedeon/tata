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
	$language="";
	if(isset($_GET["language"]))
	{
		$language.=$_GET["language"];
	}
?>
<form name="form" id="form" action="product_delete.php" method="post">
<input type="hidden" name="language" id="language" value="<?php echo $language?>">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="17" valign="top" background="images/mail_leftbg.gif"><img src="images/left-top-right.gif" width="17" height="29" /></td>
    <td valign="top" background="images/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2">
      <tr>
        <td height="31" style="text-align:right; font-size:12px; color:#666;">当前位置:　网站后台 &gt 产品管理 </td>
      </tr>
    </table></td>
    <td width="16" valign="top" background="images/mail_rightbg.gif"><img src="images/nav-right-bg.gif" width="16" height="29" /></td>
  </tr>
  <tr>
    <td valign="middle" background="images/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" bgcolor="#F7F8F9">
    
		<table width="100%" cellpadding="0" cellspacing="0" border="0" style="margin-top:20px;">
        	<tr>
            	<td>
                	<table cellpadding="0" cellspacing="1" class="alltable">
                        <tr style="height:35px; line-height:35px;">
                            <td width="100" align="center" class="c_666" style="background:#F3F8F7;">一级目录:</td>
                            <td>
                                <table cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td style="border-right:#BAD6EC 1px solid; height:35px; line-height:35px; text-align:center; width:150px;">
                                        <select name="p_bigtype" id="p_bigtype" onChange="bigtype()">
                                            <option value="0">请选择一级目录</option>
                                            <?php
                                                $sql="select * from p_product_type where p_bigtype=0 and language='".$language."'";
                                                $array=$d->Query($sql);
                                                $select="";
                                                while($row=mysql_fetch_array($array))
                                                {
                                                    if(isset($_GET["p_bigtype"]))
                                                    {
                                                        $p_bigtype=$_GET["p_bigtype"];
                                                        if($p_bigtype==$row["p_id"])
                                                        {
                                                            $select="selected='selected'";
                                                        }
                                                        else
                                                        {
                                                            $select="";
                                                        }
                                                    }
                                            ?>
                                            <option value="<?php echo $row["p_id"]?>" <?php echo $select?>><?php echo $row["p_title"]?></option>
                                            <?php
                                                }
                                            ?>
                                        </select>
                                        </td>
                                        <td width="100" align="center" style="border-right:#BAD6EC 1px solid; background:#F3F8F7;" class="c_666">二级目录</td>
                                        <td width="150" align="center" style="border-right:#BAD6EC 1px solid;">
                                        	<?php
                                            	if(isset($_GET["p_smalltype"]))
												{
											?>
                                           <select name="p_smalltype" id="p_smalltype" onChange="smalltype()">
                                           		<option value="0">请选择二级目录</option>
                                                <?php
													$select="";
													$p_smalltype=$_GET["p_smalltype"];
													$p_bigtype=$_GET["p_bigtype"];
													$sql="select * from p_product_type where p_bigtype=".$p_bigtype."";
													$array=$d->Query($sql);
													while($row=mysql_fetch_array($array))
													{
														if($p_smalltype==$row["p_id"])
                                                        {
                                                            $select="selected='selected'";
                                                        }
                                                        else
                                                        {
                                                            $select="";
                                                        }
                                                ?>
                                                <option value="<?php echo $row["p_id"]?>" <?php echo $select?>><?php echo $row["p_title"]?></option>
                                                <?php
                                                	}
												?>
                                           </select>
                                           <?php
                                           		}
												else
												{
										   ?>
                                           <select name="p_smalltype" id="p_smalltype" onChange="smalltype()">
                                           		<option value="0">请选择二级目录</option>
                                                <?php
													$select="";
													$p_bigtype=$_GET["p_bigtype"];
													$sql="select * from p_product_type where p_bigtype=".$p_bigtype."";
													$array=$d->Query($sql);
													while(@$row=mysql_fetch_array($array))
													{
                                                ?>
                                                <option value="<?php echo $row["p_id"]?>"><?php echo $row["p_title"]?></option>
                                                <?php
                                                	}
												?>
                                           </select>
                                           <?php
                                           		}
										   ?>
                                        </td>
                                       
                                        <td width="70" align="center" style="border-right:#BAD6EC 1px solid; background:#F3F8F7;" class="c_666">关键字:</td>
                                        <td width="180" align="center" style="border-right:#BAD6EC 1px solid;">
                                        	<?php
                                            	if(isset($_GET["key"]))
												{
											?>
                                            <input type="text" name="p_key" id="p_key" value="<?php echo $_GET["key"]?>" />
                                            <?php
                                            	}
												else
												{
											?>
                                            <input type="text" name="p_key" id="p_key" onFocus="if(this.value=='请输入关键字'){this.value=''}" onBlur="if

(this.value==''){this.value='请输入关键字'}" value="请输入关键字">
                                            <?php
                                            	}
											?>
                                        </td>
                                        <td width="100" align="center" class="c_666"><input type="button" name="send" id="send" value="提交" class="but_60" onClick="searchBut()"></td>
                                       
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    
    
    	<table width="100%" cellpadding="0" cellspacing="1" border="0" class="alltable" style="margin-top:10px;" id="page">

        	<tr style="height:35px; line-height:35px;">
            	<td width="49" align="center" style="background:#F3F8F7;"><strong style="color:#333">全选</strong></td>
                <td width="50" align="center" style="background:#F3F8F7;"><strong style="color:#333">编号</strong></td>
                <td width="10%" align="center" style="background:#F3F8F7;"><strong style="color:#333">排序</strong></td>
                <td width="15%" align="center" style="background:#F3F8F7;"><strong style="color:#333">产品名称</strong></td>
                <td align="center" style="background:#F3F8F7;"><strong style="color:#333">产品类别</strong></td>
                <td width="5%" align="center" style="background:#F3F8F7;"><strong style="color:#333">新品</strong></td>
                <td width="5%" align="center" style="background:#F3F8F7;"><strong style="color:#333">会员</strong></td>
                <td width="8%" align="center" style="background:#F3F8F7;"><strong style="color:#333">更新时间</strong></td>
                <td width="5%" align="center" style="background:#F3F8F7;"><strong style="color:#333">统计</strong></td>
                <td width="8%" align="center" style="background:#F3F8F7;"><strong style="color:#333">操作员</strong></td>
                <td width="8%" align="center" style="background:#F3F8F7;"><strong style="color:#333">管理</strong></td>
            </tr>
            <?php
				$action="";
            	if(isset($_GET["action"]))
				{
					$action=$_GET["action"];
				}
				else
				{
					$action="default";
				}
				
				switch($action)
				{
					case "default":
						include_once("inc/product/product_default.php");
					break;
					case "bigtype":
						include_once("inc/product/product_bigtype.php");
					break;
					case "smalltype":
						include_once("inc/product/product_smalltype.php");
					break;
					case "p_key":
						include_once("inc/product/product_key.php");
					break;
					default:
					break;
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
	//大类别选择
	function bigtype()
	{
		var _p_bigtype=form.p_bigtype.value;
		if(_p_bigtype!=0)
		{
			window.location.href="product_manage.php?p_bigtype="+_p_bigtype+"&action=bigtype&language=<?php echo $language?>";
		}
		else
		{
			window.location.href="product_manage.php?language=<?php echo $language?>";
		}
	}
	function smalltype()
	{
		var _p_bigtype=form.p_bigtype.value;
		var _p_smalltype=form.p_smalltype.value;
		if(_p_smalltype!=0)
		{
			window.location.href="product_manage.php?p_bigtype="+_p_bigtype+"&action=smalltype&language=<?php echo $language?>&p_smalltype="+_p_smalltype+"";
		}
		else
		{
			window.location.href="product_manage.php?language=<?php echo $language?>";
		}
	}
	//关键字查询
	function searchBut()
	{
		var _p_key=form.p_key.value;
		if(_p_key=="请输入关键字")
		{
			alert("请输入关键字");
			form.p_key.focus();
			return false;
		}
		else
		{
			//product_manage.php?p_bigtype=3&action=bigtype&language=cn
			window.location.href="product_manage.php?language=<?php echo $language?>&action=p_key&key="+_p_key+"";
		}
	}
</script>

