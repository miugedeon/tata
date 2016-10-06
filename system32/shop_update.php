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
		$p_title=$_POST["p_title"];
		$p_link=$_POST["p_link"];
		$p_price1=trim($_POST["p_price1"]);
		$p_price2=trim($_POST["p_price2"]);
		$p_ordering=$_POST['p_ordering'];
		$language=$_POST['language'];
		$sql="update p_shop set p_title='".$p_title."',p_link='".$p_link."',p_price1='".$p_price1."',p_price2='".$p_price2."',p_ordering=".$p_ordering.",language='".$language."'";
		
		
		include("../common/myfile.php");
		$p_pic=$_FILES["p_piclink"];
		if($p_pic["size"]!=0)
		{
			$fileName=date("Ymdhis").mt_rand(0,9);
			$f=new myfile($fileName,$p_pic,"../upload/shop/");
			if($f->type())
			{
				$sqlpic="select * from p_shop where p_id=".$p_id;
				$query=$d->Query($sqlpic);
				$rowpic=mysql_fetch_array($query);
				if(!empty($rowpic["p_piclink"]))
				{
					if(file_exists($rowpic["p_piclink"]))
					{
						unlink($rowpic["p_piclink"]);
					}
				}
				$f->upload();
				$sql=$sql.",p_piclink='".$f->fileName()."'";
			}
		}
		
		$sql=$sql." where p_id=".$p_id;
		$d->Admin($_SESSION["admin"],"更新成功",$sql,"shop_update.php?p_id=".$p_id."&language=".$language."");
	}
	
	if(isset($_GET["p_id"]))
	{
		$p_id=$_GET["p_id"];
		$sql="select * from p_shop where p_id=".$p_id;
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
        <td height="31" style="text-align:right; font-size:12px; color:#666;">当前位置:　网站后台 &gt 直销网店产品修改 </td>
      </tr>
    </table></td>
    <td width="16" valign="top" background="images/mail_rightbg.gif"><img src="images/nav-right-bg.gif" width="16" height="29" /></td>
  </tr>
  <tr>
    <td valign="middle" background="images/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" bgcolor="#F7F8F9">
    	<table width="100%" cellpadding="0" cellspacing="1" border="0" class="alltable" style="margin-top:20px;">
        	
            <tr style="height:35px; line-height:35px;">
            	<td width="100" align="center" class="c_666">产品名称:</td>
                <td><input type="text" name="p_title" id="p_title" style="width:638px;" value="<?php echo $rowlist["p_title"]?>"></td>
            </tr>
           
            
            <tr style="height:35px; line-height:35px;">
            	<td width="100" align="center" class="c_666">产品图片:</td>
                <td>
                	<table cellpadding="0" cellspacing="0" border="0">
                    	
                    	<tr>
                        	<td><input type="file" name="p_piclink" id="p_piclink" style="width:400px;"><span style="color:red">*图片尺寸:230 x 150</span></td>
                            <?php
								if(!empty($rowlist["p_piclink"]))
								{
							?>
                            <td style="padding-left:10px;"><?php echo $rowlist["p_piclink"]?></td>
                            <td style="padding-left:10px;"><a href="pic_delete.php?p_id=<?php echo $rowlist["p_id"]?>&atction=shop&pic=1&language=<?php echo $language?>">删除图片</a></td>
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
            	<td width="100" align="center" class="c_666">原价:</td>
                <td><input type="text" name="p_price1" id="p_price1" style="width:638px;" value="<?php echo $rowlist["p_price1"]?>"></td>
            </tr>
            
            <tr style="height:35px; line-height:35px;">
            	<td width="100" align="center" class="c_666">特价:</td>
                <td><input type="text" name="p_price2" id="p_price2" style="width:638px;" value="<?php echo $rowlist["p_price2"]?>"></td>
            </tr>
            
             <tr style="height:35px; line-height:35px;">
            	<td width="100" align="center" class="c_666">排序:</td>
                <td><input type="text" name="p_ordering" id="p_ordering" style="width:638px;" value="<?php echo $rowlist["p_ordering"]?>"><span style="color:red;">*数值越大越靠前</span></td>
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
