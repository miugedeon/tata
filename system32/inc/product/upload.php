<?php
		include("../common/myfile.php");
		include("../common/smallpic.class.php");
		//第一张图片
		$p_pic1=$_FILES["p_pic1"];
		if($p_pic1["size"]!=0)
		{
			$fileName=date("Ymdhis").mt_rand(0,9)."1";
			$f=new myfile($fileName,$p_pic1,"../upload/product/");
			if($f->type())
			{
				$f->upload();
				$p_pic1_name=$p_pic1_name."".$f->fileName()."";
				$sm=new Songfeng_Image_Ratio();
				
				$p_pic1_name=$sm->RatioAdjuct($p_pic1_name,$uploadPicWidth_b,$uploadPicHeight_b,2);
				$p_pic_s1_name=$sm->RatioAdjuct($p_pic1_name,$uploadPicWidth_s,$uploadPicHeight_s);
				unlink($f->fileName());
			}
		}
		
		//第二张图片
		$p_pic2=$_FILES["p_pic2"];
		if($p_pic2["size"]!=0)
		{
			$fileName=date("Ymdhis").mt_rand(0,9)."2";
			$f=new myfile($fileName,$p_pic2,"../upload/product/");
			if($f->type())
			{
				$f->upload();
				$p_pic2_name=$p_pic2_name."".$f->fileName()."";
				$sm=new Songfeng_Image_Ratio();
				$p_pic2_name=$sm->RatioAdjuct($p_pic2_name,$uploadPicWidth_b,$uploadPicHeight_b,2);
				$p_pic_s2_name=$sm->RatioAdjuct($p_pic2_name,$uploadPicWidth_s,$uploadPicHeight_s);
				unlink($f->fileName());
			}
		}
		//第三张图片
		$p_pic3=$_FILES["p_pic3"];
		if($p_pic3["size"]!=0)
		{
			$fileName=date("Ymdhis").mt_rand(0,9)."3";
			$f=new myfile($fileName,$p_pic3,"../upload/product/");
			if($f->type())
			{
				$f->upload();
				$p_pic3_name=$p_pic3_name."".$f->fileName()."";
				$sm=new Songfeng_Image_Ratio();
				$p_pic3_name=$sm->RatioAdjuct($p_pic3_name,$uploadPicWidth_b,$uploadPicHeight_b,2);
				$p_pic_s3_name=$sm->RatioAdjuct($p_pic3_name,$uploadPicWidth_s,$uploadPicHeight_s);
				unlink($f->fileName());
			}
		}
		//第四张图片
		$p_pic4=$_FILES["p_pic4"];
		if($p_pic4["size"]!=0)
		{
			$fileName=date("Ymdhis").mt_rand(0,9)."4";
			$f=new myfile($fileName,$p_pic4,"../upload/product/");
			if($f->type())
			{
				$f->upload();
				$f->upload();
				$p_pic4_name=$p_pic4_name."".$f->fileName()."";
				$sm=new Songfeng_Image_Ratio();
				$p_pic4_name=$sm->RatioAdjuct($p_pic4_name,$uploadPicWidth_b,$uploadPicHeight_b,2);
				$p_pic_s4_name=$sm->RatioAdjuct($p_pic4_name,$uploadPicWidth_s,$uploadPicHeight_s);
				unlink($f->fileName());
			}
		}
		//第五张图片
		if($p_index==1){
		$p_pic5=$_FILES["p_pic5"];
		if($p_pic5["size"]!=0)
		{
			$fileName=date("Ymdhis").mt_rand(0,9)."5";
			$f=new myfile($fileName,$p_pic5,"../upload/product/");
			if($f->type())
			{
				$f->upload();
				$f->upload();
				$p_pic5_name=$p_pic5_name."".$f->fileName()."";
				$sm=new Songfeng_Image_Ratio();
				$p_pic5_name=$sm->RatioAdjuct($p_pic5_name,$uploadPicWidth_b,$uploadPicHeight_b,2);
				$p_pic_s5_name=$sm->RatioAdjuct($p_pic5_name,$uploadPicWidth_s,$uploadPicHeight_s);
				unlink($f->fileName());
			}
		}
		}
?>