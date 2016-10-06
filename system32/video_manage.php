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
	$language='cn';
?>
<form name="form" id="form" action="video_delete.php" method="post">
<input type="hidden" name="language" id="language" value="<?php echo $language?>">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="17" valign="top" background="images/mail_leftbg.gif"><img src="images/left-top-right.gif" width="17" height="29" /></td>
    <td valign="top" background="images/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2">
      <tr>
        <td height="31" style="text-align:right; font-size:12px; color:#666;">当前位置:　网站后台 &gt 零件图管理 </td>
      </tr>
    </table></td>
    <td width="16" valign="top" background="images/mail_rightbg.gif"><img src="images/nav-right-bg.gif" width="16" height="29" /></td>
  </tr>
  <tr>
    <td valign="middle" background="images/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" bgcolor="#F7F8F9">
    	<table width="100%" cellpadding="0" cellspacing="1" border="0" class="alltable" style="margin-top:10px;" id="page">

        	<tr style="height:35px; line-height:35px;">
            	<td width="49" align="center" style="background:#F3F8F7;"><strong style="color:#333">全选</strong></td>
                <td width="50" align="center" style="background:#F3F8F7;"><strong style="color:#333">编号</strong></td>
                <td width="32%" align="center" style="background:#F3F8F7;"><strong style="color:#333">视频名称</strong></td>
                <td width="32%" align="center" style="background:#F3F8F7;"><strong style="color:#333">视频名称（英文）</strong></td>
                <td width="50" align="center" style="background:#F3F8F7;"><strong style="color:#333">排序</strong></td>
                <td align="center" style="background:#F3F8F7;"><strong style="color:#333">管理</strong></td>
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
						include_once("inc/video/video_default.php");
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

