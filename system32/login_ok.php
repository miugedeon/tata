<?php
	include_once("../common/str.php");
	include_once("../common/conn.php");
	
	if(isset($_POST["p_username"]) || isset($_POST["p_userpwd"]))
	{
		$p_username=$_POST["p_username"];//用户名
		$p_userpwd=$_POST["p_userpwd"];//密码
		$num=$d->login("p_admin",$p_username,$p_userpwd,"admin","admin.php");
	}
	else
	{
		alertUrl("非法操作","login.html");
	}
?>
<?php include_once("foot.php")?>


