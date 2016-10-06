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
<?php
	$language="";
	if(isset($_GET["language"]))
	{
		$language=$_GET["language"];
	}
	if(isset($_GET["state"]))
	{
		$p_id=$_POST["p_id"];
		$p_title_cn=$_POST["p_title_cn"];
		$p_link=$_POST["p_link"];
		$p_alt=$_POST["p_alt"];
		$p_ordering=$_POST['p_ordering'];
		$sql="update p_flink set p_title_cn='".$p_title_cn."',p_link='".$p_link."',p_alt='".$p_alt."',p_ordering=".$p_ordering;
		
		
		include("../common/myfile.php");
		$p_pic=$_FILES["p_pic1"];
		if($p_pic["size"]!=0)
		{
			$fileName=date("Ymdhis").mt_rand(0,9);
			$f=new myfile($fileName,$p_pic,"../upload/flink/");
			if($f->type())
			{
				$sqlpic="select * from p_flink where p_id=".$p_id;
				$query=$d->Query($sqlpic);
				$rowpic=mysql_fetch_array($query);
				if(!empty($rowpic["p_pic1"]))
				{
					if(file_exists($rowpic["p_pic1"]))
					{
						unlink($rowpic["p_pic1"]);
					}
				}
				$f->upload();
				$sql=$sql.",p_pic1='".$f->fileName()."'";
			}
		}
		
		$sql=$sql." where p_id=".$p_id;
		$d->Admin($_SESSION["admin"],"更新成功",$sql,"flink_update.php?p_id=".$p_id."&language=".$language."");
	}
	
	if(isset($_GET["p_id"]))
	{
		$p_id=$_GET["p_id"];
		$sql="select * from p_flink where p_id=".$p_id;
		$query=$d->Query($sql);
		$rowlist=mysql_fetch_array($query);
	}
?>
<form name="form" id="form" action="?state=edit" method="post" enctype="multipart/form-data">
<input type="hidden" name="language" id="language" value="<?php echo $language?>">
<input type="hidden" name="p_id" id="p_id" value="<?php echo $p_id?>">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="17" valign="top" background="images/mail_leftbg.gif"><img src="images/left-top-right.gif" width="17" height="29" /></td>
    <td valign="top" background="images/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2">
      <tr>
        <td height="31" style="text-align:right; font-size:12px; color:#666;">当前位置:　网站后台 &gt 友情链接修改 </td>
      </tr>
    </table></td>
    <td width="16" valign="top" background="images/mail_rightbg.gif"><img src="images/nav-right-bg.gif" width="16" height="29" /></td>
  </tr>
  <tr>
    <td valign="middle" background="images/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" bgcolor="#F7F8F9">
    	<table width="100%" cellpadding="0" cellspacing="1" border="0" class="alltable" style="margin-top:20px;">
        	
            <tr style="height:35px; line-height:35px;">
            	<td width="100" align="center" class="c_666">链接名称:</td>
                <td><input type="text" name="p_title_cn" id="p_title_cn" style="width:638px;" value="<?php echo $rowlist["p_title_cn"]?>"></td>
            </tr>
           
            
            <tr style="height:35px; line-height:35px;">
            	<td width="100" align="center" class="c_666">LOGO图片上传:</td>
                <td>
                	<table cellpadding="0" cellspacing="0" border="0">
                    	
                    	<tr>
                        	<td><input type="file" name="p_pic1" id="p_pic1" style="width:400px;"></td>
                            <?php
								if(!empty($rowlist["p_pic1"]))
								{
							?>
                            <td style="padding-left:10px;"><?php echo $rowlist["p_pic1"]?></td>
                            <td style="padding-left:10px;"><a href="pic_delete.php?p_id=<?php echo $rowlist["p_id"]?>&atction=flink&pic=1&language=<?php echo $language?>">删除图片</a></td>
                            <?php
								}
							?>
                        </tr>
                        
                    </table>
                </td>
            </tr>
           
        
        	<tr style="height:35px; line-height:35px;">
            	<td width="100" align="center" class="c_666">链接到:</td>
                <td><input type="text" name="p_link" id="p_link" style="width:638px;" value="<?php echo $rowlist["p_link"]?>"></td>
            </tr>
                        
            <tr style="height:35px; line-height:35px;">
            	<td width="100" align="center" class="c_666">提示:</td>
                <td><input type="text" name="p_alt" id="p_alt" style="width:638px;" value="<?php echo $rowlist["p_alt"]?>"></td>
            </tr>
            
             <tr style="height:35px; line-height:35px;">
            	<td width="100" align="center" class="c_666">排序:<br><span style="color:red;">数值越小越靠前：</span></td>
                <td><input type="text" name="p_ordering" id="p_ordering" style="width:638px;" value="<?php echo $rowlist["p_ordering"]?>"></td>
            </tr>
        
            <tr>
            	<td align="center" colspan="2" height="60">
                	<input type="submit" name="send" id="send" value="更新" class="but_60" onClick="return check()">
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
<script language="javascript">
	function　check()
	{
		//新闻标题
		var _p_title=form.p_title.value;
		if(_p_title=="")
		{
			alert("请输入标题");
			form.p_title.focus();
			return false;
		}
	}
</script>
</body>
