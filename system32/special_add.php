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
<title>中国品牌网</title>
<script charset="utf-8" src="../editor/kindeditor.js"></script>
<script>
KE.show({
id : 'p_content1',
width : '100%',
height : '300px'
});
KE.show({
id : 'p_content2',
width : '100%',
height : '300px'
});
KE.show({
id : 'p_content3',
width : '100%',
height : '300px'
});
</script>
<body>
<?php
if(isset($_GET["state"]))
{
	$p_title=trim($_POST['p_title']);
	$p_newsId=trim($_POST['p_newsId']);
	$p_newsLink=addslashes(trim($_POST['p_newsLink']));
	$p_station1=addslashes(trim($_POST['p_station1']));
	$p_station2=addslashes(trim($_POST['p_station2']));
	$p_content1=addslashes($_POST['p_content1']);
	$p_content2=addslashes($_POST['p_content2']);
	$p_content3=addslashes($_POST['p_content3']);
	if(substr($p_newsLink,0,7)!='http://' || $p_newsLink=='http://') $p_newsLink='';
	$sql="insert into p_special (p_title,p_newsId,p_newsLink,p_station_1,p_station_2,p_content1,p_content2,p_content3) values ('".$p_title."',".$p_newsId.",'".$p_newsLink."','".$p_station1."','".$p_station2."','".$p_content1."','".$p_content2."','".$p_content3."')";
	//echo $sql;
	$d->Admin($_SESSION["admin"],"添加成功",$sql,"special_manage.php");
}
?>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="17" valign="top" background="images/mail_leftbg.gif"><img src="images/left-top-right.gif" width="17" height="29" /></td>
    <td valign="top" background="images/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2">
      <tr>
        <td height="31" style="text-align:right; font-size:12px; color:#666;">当前位置:　网站后台 &gt 专题页面添加 </td>
      </tr>
    </table></td>
    <td width="16" valign="top" background="images/mail_rightbg.gif"><img src="images/nav-right-bg.gif" width="16" height="29" /></td>
  </tr>
  <tr>
    <td valign="middle" background="images/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" bgcolor="#F7F8F9">
    	<form name="form1" id="form1" action="?state=add" method="post">
    	<table width="100%" cellpadding="0" cellspacing="1" border="0" class="alltable" style="margin-top:20px;">
        	<tr style="height:35px; line-height:35px;">
            	<td width="150" align="right" style=" background:#F3F8F7; color:#666;">专题活动名称：</td>
                <td><input type="text" name="p_title" id="p_title" style="width:470px;"/></td>
            </tr>
            <tr style="height:35px; line-height:35px;">
            	<td width="150" align="right" style=" background:#F3F8F7; color:#666;">活动新闻ID：</td>
                <td><input type="text" name="p_newsId" id="p_newsId" style="width:50px;" onKeyUp="(this.v=function(){this.value=this.value.replace(/[^0-9-]+/,'');}).call(this)" maxlength="5" />--------新闻链接:<input type="text" name="p_newsLink" id="p_newsLink" style="width:420px;color:#ccc;" value="http://" /><span style="color:red;">&nbsp;*1、ID即新闻编号； 2、新闻链接不改动则为站内链接；</span></td>
            </tr>
            <tr style="height:35px; line-height:35px;">
            	<td width="150" align="right" style=" background:#F3F8F7; color:#666;">本次活动地点：</td>
                <td><input type="text" name="p_station1" id="p_station1" style="width:470px;"/></td>
            </tr>
            <tr style="height:35px; line-height:35px;">
            	<td width="150" align="right" style=" background:#F3F8F7; color:#666;">下次活动地点预告：</td>
                <td><input type="text" name="p_station2" id="p_station2" style="width:470px;"/></td>
            </tr>
            <tr style="height:35px; line-height:35px;">
            	<td width="150" align="right" style=" background:#F3F8F7; color:#666;">启动仪式内容：<br><span style="color:red;">&nbsp;*图片规格为：945px * 445px</span></td>
                <td><textarea name="p_content1" id="p_content1" rows="5" cols="75"></textarea></td>
            </tr>
            <tr style="height:35px; line-height:35px;">
            	<td width="150" align="right" style=" background:#F3F8F7; color:#666;">启程内容：</td>
                <td><textarea name="p_content2" id="p_content2" rows="5" cols="75"></textarea></td>
            </tr>
            <tr style="height:35px; line-height:35px;">
            	<td width="150" align="right" style=" background:#F3F8F7; color:#666;">活动花絮：</td>
                <td><textarea name="p_content3" id="p_content3" rows="5" cols="75"></textarea></td>
            </tr>
            <tr>
            	<td colspan="2" align="left" style="padding-left:150px; height:60px; line-height:60px;">
                	<input type="submit" name="send" id="send" value="添加" class="but_60" onClick="return checkform();">
                </td>
            </tr>
        </table>
        </form>
    </td>
    <td background="images/mail_rightbg.gif">&nbsp;</td>
  </tr>
  <tr>
    <td valign="bottom" background="images/mail_leftbg.gif"><img src="images/buttom_left2.gif" width="17" height="17" /></td>
    <td background="images/buttom_bgs.gif"><img src="images/buttom_bgs.gif" width="17" height="17"></td>
    <td valign="bottom" background="images/mail_rightbg.gif"><img src="images/buttom_right2.gif" width="16" height="17" /></td>
  </tr>
</table>
<script type="text/javascript">
function trim(str) { 
	return str.replace(/(^\s*)|(\s*$)/g, ""); 
} 
function checkform(){
	var chkval=document.getElementById('p_title');
	if(trim(chkval.value)==""){alert("活动标题不能为空，请填写.");chkval.focus();return false;} 
	var chkval=document.getElementById('p_newsID');
	if(trim(chkval.value)==""){alert("活动新闻ID不能为空，请填写.");chkval.focus();return false;}
	var chkval=document.getElementById('p_station1');
	if(trim(chkval.value)==""){alert("本次活动地点为空，请填写.");chkval.focus();return false;}
}
</script>
</body>
<?php include_once("foot.php")?>
