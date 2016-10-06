<?php
		include("../common/myfile.php");
		//╫ьм╪
		$p_pic1=$_FILES["p_pic1"];
		if($p_pic1["size"]!=0)
		{
			$fileName=date("Ymdhis").mt_rand(0,9)."1";
			$f=new myfile($fileName,$p_pic1,"upload/contry/");
			if($f->type())
			{
				$f->upload();
				$p_pic1_name=$p_pic1_name."".$f->fileName()."";
			}
		}
		
		//йсф╣
		$p_pic2=$_FILES["p_pic2"];
		if($p_pic2["size"]!=0)
		{
			$fileName=date("Ymdhis").mt_rand(0,9)."2";
			$f=new myfile($fileName,$p_pic2,"upload/contry/");
			if($f->type())
			{
				$f->upload();
				$p_pic2_name=$p_pic2_name."".$f->fileName()."";
			}
		}
?>