<?php
		include("../common/myfile.php");
		//��һ��ͼƬ
		$p_pic1=$_FILES["p_pic1"];
		if($p_pic1["size"]!=0)
		{
			$fileName=date("Ymdhis").mt_rand(0,9)."1";
			$f=new myfile($fileName,$p_pic1,"upload/product/");
			if($f->type())
			{
				$f->upload();
				$p_pic1_name=$p_pic1_name."".$f->fileName()."";
			}
		}
		
		//�ڶ���ͼƬ
		$p_pic2=$_FILES["p_pic2"];
		if($p_pic2["size"]!=0)
		{
			$fileName=date("Ymdhis").mt_rand(0,9)."2";
			$f=new myfile($fileName,$p_pic2,"upload/product/");
			if($f->type())
			{
				$f->upload();
				$p_pic2_name=$p_pic2_name."".$f->fileName()."";
			}
		}
		//������ͼƬ
		$p_pic3=$_FILES["p_pic3"];
		if($p_pic3["size"]!=0)
		{
			$fileName=date("Ymdhis").mt_rand(0,9)."3";
			$f=new myfile($fileName,$p_pic3,"upload/product/");
			if($f->type())
			{
				$f->upload();
				$p_pic3_name=$p_pic3_name."".$f->fileName()."";
			}
		}
		//������ͼƬ
		$p_pic4=$_FILES["p_pic4"];
		if($p_pic4["size"]!=0)
		{
			$fileName=date("Ymdhis").mt_rand(0,9)."4";
			$f=new myfile($fileName,$p_pic4,"upload/product/");
			if($f->type())
			{
				$f->upload();
				$p_pic4_name=$p_pic4_name."".$f->fileName()."";
			}
		}
		//������ͼƬ
		$p_pic5=$_FILES["p_pic5"];
		if($p_pic5["size"]!=0)
		{
			$fileName=date("Ymdhis").mt_rand(0,9)."5";
			$f=new myfile($fileName,$p_pic5,"upload/product/");
			if($f->type())
			{
				$f->upload();
				$p_pic5_name=$p_pic5_name."".$f->fileName()."";
			}
		}
?>