<?php
	include_once("../common/str.php");
	include_once("../common/conn.php");
	
	if(isset($_POST["p_username"]) || isset($_POST["p_userpwd"]))
	{
		$p_username=$_POST["p_username"];//�û���
		$p_userpwd=$_POST["p_userpwd"];//����
		$num=$d->login("p_admin",$p_username,$p_userpwd,"admin","admin.php");
	}
	else
	{
		alertUrl("�Ƿ�����","login.html");
	}
?>
<?php include_once("foot.php")?>


