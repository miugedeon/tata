<?php set_time_limit(180);  ?>
<?php include_once("config.php")?>
<?php include_once("../common/socket/MailClass.php"); ?>
<?php include_once ("../common/socket/MailConfig.inc.php"); ?>
<?php
//发送email 
if( isset($_POST['sendmail']) ) { 
	$smtp = new Smtp($mailconfig); 
	$title = "『".$_POST['title']."(木林森期刊第".$_POST['num']."期)』"; 
//获取post的email正文
$filePath="../magazine/".$_POST['num'].".html"; 
echo $filePath;
$mailbody=@file_get_contents($filePath) or exit("请确定期刊是否正确，或重新生成");

//从email列表/文档中分离出所有的email地址 
	$pregstr = "@[a-zA-Z0-9\_][0-9a-zA-Z\.\-\_]+\@[0-aA-Za-z\-\_]+\.[0-9a-zA-Z\.\-\_]+@is";
	$temp = array(); 
	preg_match_all($pregstr,$to,$temp); 
	$toarray = $temp[0]; 
	//var_dump($toarray);
	$smtp->send($toarray,$title,$mailbody);
	die("操作完成！ <a href=# onclick=window.close()>关闭</a>"); 
} 
?>