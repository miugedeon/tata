<?php
include("../common/myfile.php");
//截图
$p_pic1=$_FILES["p_pic1"];
if($p_pic1["size"]!=0)
{
	$fileName=date("Ymdhis").mt_rand(0,9)."1";
	$f=new myfile($fileName,$p_pic1,"../upload/flink/");
	if($f->type())
	{
		$f->upload();
		$p_pic1_name=$p_pic1_name."".$f->fileName()."";
	}
}
?>