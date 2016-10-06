<?php ini_set('max_execution_time','3600');?>
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
	$language="";
	$p_typelist="";
	if(isset($_GET["language"]))
	{
		$language=$_GET["language"];
		$p_typelist=$_GET["p_typelist"];
	}
	if(isset($_GET["state"]))
	{
		$p_id=$_POST["p_id"];
		$p_type=0+$_POST["p_type"];
		$p_title=$_POST["p_title"];
		$p_title_en=$_POST["p_title_en"];
		$p_content=$_POST["p_content"];
		$p_content_en=$_POST["p_content_en"];
		$p_adddate=date("Y-m-d");
		$p_typelist=$_POST["p_typelist"];
		$p_index="";
		if(isset($_POST["p_index"])){$p_index=1;}else{$p_index=0;}
		$language=$_POST["language"];
		
		$sql="update p_club set p_type=".$p_type.",p_title='".$p_title."',p_pic1='".$p_title_en."',p_pic2='".$p_content."',p_pic3='".$p_content_en."',p_adddate='".$p_adddate."',p_index=".$p_index.",p_admin='".$_SESSION["admin"]."',p_typelist='".$p_typelist."'";
		
		include("../common/myfile.php");
		$p_smallpic=$_FILES["p_smallpic"];
		if($p_smallpic["size"]!=0)
		{
			$fileName=date("Ymdhis").mt_rand(0,9);
			$f=new myfile($fileName,$p_smallpic,"../upload/club/");
			if($f->type())
			{
				$sqlpic="select * from p_club where p_id=".$p_id;
				$query=$d->Query($sqlpic);
				$rowpic=mysql_fetch_array($query);
				if(!empty($rowpic["p_smallpic"]))
				{
					if(file_exists($rowpic["p_smallpic"]))
					{
						unlink($rowpic["p_smallpic"]);
					}
				}
				$f->upload();
				$sql=$sql.",p_smallpic='".$f->fileName()."'";
			}
		}
		$p_bigpic=$_FILES["p_bigpic"];
		if($p_bigpic["size"]!=0)
		{
			$fileName=date("Ymdhis").mt_rand(0,9);
			$f=new myfile($fileName,$p_bigpic,"../upload/club/");

				$sqlpic="select * from p_club where p_id=".$p_id;
				$query=$d->Query($sqlpic);
				$rowpic=mysql_fetch_array($query);
				if(!empty($rowpic["p_bigpic"]))
				{
					if(file_exists($rowpic["p_bigpic"]))
					{
						unlink($rowpic["p_bigpic"]);
					}
				}
				$f->upload();
				$sql=$sql.",p_bigpic='".$f->fileName()."'";

		}
		$sql=$sql." where p_id=".$p_id;
		$d->Admin($_SESSION["admin"],"更新成功",$sql,"club_update.php?p_id=".$p_id."&language=".$language."&p_typelist=".$p_typelist."");
	}
	
	if(isset($_GET["p_id"]))
	{
		$p_id=$_GET["p_id"];
		$sql="select * from p_club where p_id=".$p_id;
		$query=$d->Query($sql);
		$rowlist=mysql_fetch_array($query);
	}
?>
<form name="form" id="form" action="?state=add" method="post" enctype="multipart/form-data">
<input type="hidden" name="language" id="language" value="<?php echo $language?>">
<input type="hidden" name="p_id" id="p_id" value="<?php echo $p_id?>">
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
            	<td width="100" align="center" class="c_666">类别信息:</td>
                <td>
                	<select name="p_type" id="p_type">
                    	<option value="0">请选择类别</option>
                        <?php
                        	$sql="select * from p_list where p_typelist='".$p_typelist."' and language='".$language."'";
							$query=$d->Query($sql);
							$select="";
							while($row=mysql_fetch_array($query))
							{
							if($rowlist["p_type"]==$row["p_id"])
							{
								$select="selected='selected'";
							}
							else
							{
								 $select="";
							}
						?>
                        <option value="<?php echo $row["p_id"]?>" <?php echo $select?>><?php echo $row["p_title"]?></option>
                        <?php
                        	}
						?>
                    </select>
                </td>
            </tr>
            <tr style="height:35px; line-height:35px;">
            	<td align="center" class="c_666">名称:</td>
                <td><input type="text" name="p_title" id="p_title" value="<?php echo $rowlist["p_title"]?>" style="width:638px;"></td>
            </tr>
            <tr style="height:35px; line-height:35px;">
            	<td align="center" class="c_666">名称（英文）:</td>
                <td><input type="text" name="p_title_en" id="p_title_en" style="width:638px;" value="<?php echo $rowlist["p_pic1"]?>"></td>
            </tr>
            <tr>
            	<td align="center" class="c_666">内容:</td>
                <td><textarea id="p_content" name="p_content" rows="5" cols="100"><?php echo $rowlist["p_pic2"]?></textarea></td>
            </tr>
            <tr>
            	<td align="center" class="c_666">内容（英文）:</td>
                <td><textarea id="p_content_en" name="p_content_en" rows="5" cols="100"><?php echo $rowlist["p_pic3"]?></textarea></td>
            </tr>
            <tr  style="height:35px; line-height:35px;">
            	<td align="center" class="c_666">案例图片:</td>
            	<td>
                	<table cellpadding="0" cellspacing="0" border="0">
                    	
                    	<tr>
                        	<td><input type="file" name="p_smallpic" id="p_smallpic" style="width:400px;"></td>
                            <?php
								if(!empty($rowlist["p_smallpic"]))
								{
							?>
                            <td style="padding-left:10px;"><?php echo $rowlist["p_smallpic"]?></td>
                            <td style="padding-left:10px;"><a href="pic_delete.php?p_id=<?php echo $rowlist["p_id"]?>&atction=club&pic=1&language=<?php echo $language?>">删除图片</a></td>
                            <?php
								}
							?>
                        </tr>
                        
                    </table>
                </td>
            </tr>
            <tr style="height:35px; line-height:35px;display:none">
            	<td align="center" class="c_666">
            			            				<?php
            				if ($p_typelist=="video")
            				echo "视频文件";
            				else
            					echo "大 图 片:";
            		
            					?>
            			</td>
            	<td>
                	<table cellpadding="0" cellspacing="0" border="0">
                    	<tr>
                        	<td><input type="file" name="p_bigpic" id="p_bigpic" style="width:400px;"></td>
                            <?php
								if(!empty($rowlist["p_bigpic"]))
								{
							?>
                            <td style="padding-left:10px;"><?php echo $rowlist["p_bigpic"]?></td>
                            <td style="padding-left:10px;"><a href="pic_delete.php?p_id=<?php echo $rowlist["p_id"]?>&atction=club&pic=2&language=<?php echo $language?>">删除图片</a></td>
                            <?php
								}
							?>
                        </tr>
                        
                    </table>
                </td>
            </tr>
            <tr style="height:35px; line-height:35px;display:none;">
            	<td align="center" class="c_666">相关操作:</td>
            	<td>
                	<table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td><input type="checkbox" name="p_index" id="p_index" <?php if($rowlist["p_index"]==1){?>checked="checked"<?php }?> /></td>
                            <td class="c_666">&nbsp; </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr style="height:50px; line-height:50px;">
            	<td colspan="2" align="center">
                	<input type="submit" name="send" id="send" value="更新" class="but_60" onClick="return check()" />
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
<script language="javascript" src="js/case1.js"></script>
</body>
