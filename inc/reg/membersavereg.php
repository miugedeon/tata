<?php	include_once("../../common/conn.php");	include_once("../../common/str.php");	$sql='';if(!isset($_POST["MemName"])) {	$d->Admin("admin","错误页面",$sql,"../../index.html");}else{		$p_GroupName=$_POST["sort"];	$p_MemName=$_POST["MemName"];	$p_RealName=$_POST["RealName"];	$p_Sex=$_POST["Sex"];	$p_password=$_POST["Password"];	$p_Company=$_POST["Company"];	$p_Address=$_POST["Address"];	$p_ZipCode=$_POST["ZipCode"];	$p_Telephone=$_POST["Telephone"];	$p_Fax=$_POST["Fax"];	$p_Email=$_POST["Email"];	$p_HomePage=$_POST["HomePage"];	$p_yy=$_POST["yy"];	$p_AddTime=date("Y-m-d H:i:s");			$sql1="insert into p_members";	$sql2="(";	$sql3="";	$sql4=")";	$sql5=" values";	$sql6="(";	$sql7="";	$sql8=")";		$sql3=$sql3."GroupName";	$sql7=$sql7."'".$p_GroupName."'";			$sql3=$sql3.",MemName";	$sql7=$sql7.",'".$p_MemName."'";		$sql3=$sql3.",RealName";	$sql7=$sql7.",'".$p_RealName."'";		$sql3=$sql3.",Sex";	$sql7=$sql7.",'".$p_Sex."'";		$sql3=$sql3.",password";	$sql7=$sql7.",'".$p_password."'";		$sql3=$sql3.",Company";	$sql7=$sql7.",'".$p_Company."'";		$sql3=$sql3.",Address";	$sql7=$sql7.",'".$p_Address."'";		$sql3=$sql3.",ZipCode";	$sql7=$sql7.",'".$p_ZipCode."'";		$sql3=$sql3.",Telephone";	$sql7=$sql7.",'".$p_Telephone."'";		$sql3=$sql3.",Fax";	$sql7=$sql7.",'".$p_Fax."'";		$sql3=$sql3.",Email";	$sql7=$sql7.",'".$p_Email."'";		$sql3=$sql3.",HomePage";	$sql7=$sql7.",'".$p_HomePage."'";		$sql3=$sql3.",yy";	$sql7=$sql7.",'".$p_yy."'";		$sql3=$sql3.",AddTime";	$sql7=$sql7.",'".$p_AddTime."'";		$sql=$sql1.$sql2.$sql3.$sql4.$sql5.$sql6.$sql7.$sql8;	//echo $sql;	$d->Admin("admin","提交成功，我们会尽快与您联系！",$sql,"../../index.html");	$d->close();	}?>