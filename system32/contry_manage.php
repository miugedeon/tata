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
<title></title><body>
<?php
	$language="";
	if(isset($_GET["language"]))
	{
		$language=$_GET["language"];
	}
?>
<form name="form" id="form" action="indexPic_delete.php" method="post">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="17" valign="top" background="images/mail_leftbg.gif"><img src="images/left-top-right.gif" width="17" height="29" /></td>
    <td valign="top" background="images/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2">
      <tr>
        <td height="31" style="text-align:right; font-size:12px; color:#666;">��ǰλ��:����վ��̨ &gt ���Ź��� </td>
      </tr>
    </table></td>
    <td width="16" valign="top" background="images/mail_rightbg.gif"><img src="images/nav-right-bg.gif" width="16" height="29" /></td>
  </tr>
  <tr>
    <td valign="middle" background="images/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" bgcolor="#F7F8F9">
    	
        
        <table width="100%" cellpadding="0" cellspacing="1" border="0" style="margin-top:10px;" class="alltable">
        	<tr style="height:35px; line-height:35px;">
            	<td align="center" width="5%" style="background:#F3F8F7;"><strong style="color:#333;">ȫѡ</strong></td>
                <td align="center" width="5%" style="background:#F3F8F7;"><strong style="color:#333;">���</strong></td>
                <td align="center" width="15%" height="50" style="background:#F3F8F7;"><strong style="color:#333;">����ͼ</strong></td>
                <td align="center" width="10%" style="background:#F3F8F7;"><strong style="color:#333;">�������ƣ����ģ�</strong></td>
                <td align="center" width="10%" style="background:#F3F8F7;"><strong style="color:#333;">�������ƣ�Ӣ�ģ�</strong></td>
                
                <td align="center" style="background:#F3F8F7;"><strong style="color:#333;">���ӵ�ַ</strong></td>
                
                <td align="center" style="background:#F3F8F7;" width="8%"><strong style="color:#333;">����</strong></td>
            </tr>
            
			<?php include_once("inc/contry/contry_default.php")?>
            
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
	
	function GoPage()
	{
		var goPage=form.goToPage.value;
		window.location.href="contry_manage.php?page="+goPage+"&language=<?php echo $language?>";
	}
	
		//ȫѡ�¼�
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
	//��ѡ�¼�
	function DeleteAll()
	{
		for(var i=0;i<form.elements.length;i++)
		{
			if (form.elements[i].name!='checkAll' && form.elements[i].name!='deleteAll') {
				form.elements[i].checked =false;
			}
		}
	}
	
	//�ж���û��ѡ���¼�
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
			if(confirm("��ȷ��Ҫɾ��ô?"))
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
			alert("��ѡ��������Ϣ��");
			return false;
		}
	}
</script>