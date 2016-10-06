<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<?php 
include_once ("MailConfig.inc.php");

//发送email 
if( isset($_POST['sendmail']) ) { 
if( isset($_POST['from']) ) $mailconfig['from'] = $_POST['from']; 
$smtp = new Smtp($mailconfig); 
$title = $_POST['title']; 
//获取post的email正文 
if( get_magic_quotes_gpc() ) $message = $_POST['message']; 
else $message = addslashes($_POST['message']);

//从email列表/文档中分离出所有的email地址 
$pregstr = "@[a-zA-Z0-9\_][0-9a-zA-Z\.\-\_]+\@[0-aA-Za-z\-\_]+\.[0-9a-zA-Z\.\-\_]+@is";
$temp = array(); 
preg_match_all($pregstr,$_POST['emails'],$temp); 
$toarray = $temp[0]; 
//var_dump($toarray);

$smtp->send($toarray,$title,$message);

die("操作完成！<A href=".$_SERVER['PHP_SELF']."?s=".md5(date('Y-m-d-H',time())).">继续发送其他</a> <a href=# onclick=window.close()>关闭</a>"); 
} 
else { 
if( isset($_POST['emails']) ) { 
if( is_array($_POST['emails']) ) 
$emails = implode("\t",$_POST['emails']); 
else 
$emails = $_POST['emails']; 
} 
else $emails = ""; 
?>

<body>
<form id="form1" name="form1" method="post" action=""> 
<table width="600" border="1" align="center" cellpadding="3" cellspacing="0" bordercolordark="#FFFFFF" bordercolorlight="#eeeeee"> 
<tr> 
<td width="66">发件人：</td> 
<td width="516"><input name="from" type="text" value="<?php echo $mailconfig['from']; ?>"> 可以直接修改mailconfig文件中的email</td> 
</tr> 
<tr> 
<td>邮件标题：</td> 
<td><input name="title" type="text" value="邮件群发测试标题！" size="60"></td> 
</tr> 
<tr> 
<td>收件人：<br></td> 
<td><textarea name="emails" cols="60" rows="5"><?php echo $emails; ?></textarea></td> 
</tr> 
<tr> 
<td>邮件正文：<br> 
【html】</td> 
<td><textarea name="message" cols="60" rows="10"><img src="http://mu.pp86.net/images/newstop.jpg" /></textarea></td> 
</tr> 
<tr> 
<td> </td> 
<td><input type="submit" name="sendmail" value=" 发送邮件 "> </td> 
</tr> 
</table> 
</form> 
<?php
} 
?> 
</body> 
</html>
