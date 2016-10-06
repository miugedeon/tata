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
<title>news</title><body>
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
	$p_adddate=date("Y-m-d");
	if(isset($_GET["state"]))
	{
		$p_type=$_POST["p_type"];
		$p_title=$_POST["p_title"];
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
		
		
		$sql1="insert into p_news";
		$sql2="(";
		$sql3="";
		$sql4=")";
		$sql5=" values";
		$sql6="(";
		$sql7="";
		$sql8=")";
		
		$sql3=$sql3."p_type";
		$sql7=$sql7."".$p_type."";
		
		$sql3=$sql3.",p_title";
		$sql7=$sql7.",'".$p_title."'";
		
		$sql3=$sql3.",p_title_en";
		$sql7=$sql7.",'".$p_title_en."'";
		
		$sql3=$sql3.",p_simple";
		$sql7=$sql7.",'".$p_simple."'";
		
		$sql3=$sql3.",p_key";
		$sql7=$sql7.",'".$p_key."'";
		
		$sql3=$sql3.",p_label";
		$sql7=$sql7.",'".$p_label."'";
		
		$sql3=$sql3.",p_content";
		$sql7=$sql7.",'".$p_content."'";
		
		$sql3=$sql3.",p_content_en";
		$sql7=$sql7.",'".$p_content_en."'";
		
		$sql3=$sql3.",p_index";
		$sql7=$sql7.",".$p_index."";
		
		$sql3=$sql3.",p_emphasis";
		$sql7=$sql7.",".$p_emphasis."";
		
		$sql3=$sql3.",p_adddate";
		$sql7=$sql7.",'".$p_adddate."'";
		
		$sql3=$sql3.",p_admin";
		$sql7=$sql7.",'".$_SESSION["admin"]."'";
		
		$sql3=$sql3.",language";
		$sql7=$sql7.",'".$language."'";
		
		$p_pic=$_FILES["p_pic"];
		if($p_pic["size"]!=0)
		{
			include("../common/myfile.php");
			$fileName=date("Ymdhis").mt_rand(0,9);
			$f=new myfile($fileName,$p_pic,"../upload/news/");
			if($f->type())
			{
				$f->upload();
				$sql3=$sql3.",p_pic";
				$sql7=$sql7.",'".$f->fileName()."'";
			}
		}
		$sql=$sql1.$sql2.$sql3.$sql4.$sql5.$sql6.$sql7.$sql8;
		$d->Admin($_SESSION["admin"],"添加成功",$sql,"news_add.php?language=".$language."");
	}
?>
<form name="form" id="form" action="news_add.php?state=add" method="post" enctype="multipart/form-data">
<input type="hidden" name="language" id="language" value="<?php echo $language?>">
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
            	<td width="100" align="center" class="c_666">新闻标题:</td>
                <td><input type="text" name="p_title" id="p_title" style="width:638px;"></td>
            </tr>
            <tr style="height:35px; line-height:35px;">
            	<td width="100" align="center" class="c_666">新闻标题（英文）:</td>
                <td><input type="text" name="p_title_en" id="p_title_en" style="width:638px;"></td>
            </tr>
            <tr style="height:35px; line-height:35px;display:none;">
            	<td width="100" align="center" class="c_666">新闻简概:</td>
                <td style="padding-top:8px; padding-bottom:8px;">
                	<textarea name="p_simple" id="p_simple" rows="3" cols="103"></textarea>
                </td>
            </tr>
            <tr style="height:35px; line-height:35px;display:none;">
            	<td width="100" align="center" class="c_666">关键字:</td>
                <td style="padding-top:8px; padding-bottom:8px;"><textarea name="p_key" id="p_key" rows="3" cols="103"></textarea></td>
            </tr>
            <tr style="height:35px; line-height:35px;display:none;">
            	<td width="100" align="center" class="c_666">搜索标签:</td>
                <td style="padding-top:8px; padding-bottom:8px;"><textarea name="p_label" id="p_label" rows="3" cols="103"></textarea></td>
            </tr>
            <tr style="height:35px; line-height:35px;">
            	<td width="100" align="center" class="c_666">新闻时间:</td>
                <td style="padding-top:8px; padding-bottom:8px;">
                	<input type="text" name="p_adddate" id="p_adddate" value="<?php echo $p_adddate?>">
                </td>
            </tr>
            <tr style="height:35px; line-height:35px;">
            	<td width="100" align="center" class="c_666">新闻内容:</td>
                <td><textarea id="p_content" name="p_content"></textarea></td>
            </tr>
            <tr style="height:35px; line-height:35px;">
            	<td width="100" align="center" class="c_666">新闻内容（英文）:</td>
                <td><textarea id="p_content_en" name="p_content_en"></textarea></td>
            </tr>
            <tr style="height:35px; line-height:35px;">
            	<td width="100" align="center" class="c_666">图片浏览:</td>
                <td><input type="file" name="p_pic" id="p_pic" style="width:400px;"></td>
            </tr>
            <tr style="height:35px; line-height:35px;">
            	<td width="100" align="center" class="c_666">相关操作:</td>
                <td>
                	<table cellpadding="0" cellspacing="0">
                    	<tr>
                            <td><input type="checkbox" name="p_index" id="p_index"></td>
                            <td>首页</td>
                            <td style="display:none"><input type="checkbox" name="p_emphasis" id="p_emphasis"></td>
                            <td style="display:none">重点</td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr>
            	<td align="center" colspan="2" height="60">
                	<input type="submit" name="send" id="send" value="添加(A)" class="but_60" onClick="return check()">
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
