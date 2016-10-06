<?php
	include_once("../../common/conn.php");
	include_once("../../common/str.php");
	$sql='';
if(!isset($_POST["company"])) {
	$d->Admin("admin","错误页面",$sql,"../../index.html");
}
else{
	
	$p_company=$_POST["company"];
	$p_Linkman=$_POST["Linkman"];
	$p_tel=$_POST["tel"];
	$p_Address=$_POST["Address"];
	$p_Email=$_POST["Email"];
	$p_Content=$_POST["Content"];

	$p_AddTime=date("Y-m-d H:i:s");
		
	$sql1="insert into p_join";
	$sql2="(";
	$sql3="";
	$sql4=")";
	$sql5=" values";
	$sql6="(";
	$sql7="";
	$sql8=")";
	
	$sql3=$sql3."company";
	$sql7=$sql7."'".$p_company."'";
		
	$sql3=$sql3.",Linkman";
	$sql7=$sql7.",'".$p_Linkman."'";
	
	$sql3=$sql3.",tel";
	$sql7=$sql7.",'".$p_tel."'";
	
	$sql3=$sql3.",Address";
	$sql7=$sql7.",'".$p_Address."'";
	
	$sql3=$sql3.",Email";
	$sql7=$sql7.",'".$p_Email."'";
	
	$sql3=$sql3.",remark";
	$sql7=$sql7.",'".$p_Content."'";
	
	
	$sql3=$sql3.",AddTime";
	$sql7=$sql7.",'".$p_AddTime."'";
	
	$sql=$sql1.$sql2.$sql3.$sql4.$sql5.$sql6.$sql7.$sql8;
	//echo $sql;
	$d->Admin("admin","提交成功，管理员会尽快进行审核！",$sql,"../../index.html");
	$d->close();
	}
?>