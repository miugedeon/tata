<?php
	include_once("../../common/conn.php");
	include_once("../../common/str.php");
	$sql='';
if(!isset($_POST["Linkman"])) {
	$d->Admin("admin","错误页面",$sql,"../../index.html");
}
else{
	
	$p_TalentsName=$_POST["TalentsName"];
	$p_Linkman=$_POST["Linkman"];
	$p_Sex=$_POST["Sex"];
	$p_BirthDate=$_POST["BirthDate"];
	$p_Marriage=$_POST["Marriage"];
	$p_Stature=$_POST["Stature"];
	$p_RegResidence=$_POST["RegResidence"];
	$p_EduResume=$_POST["EduResume"];
	$p_JobResume=$_POST["JobResume"];
	$p_Address=$_POST["Address"];
	$p_Telephone=$_POST["Telephone"];
	$p_Email=$_POST["Email"];
	$p_AddTime=date("Y-m-d H:i:s");
		
	$sql1="insert into p_jobfrom";
	$sql2="(";
	$sql3="";
	$sql4=")";
	$sql5=" values";
	$sql6="(";
	$sql7="";
	$sql8=")";
	
	$sql3=$sql3."TalentsName";
	$sql7=$sql7."'".$p_TalentsName."'";
		
	$sql3=$sql3.",Linkman";
	$sql7=$sql7.",'".$p_Linkman."'";
	
	$sql3=$sql3.",Sex";
	$sql7=$sql7.",'".$p_Sex."'";
	
	$sql3=$sql3.",BirthDate";
	$sql7=$sql7.",'".$p_BirthDate."'";
	
	$sql3=$sql3.",Marriage";
	$sql7=$sql7.",'".$p_Marriage."'";
	
	$sql3=$sql3.",Stature";
	$sql7=$sql7.",'".$p_Stature."'";

	$sql3=$sql3.",RegResidence";
	$sql7=$sql7.",'".$p_RegResidence."'";

	$sql3=$sql3.",EduResume";
	$sql7=$sql7.",'".$p_EduResume."'";
	
	$sql3=$sql3.",JobResume";
	$sql7=$sql7.",'".$p_JobResume."'";

	$sql3=$sql3.",Address";
	$sql7=$sql7.",'".$p_Address."'";
	
	$sql3=$sql3.",Telephone";
	$sql7=$sql7.",'".$p_Telephone."'";
	
	$sql3=$sql3.",Email";
	$sql7=$sql7.",'".$p_Email."'";
	
	$sql3=$sql3.",AddTime";
	$sql7=$sql7.",'".$p_AddTime."'";
	
	$sql=$sql1.$sql2.$sql3.$sql4.$sql5.$sql6.$sql7.$sql8;
	//echo $sql;
	$d->Admin("admin","提交成功，管理员会尽快与您联系！",$sql,"../../index.html");
	$d->close();
	}
?>