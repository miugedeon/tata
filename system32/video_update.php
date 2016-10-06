<?php include_once("config.php")?>
<link href="images/skin.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #EEF2FB;
}
-->
</style>
<title>中国品牌网</title><body>
<script charset="utf-8" src="../editor/kindeditor.js"></script>
<script>
KE.show({
id : 'p_content',
width : '100%',
height : '300px'
});
</script>
<?php

	
	if(isset($_GET["state"]))
	{
		$p_id=$_POST["p_id"];
		$language=$_POST["language"];//语言
		$p_title=$_POST["p_title"];;//产品名称
		$p_title_en=$_POST['p_title_en'];//产品英文名称
		$p_ordering=$_POST['p_ordering'];
		$p_index="";
		if(isset($_POST["p_index"])){$p_index=1;}else{$p_index=0;}

		$sql="update p_video set ";
		$sql=$sql."p_title='".$p_title."',p_title_en='".$p_title_en."',p_ordering=".$p_ordering.",p_index=".$p_index;
		include("../common/myfile.php");
		//第一图片
		$p_pic1=$_FILES["p_pic1"];
		if($p_pic1["size"]!=0)
		{
			
			$fileName=date("Ymdhis").mt_rand(0,9)."1";
			$f=new myfile($fileName,$p_pic1,"../upload/video/");
			if($f->type())
			{
				$sqlpic1="select * from p_video where p_id=".$p_id;
				$query=$d->Query($sqlpic1);
				$rowpic=mysql_fetch_array($query);
				if(!empty($rowpic["p_pic"]))
				{
					if(file_exists($rowpic["p_pic"]))
					{
						unlink($rowpic["p_pic"]);
					}
				}
				$f->upload();
			}
			$sql=$sql.",p_pic='".$f->fileName()."'";
		}
		//视频HTTP方式上传
		$p_pic2=$_FILES["p_pic2"];
		if($p_pic2["size"]!=0)
		{
			$arr='flv';
			$fileName=date("Ymdhis").mt_rand(0,9)."2";
			$f=new myfile($fileName,$p_pic2,"../upload/video/",$arr,6*1024);
			if($f->type())
			{
				$sqlpic2="select * from p_video where p_id=".$p_id;
				$query=$d->Query($sqlpic2);
				$rowpic=mysql_fetch_array($query);
				if(!empty($rowpic["p_filepath"]))
				{
					if(file_exists($rowpic["p_filepath"]))
					{
						unlink($rowpic["p_filepath"]);
					}
				}
				$f->upload();
			}
			$sql=$sql.",p_filepath='".$f->fileName()."'";
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
			$p_pic2_name="../upload/videos/".$fileName.$filetype;//写入数据库
			$ftp->upload($p_pic2['tmp_name'],$newfilename2);
			$ftp->rename($newfilename2,"/yinyong/sirui/upload/videos/$newfilename2",true);	
			$sql=$sql.",p_filepath='".$p_pic2_name."'";
		}
		*/
		
		$sql=$sql." where p_id=".$p_id;
		$d->Admin($_SESSION["admin"],"更新成功",$sql,"video_update.php?p_id=".$p_id."&language=".$language."");
	}
?>
<?php
	$p_id=$_GET["p_id"];
	$language="";
	if(isset($_GET["language"]))
	{
		$language.=$_GET["language"];
	}

	$sql="select * from p_video where p_id=".$p_id;
	$array=$d->Query($sql);
	while($rowlist=mysql_fetch_array($array))
	{
?>
<form name="form" id="form" action="video_update.php?state=edit" method="post" enctype="multipart/form-data">
<input type="hidden" name="language" id="language" value="<?php echo $language?>">
<input type="hidden" name="p_id" id="p_id" value="<?php echo $p_id?>">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="17" valign="top" background="images/mail_leftbg.gif"><img src="images/left-top-right.gif" width="17" height="29" /></td>
    <td valign="top" background="images/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2">
      <tr>
        <td height="31" style="text-align:right; font-size:12px; color:#666;">当前位置:　网站后台 &gt 视频更新(A) </td>
      </tr>
    </table></td>
    <td width="16" valign="top" background="images/mail_rightbg.gif"><img src="images/nav-right-bg.gif" width="16" height="29" /></td>
  </tr>
  <tr>
    <td valign="middle" background="images/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" bgcolor="#F7F8F9">
    	<table width="100%" cellpadding="0" cellspacing="1" border="0" class="alltable" style="margin-top:20px;">
        	
            <tr style="height:35px; line-height:35px;">
            	<td align="center" class="c_666">视频名称:</td>
                <td style="padding-left:19px;"><input type="text" name="p_title" id="p_title" style="width:638px;" value="<?php echo $rowlist["p_title"]?>"></td>
            </tr>
            
            <tr style="height:35px; line-height:35px;">
            	<td align="center" class="c_666">视频名称（英文）:</td>
                <td style="padding-left:19px;"><input type="text" name="p_title_en" id="p_title_en" style="width:638px;" value="<?php echo $rowlist["p_title_en"]?>"></td>
            </tr>
           
            <tr style="height:35px; line-height:35px;" w>
            	<td  width="150" align="center" class="c_666">视频截图:</td>
                <td style="padding-left:19px;">
                	<input type="file" name="p_pic1" id="p_pic1" style="width:400px;">
                    <?php
                    	if(!empty($rowlist["p_pic"]))
						{
					?>
                    <?php echo $rowlist["p_pic"]?>　<a href="pic_delete.php?p_id=<?php echo $rowlist["p_id"]?>&atction=video&pic=1&language=<?php echo $language?>">删除图片</a>
                    <?php
                    	}
						else
						{
					?>
                    暂无截图信息
                    <?php
                    	}
					?>
                </td>
            </tr>
            <tr style="height:35px; line-height:35px;">
            	<td align="center" class="c_666">视频上传:<br><span style="color:red;">只支持flv视频文件</span></td>
                <td style="padding-left:19px;">
                	<input type="file" name="p_pic2" id="p_pic2" style="width:400px;">
                    <?php
                    	if(!empty($rowlist["p_filepath"]))
						{
					?>
                    <?php echo $rowlist["p_filepath"]?>　<a href="pic_delete.php?p_id=<?php echo $rowlist["p_id"]?>&atction=video&pic=2&language=<?php echo $language?>">删除图片</a>
                    <?php
                    	}
						else
						{
					?>
                    暂无视频信息
                    <?php
                    	}
					?>
                </td>
            </tr>
            
            <tr style="height:35px; line-height:35px;">
            	<td align="center" class="c_666">排序:<br><span style="color:red;">数值越小越靠前</span></td>
                <td style="padding-left:19px;"><input type="text" name="p_ordering" id="p_ordering" style="width:638px;" value="<?php echo $rowlist["p_ordering"]?>"></td>
            </tr>
            
            <tr style="height:35px; line-height:35px;">
            	<td align="center" class="c_666">操作</td>
                <td ><input type="checkbox" name="p_index" id="p_index" <?php if($rowlist["p_index"]==1){?>checked="checked"<?php }?>>首页</td>
            </tr>
            
            <tr>
            	<td colspan="2" align="center">
                	<table cellpadding="0" cellspacing="0" height="80">
                    	<tr>
                        	<td><input type="submit" name="" id="" value="更新" class="but_60" onClick="return check()"></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </td>
    <td background="images/mail_rightbg.gif">&nbsp;</td>
  </tr>
  <tr>
    <td valign="bottom" background="images/mail_leftbg.gif"><img src="images/buttom_left2.gif" width="17" height="17" /></td>
    <td background="images/buttom_bgs.gif"><img src="images/buttom_bgs.gif" width="17" height="17"></td>
    <td valign="bottom" background="images/mail_rightbg.gif"><img src="images/buttom_right2.gif" width="16" height="17" /></td>
  </tr>
</table>
</form>
<?php
	}
?>
</body>

<script language="javascript">
	function bigtype()
	{
		var _p_bigtype=form.p_bigtype.value;
		var _p_id=form.p_id.value;
		window.location.href="video_update.php?language=<?php echo $language?>&p_id="+_p_id+"";
	}
</script>
