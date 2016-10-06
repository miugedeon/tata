<?php
	class myfile
	{
		public  $fileName;//新上传文件名
		public  $oldpath;//源路径
		public  $newpath;//新路径
		public  $fileType="picture";//上传文件类型组picture为图片类型；video为视频类型；file执行文件类型；自定义文件类型则用,隔开
		public  $fileTem;//临时文件
		public  $oldName;//源文件名
		private $fileSize;
		private $limitSize;

		public function __construct($fileName,$oldpath,$newpath,$fileType="picture",$limitSize="512")
		{
			$this->fileName=$fileName;
			$this->oldpath=$oldpath;
			$this->newpath=$newpath;
			$this->oldName=$oldpath["name"];
			$this->fileType=$oldpath["type"];
			$this->fileTem=$oldpath["tmp_name"];
			$this->fileSize=$oldpath["size"];
			$this->fileType=$fileType;
			$this->limitSize=$limitSize;
		}
		//上传
		public function upload()
		{
			if($this->checkSize()){
				$this->uploadpath();
				move_uploaded_file($this->fileTem,$this->newpath."/".$this->GetNmae());
			}
		}
		//判断文件是否允许上传
		public function type()
		{
			$allowType=$this->typeGroup($this->fileType);
			$uploadType=$this->getFileType($this->oldName);
			$allowTypeArr=explode(",",$allowType);
			if(in_array($uploadType,$allowTypeArr)){
				return true;
			}else{
				return false;
				exit("不允许上传的文件类型");
			}
		}
		//文件类型组群绑定
		private function typeGroup($type){
			switch($type){
				case 'picture':
					$fileArr='jpg,jpeg,bmp,gif,png';
					break;
				case 'video':
					$fileArr='mpeg,mp4,mov,flv';
					break;
				case 'file':
					$fileArr='rar,zip,7z,exe';
					break;
				default:
					$fileArr=$type;
					break;
			}
			return $fileArr;
		}
		//获取文件后缀
		private function getFileType($filename){
			$fileArr=explode(".",$filename);
			return end($fileArr);	
		}
		private function checkSize(){
			$fs=$this->fileSize;
			$ls=$this->limitSize*1024;
			if($fs>$ls){
				echo("<script type='text/javascript'>window.alert('上传文件不能超过".$this->limitSize."K,请重新上传');</script>");	
				exit("<script type='text/javascript'>history.go(-1);</script>");	
				return false;
			}else{
				return true;	
			}
		} 
		//图片存放路径
		public function uploadpath()
		{
			if(file_exists($this->newpath) && is_dir($this->newpath)){
				
		   	}
		   	else{
				mkdir ($this->newpath,0777);
		  	 }
		}	
		//这个数据要写入数据库
		public function fileName()
		{
			$newName=$this->oldName;
			$hzm=strstr($newName,".");
			return $this->newpath.$this->fileName.$hzm;
		}
		//新上传文件名
		public function GetNmae()
		{
			$newName=$this->oldName;
			$hzm=strstr($newName,".");
			return $this->fileName.$hzm;
		}
	}
?>