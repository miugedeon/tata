<?php
		//截图
		include("../common/myfile.php");
		$p_pic1=$_FILES["p_pic1"];
		if($p_pic1["size"]!=0)
		{
			$fileName=date("Ymdhis").mt_rand(0,9)."1";
			$f=new myfile($fileName,$p_pic1,"../upload/video/");
			if($f->type())
			{
				$f->upload();
				$p_pic1_name=$p_pic1_name."".$f->fileName()."";
			}
		}
		
		//视频HTTP方式上传
		$p_pic2=$_FILES["p_pic2"];
		if($p_pic2["size"]!=0)
		{
			$arr='flv';
			$fileName=date("Ymdhis").mt_rand(0,9)."1";
			$f=new myfile($fileName,$p_pic2,"../upload/video/",$arr,6*1024);
			if($f->type())
			{
				$f->upload();
				$p_pic2_name=$p_pic2_name."".$f->fileName()."";
			}
		}
		
		//视频FTP方式上传
		/*
		include("../common/ftp.php");
		
		$p_pic2=$_FILES["p_pic2"];
		if($p_pic2['size'] != 0){
			$ftp = new Ftp();
			$ftp->connect($config);
			$filepath="/yinyong/sirui/upload/videos/";
			$fileName=date("Ymdhis").mt_rand(0,9)."2";
			$filetype=$ftp->getfiletype($p_pic2['name']);
			$newfilename2=$fileName.$filetype;
			$p_pic2_name="../upload/videos/".$fileName.$filetype; //写入数据库
			$ftp->upload($p_pic2['tmp_name'],$newfilename2);
			$ftp->rename($newfilename2,"/yinyong/sirui/upload/videos/$newfilename2",true);
		}
		*/
?>