<?php include_once("config.php")?>

<link href="images/skin.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #EEF2FB;
}
.loading{
	display:none;
	width:100%;height:100%;background:#000;
	color:#fff;text-align:center;padding-top:20%;
	filter:alpha(opacity=70);-moz-opacity:0.7;-khtml-opacity: 0.7;opacity: 0.7;
	position:absolute;left:0;top:0;	
}
a{color:#fff;text-decoration:underline;}
-->
</style>
<script type="text/javascript" src="../js/jquery-1.7.2.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	var numObj=document.getElementById('num');
	var titleObj=document.getElementById('title');
	var numOld=numObj.value;

	$('#sendmail').click(function(){
		var num=numObj.value;
		//alert(num);
		if(num==''){window.alert('请输入要发送的期刊期数！');numObj.value=numOld;numObj.focus();return false;}
		var title=titleObj.value;
		if(title==''){window.alert('请输入邮件标题！');titleObj.focus();return false;}	
		//发送邮件
		$('#loading').css("display","block");
		$.post('epushing.php',{sendmail:1,num:num},
			function(result){
				$('.text').html(result);	
	}
	);
	});
});
</script>
<title>news</title>
<body>
<form name="form" id="form" action="?a=send" method="post" enctype="multipart/form-data">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="17" valign="top" background="images/mail_leftbg.gif"><img src="images/left-top-right.gif" width="17" height="29" /></td>
    <td valign="top" background="images/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2">
      <tr>
        <td height="31" style="text-align:right; font-size:12px; color:#666;">当前位置:　网站后台 &gt 邮件推送(A) </td>
      </tr>
    </table></td>
    <td width="16" valign="top" background="images/mail_rightbg.gif"><img src="images/nav-right-bg.gif" width="16" height="29" /></td>
  </tr>
  <tr>
    <td valign="middle" background="images/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" bgcolor="#F7F8F9">
    	<?php
		$sql="select p_num from p_qikan order by p_id desc limit 1";
		$query=$d->Query($sql);
		$row=mysql_fetch_array($query);
		$qnum=$row['p_num'];
		?>
    	<div style="clear:both;margin-top:10px;"><div style="width:120px;margin-top:10px;text-align:right;float:left;">发送第几期：</div><div style="float:left;"><input type="text" value="<?php echo $qnum; ?>" name="num" id="num" style="width:50px;"></div></div>
    	<div style="clear:both;margin-top:10px;"><div style="width:120px;margin-top:10px;text-align:right;float:left;">邮件标题：</div><div style="float:left;"><input type="text" value="" name="title" id="title" style="width:300px;"></div></div>
		<div style="clear:both;margin-top:10px;"><div style="width:120px;margin-top:10px;text-align:right;float:left;">确认发送：</div><div style="float:left;"><input type="button" value="发送" name="sendmail" id="sendmail"></div></div>
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
<div id="loading" class="loading"><span class="text">系统正在努力的发送邮件，由于发送时间比较长，请耐心等候...<img src="../images/loading.gif" width="35" height="35" style="vertical-align:middle;"></span></div>
</body>
