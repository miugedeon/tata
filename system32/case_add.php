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
<title>中国品牌网</title>
<script charset="utf-8" src="../editor/kindeditor.js"></script>
<script>
KE.show({
id : 'p_content',
width : '100%',
height : '300px'
});

KE.show({
id : 'p_content_en',
width : '100%',
height : '300px'
});
</script>
<link href="css/admin.css" rel="stylesheet" type="text/css">
<style type="text/css">
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
</style>
<body>
<?php
	$uploadPicWidth_b=255;
	$uploadPicHeight_b=135;
	
	$uploadPicWidth_s=255;
	$uploadPicHeight_s=135;
	
	$language="";
	//&p_typelist=designer
	$p_typelist="";
	if(isset($_GET["language"]))
	{
		$language=$_GET["language"];
		$p_typelist=$_GET["p_typelist"];
	}
	if(isset($_GET["state"]))
	{
		$p_type=0+$_POST["p_type"];
		$p_title=addslashes($_POST["p_title"]);
		$p_title_en=addslashes($_POST["p_title_en"]);
		$p_content=addslashes($_POST["p_content"]);
		$p_content_en=addslashes($_POST["p_content_en"]);
		$p_adddate=date("Y-m-d");
		$p_typelist=$_POST["p_typelist"];
		$p_area=$_POST["p_area"];
		//alert($p_area);
		$p_index="";
		if(isset($_POST["p_index"])){$p_index=1;}else{$p_index=0;}
		$language=$_POST["language"];
		
		$sql1="insert into p_case";
		$sql2="(";
		$sql3="";
		$sql4=")";
		$sql5=" values";
		$sql6="(";
		$sql7="";
		$sql8=")";
		

		
		$sql3=$sql3."p_type";
		$sql7=$sql7."".$p_type."";
		
		$sql3=$sql3.",p_area";
		$sql7=$sql7.",".$p_area."";
		
		$sql3=$sql3.",p_title";
		$sql7=$sql7.",'".$p_title."'";
		
		$sql3=$sql3.",p_title_en";
		$sql7=$sql7.",'".$p_title_en."'";
		
		$sql3=$sql3.",p_typelist";
		$sql7=$sql7.",'".$p_typelist."'";
		
		$sql3=$sql3.",p_content";
		$sql7=$sql7.",'".$p_content."'";
		
		$sql3=$sql3.",p_content_en";
		$sql7=$sql7.",'".$p_content_en."'";
		
		$sql3=$sql3.",p_adddate";
		$sql7=$sql7.",'".$p_adddate."'";
		
		$sql3=$sql3.",p_index";
		$sql7=$sql7.",".$p_index."";
		
		$sql3=$sql3.",p_admin";
		$sql7=$sql7.",'".$_SESSION["admin"]."'";
		
		$sql3=$sql3.",language";
		$sql7=$sql7.",'".$language."'";
		
		include("../common/myfile.php");
		include("../common/smallpic.class.php");
		$p_pic1=$_FILES["p_pic1"];
		if($p_pic1["size"]!=0)
		{
			$fileName=date("Ymdhis").mt_rand(0,9);
			$f=new myfile($fileName,$p_pic1,"../upload/case/");

				$f->upload();
				$sm=new Songfeng_Image_Ratio();
				$p_pic1_name=$sm->RatioAdjuct($f->fileName(),$uploadPicWidth_b,$uploadPicWidth_b,2);
				$p_pic_s1_name=$sm->RatioAdjuct($f->fileName(),$uploadPicWidth_s,$uploadPicWidth_s);
				unlink($f->fileName());
				
				$sql3=$sql3.",p_pic1";
				$sql7=$sql7.",'".$p_pic1_name."'";
				
				$sql3=$sql3.",p_pic_s1";
				$sql7=$sql7.",'".$p_pic_s1_name."'";
		}
		
		$p_pic2=$_FILES["p_pic2"];
		if($p_pic2["size"]!=0)
		{
			$fileName=date("Ymdhis").mt_rand(0,9);
			$f=new myfile($fileName,$p_pic2,"../upload/case/");

				$f->upload();
				$sm=new Songfeng_Image_Ratio();
				$p_pic2_name=$sm->RatioAdjuct($f->fileName(),1024,475,2);
				$p_pic_s2_name=$sm->RatioAdjuct($f->fileName(),100,60);
				unlink($f->fileName());
				
				$sql3=$sql3.",p_pic2";
				$sql7=$sql7.",'".$p_pic2_name."'";
				
				$sql3=$sql3.",p_pic_s2";
				$sql7=$sql7.",'".$p_pic_s2_name."'";
		}
		$p_pic3=$_FILES["p_pic3"];
		if($p_pic3["size"]!=0)
		{
			$fileName=date("Ymdhis").mt_rand(0,9);
			$f=new myfile($fileName,$p_pic3,"../upload/case/");

				$f->upload();
				$sm=new Songfeng_Image_Ratio();
				$p_pic2_name=$sm->RatioAdjuct($f->fileName(),645,530,2);
				$p_pic_s2_name=$sm->RatioAdjuct($f->fileName(),128,90);
				unlink($f->fileName());
				
				$sql3=$sql3.",p_pic3";
				$sql7=$sql7.",'".$p_pic3_name."'";
				
				$sql3=$sql3.",p_pic_s3";
				$sql7=$sql7.",'".$p_pic_s3_name."'";
		}
		
		$sql=$sql1.$sql2.$sql3.$sql4.$sql5.$sql6.$sql7.$sql8;
		//echo $sql;
		$d->Admin($_SESSION["admin"],"添加成功",$sql,"case_add.php?language=".$language."&p_typelist=".$p_typelist."");
	}
?>
<form name="form" id="form" action="?state=add" method="post" enctype="multipart/form-data">
<input type="hidden" name="language" id="language" value="<?php echo $language?>">
<input type="hidden" name="p_typelist" id="p_typelist" value="<?php echo $p_typelist?>">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="17" valign="top" background="images/mail_leftbg.gif"><img src="images/left-top-right.gif" width="17" height="29" /></td>
    <td valign="top" background="images/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2">
      <tr>
        <td height="31" style="text-align:right; font-size:12px; color:#666;">当前位置:　网站后台 &gt 案例添加(A) </td>
      </tr>
    </table></td>
    <td width="16" valign="top" background="images/mail_rightbg.gif"><img src="images/nav-right-bg.gif" width="16" height="29" /></td>
  </tr>
  <tr>
    <td valign="middle" background="images/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" bgcolor="#F7F8F9">
    	<table width="100%" cellpadding="0" cellspacing="1" border="0" class="alltable" style="margin-top:20px;">
        	<tr style="height:35px; line-height:35px;">
            	<td width="180" align="center" class="c_666">类别信息:</td>
                <td>
                	<select name="p_type" id="p_type">
                    	<option value="0">请选择类别</option>
                        <?php
                        	$sql="select * from p_list where p_typelist='".$p_typelist."' and language='".$language."'";
							$query=$d->Query($sql);
							while($row=mysql_fetch_array($query))
							{
						?>
                        <option value="<?php echo $row["p_id"]?>"><?php echo $row["p_title"]?></option>
                        <?php
                        	}
						?>
                    </select>
                </td>
            </tr>
            <tr style="height:35px; line-height:35px;">
            	<td align="center" class="c_666">地区选择:</td>
                <td>
                	<select name="p_area">
                    	<option value="0">---地区选择---</option>
                    	<?php
						$sql="select * from p_list where language='cn' and p_typelist='area'";
						$query=$d->Query($sql);
						while($row=mysql_fetch_array($query)){
						?>
                        <option value="<?php echo $row[p_id]; ?>"><?php echo $row[p_title]; ?></option>
                        <?php
						}
						?>
                    </select>
                </td>
            </tr>
            <tr style="height:35px; line-height:35px;">
            	<td align="center" class="c_666">名称:</td>
                <td><input type="text" name="p_title" id="p_title" style="width:638px;"></td>
            </tr>
            <tr style="height:35px; line-height:35px;">
            	<td align="center" class="c_666">名称（英文）:</td>
                <td><input type="text" name="p_title_en" id="p_title_en" style="width:638px;"></td>
            </tr>
            <tr>
            	<td align="center" class="c_666">内容:</td>
                <td><textarea id="p_content" name="p_content" rows="5" cols="100"></textarea></td>
            </tr>
            <tr style="height:35px; line-height:35px;">
            	<td align="center" class="c_666">内容（英文）:</td>
                <td><textarea id="p_content_en" name="p_content_en" rows="5" cols="100"></textarea></td>
            </tr>
            <tr style="height:35px; line-height:35px;" >
            	<td align="center" class="c_666">缩略图上传:</td>
            	<td><input type="file" name="p_pic1" id="p_pic1" style="width:400px;" /></td>
            </tr>
            <tr style="height:35px; line-height:35px;display:none;" >
            	<td align="center" class="c_666">Image&amp;New Product图片:</td>
            	<td><input type="file" name="p_pic2" id="p_pic2" style="width:400px;" /><span style="color:red;">&nbsp;&nbsp;*图片尺寸应为1024px*475px</span></td>
            </tr>
            <tr style="height:35px; line-height:35px;display:none;" >
            	<td align="center" class="c_666">Pictorial图片:</td>
            	<td><input type="file" name="p_pic3" id="p_pic3" style="width:400px;" /></td>
            </tr>
            <tr style="height:35px; line-height:35px;display:none;">
            	<td align="center" class="c_666">相关操作:</td>
            	<td>
                	<table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td><input type="checkbox" name="p_index" id="p_index" /></td>
                            <td class="c_666">&nbsp; </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr style="height:50px; line-height:50px;">
            	<td colspan="2" align="center">
                	<input type="submit" name="send" id="send" value="添加(A)" class="but_60"  />
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
</body>
