<?php
		include("../common/myfile.php");
		include("../common/smallpic.class.php");
		//截图
		$p_pic1=$_FILES["p_pic1"];
		if($p_pic1["size"]!=0)
		{
			$fileName=date("Ymdhis").mt_rand(0,9)."1";
			$f=new myfile($fileName,$p_pic1,"../upload/indexPic/");
			if($f->type())
			{
				$f->upload();
				$p_pic1_name=$p_pic1_name."".$f->fileName()."";
				//$sm=new Songfeng_Image_Ratio();
			}
		}
		
		//视频
		$p_pic2=$_FILES["p_pic2"];
		if($p_pic2["size"]!=0)
		{
			$fileName=date("Ymdhis").mt_rand(0,9)."2";
			$f=new myfile($fileName,$p_pic2,"../upload/indexPic/");
			if($f->type())
			{
				$f->upload();
				$p_pic2_name=$p_pic2_name."".$f->fileName()."";
				$sm=new Songfeng_Image_Ratio();
				$p_pic1_name=$sm->RatioAdjuct($p_pic2_name,125,48);
			}
		}
		
		$p_pic3=$_FILES["p_pic3"];
		if($p_pic3["size"]!=0)
		{
			$fileName=date("Ymdhis").mt_rand(0,9)."3";
			$f=new myfile($fileName,$p_pic3,"../upload/indexPic/");
			if($f->type())
			{
				$f->upload();
				$p_pic3_name=$p_pic3_name."".$f->fileName()."";
				//$sm=new Songfeng_Image_Ratio();
				//$p_pic1_name=$sm->RatioAdjuct($p_pic2_name,125,48);
			}
		}
?>