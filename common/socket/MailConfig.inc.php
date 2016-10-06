<?php 
$sql="select * from p_emil limit 1";
$query=$d->Query($sql);
$row=mysql_fetch_array($query);
$host=$row['p_smtp'];
$port=$row['p_prot'];
$trueemail=$from=$row['p_from'];
$trueemailArr=explode('@',$trueemail);
$username=$trueemailArr[0];
$password=$row['p_formPwd'];
$to=$row['p_to'];

$mailconfig['host'] = $host; //主机 
$mailconfig['port'] = $port; //端口 一般为25 
$mailconfig['trueemail'] = $trueemail; //真实的地址 
$mailconfig['username'] = $username; //SMTP认证的邮箱帐号
$mailconfig['password'] = $password; //改成自己的邮箱密码 
$mailconfig['debug'] = false; //是否显示和服务器会话信息？ 
$mailconfig['from'] = $from; //显示给用户的发件人
?>
