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
KE.show({
id : 'p_content_en',
width : '100%',
height : '300px'
});
</script>
<?php
	$language="";
	if(isset($_GET["language"]))
	{
		$language=$_GET["language"];
	}
	if(isset($_GET["state"]))
	{
		$p_id=$_POST["p_id"];
		$p_type=$_POST["p_type"];
		$p_title=addslashes($_POST["p_title"]);
		$p_title_en=addslashes($_POST["p_title_en"]);
		$p_simple=addslashes($_POST["p_simple"]);
		$p_key=addslashes($_POST["p_key"]);
		$p_label=addslashes($_POST["p_label"]);
		$p_content=addslashes($_POST["p_content"]);
		$p_content_en=addslashes($_POST["p_content_en"]);
		$p_index="";
		if(isset($_POST["p_index"])){$p_index=1;}else{$p_index=0;}
		$p_emphasis="";
		if(isset($_POST["p_emphasis"])){$p_emphasis=1;}else{$p_emphasis=0;}
		$p_adddate=$_POST["p_adddate"];
		$language=$_POST["language"];
		$sql="update p_news set p_type=".$p_type.",p_title='".$p_title."',p_title_en='".$p_title_en."',p_simple='".$p_simple."',p_adddate='".$p_adddate."'";
		$sql=$sql.",p_key='".$p_key."'";
		$sql=$sql.",p_label='".$p_label."'";
		$sql=$sql.",p_content='".$p_content."'";
		$sql=$sql.",p_content_en='".$p_content_en."'";
		$sql=$sql.",p_index=".$p_index."";
		$sql=$sql.",p_emphasis=".$p_emphasis."";
		
		$p_pic=$_FILES["p_pic"];
		if($p_pic["size"]!=0)
		{
			include("../common/myfile.php");
			$fileName=date("Ymdhis").mt_rand(0,9);
			$f=new myfile($fileName,$p_pic,"../upload/news/");
			if($f->type())
			{
				$sqlpic="select * from p_news where p_id=".$p_id;
				$query=$d->Query($sqlpic);
				$rowpic=mysql_fetch_array($query);
				if(!empty($rowpic["p_pic"]))
				{
					if(file_exists($rowpic["p_pic"]))
					{
						unlink($rowpic["p_pic"]);
					}
				}
				$f->upload();
				$sql=$sql.",p_pic='".$f->fileName()."'";
			}
		}
		$sql=$sql." where p_id=".$p_id;
		$d->Admin($_SESSION["admin"],"更新成功",$sql,"news_update.php?p_id=".$p_id."&language=".$language."");
	}
	
	if(isset($_GET["p_id"]))
	{
		$p_id=$_GET["p_id"];
		$sql="select * from p_news where p_id=".$p_id;
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
        <td height="31" style="text-align:right; font-size:12px; color:#666;">当前位置:　网站后台 &gt 新闻添加(A) </td>
      </tr>
    </table></td>
    <td width="16" valign="top" background="images/mail_rightbg.gif"><img src="images/nav-right-bg.gif" width="16" height="29" /></td>
  </tr>
  <tr>
    <td valign="middle" background="images/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" bgcolor="#F7F8F9">
    	<table width="100%" cellpadding="0" cellspacing="1" border="0" class="alltable" style="margin-top:20px;">
        	<tr style="height:35px; line-height:35px;">
            	<td width="100" align="center" class="c_666">新闻类别:</td>
                <td>
                	<select name="p_type" id="p_type">
                    	<option value="0">请选择新闻类别</option>
                        <?php
                        	$sql="select * from p_list where p_typelist='news' and language='".$language."'";
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
            	<td width="100" align="center" class="c_666">新闻标题:</td>
                <td><input type="text" name="p_title" id="p_title" style="width:638px;" value="<?php echo htmlspecialchars($rowlist["p_title"])?>"></td>
            </tr>
            <tr style="height:35px; line-height:35px;">
            	<td width="100" align="center" class="c_666">新闻标题（英文）:</td>
                <td><input type="text" name="p_title_en" id="p_title_en" style="width:638px;" value="<?php echo htmlspecialchars($rowlist["p_title_en"])?>"></td>
            </tr>
            <tr style="height:35px; line-height:35px;display:none;">
            	<td width="100" align="center" class="c_666">新闻简概:</td>
                <td style="padding-top:8px; padding-bottom:8px;">
                	<textarea name="p_simple" id="p_simple" rows="3" cols="103"><?php echo $rowlist["p_simple"]?></textarea>
                </td>
            </tr>
            <tr style="height:35px; line-height:35px;display:none;">
            	<td width="100" align="center" class="c_666">关键字:</td>
                <td style="padding-top:8px; padding-bottom:8px;"><textarea name="p_key" id="p_key" rows="3" cols="103"><?php echo $rowlist["p_key"]?></textarea></td>
            </tr>
            <tr style="height:35px; line-height:35px;display:none;">
            	<td width="100" align="center" class="c_666">搜索标签:</td>
                <td style="padding-top:8px; padding-bottom:8px;"><textarea name="p_label" id="p_label" rows="3" cols="103"><?php echo $rowlist["p_label"]?></textarea></td>
            </tr>
            <tr style="height:35px; line-height:35px;">
            	<td width="100" align="center" class="c_666">新闻时间:</td>
                <td style="padding-top:8px; padding-bottom:8px;">
                	<input type="text" name="p_adddate" id="p_adddate" value="<?php echo $rowlist["p_adddate"]?>">
                </td>
            </tr>
            <tr style="height:35px; line-height:35px;">
            	<td width="100" align="center" class="c_666">新闻内容:</td>
                <td><textarea id="p_content" name="p_content"><?php echo $rowlist["p_content"]?></textarea></td>
            </tr>
            <tr style="height:35px; line-height:35px;">
            	<td width="100" align="center" class="c_666">新闻内容（英文）:</td>
                <td><textarea id="p_content_en" name="p_content_en"><?php echo $rowlist["p_content_en"]?></textarea></td>
            </tr>
            <tr style="height:35px; line-height:35px;">
            	<td width="100" align="center" class="c_666">图片浏览:</td>
                <td>
                	<table cellpadding="0" cellspacing="0" border="0">
                    	
                    	<tr>
                        	<td><input type="file" name="p_pic" id="p_pic" style="width:400px;"></td>
                            <?php
								if(!empty($rowlist["p_pic"]))
								{
							?>
                            <td style="padding-left:10px;"><?php echo $rowlist["p_pic"]?></td>
                            <td style="padding-left:10px;"><a href="pic_delete.php?p_id=<?php echo $rowlist["p_id"]?>&atction=news&pic=2&language=<?php echo $language?>">删除图片</a></td>
                            <?php
								}
							?>
                        </tr>
                        
                    </table>
                </td>
            </tr>
            <tr style="height:35px; line-height:35px;">
            	<td width="100" align="center" class="c_666">相关操作:</td>
                <td>
                	<table cellpadding="0" cellspacing="0">
                    	<tr>
                            <td><input type="checkbox" name="p_index" id="p_index" <?php if($rowlist["p_index"]==1){?>checked="checked"<?php }?>></td>
                            <td>首页</td>
                            <td style="display:none"><input type="checkbox" name="p_emphasis" id="p_emphasis" <?php if($rowlist["p_emphasis"]==1){?>checked="checked"<?php }?>></td>
                            <td style="display:none">重点</td>
                        </tr>
                    </table>
                </td>
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
		var _p_type=form.p_type.value;
		if(_p_type==0)
		{
			alert("请选择新闻类别");
			form.p_type.focus();
			return false;
		}

	}
</script>
</body>
