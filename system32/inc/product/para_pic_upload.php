<?php
include("../common/myfile.php");
$p_para_pic=$_FILES["p_para_pic"];
if($p_para_pic["size"]!=0)
{
	$fileName=date("Ymdhis").mt_rand(0,9)."1";
	$f=new myfile($fileName,$p_para_pic,"upload/product/para/");
	if($f->type())
	{
		$f->upload();
		$p_para_picPath=$p_para_picPath."".$f->fileName()."";
	}
}
		
		