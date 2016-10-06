<?php include_once("config.php")?>
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
<title>中国品牌网</title><body>
<?php
	$language=$_GET["language"];
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
    	<table width="100%" cellpadding="0" cellspacing="0" border="0" style="margin-top:20px;">
        	<?php include_once("inc/dowload/default.php")?>
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
<script language="javascript">
	
	function GoPage()
	{
		var goPage=form.goToPage.value;
		window.location.href="?page="+goPage+"&language=<?php echo $language?>";
	}
	
		//全选事件
	function CheckAll()
	{
		for(var i=0;i<form.elements.length;i++)
		{
			if (form.elements[i].name!='checkAll' && form.elements[i].name!='deleteAll' && form.elements[i].name!='p_key') {
				form.elements[i].checked =true;
			}
			else
			{
				form.elements[i].checked =false;
			}
		}
	}
	//反选事件
	function DeleteAll()
	{
		for(var i=0;i<form.elements.length;i++)
		{
			if (form.elements[i].name!='checkAll' && form.elements[i].name!='deleteAll') {
				form.elements[i].checked =false;
			}
		}
	}
	
	//判断有没有选择事件
	function sendAll()
	{
		var state="";
		for(var i=0;i<form.elements.length;i++)
		{
		
			if (form.elements[i].checked==true) {
				state=true;
				break;
			}
			else
			{
				
				state=false;
			}
				
		}
		if(state==true)
		{
			if(confirm("您确定要删除么?"))
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		else
		{
			alert("请选择信息！");
			return false;
		}
	}
</script>

</body>
