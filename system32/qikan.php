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
<title>news</title>
<body>

<form name="form" id="form" action="qikansc.php" method="post" enctype="multipart/form-data" target="_blank">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="17" valign="top" background="images/mail_leftbg.gif"><img src="images/left-top-right.gif" width="17" height="29" /></td>
    <td valign="top" background="images/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2">
      <tr>
        <td height="31" style="text-align:right; font-size:12px; color:#666;">当前位置:　网站后台 &gt 期刊生成(A) </td>
      </tr>
    </table></td>
    <td width="16" valign="top" background="images/mail_rightbg.gif"><img src="images/nav-right-bg.gif" width="16" height="29" /></td>
  </tr>
  <tr>
    <td valign="middle" background="images/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" bgcolor="#F7F8F9">
    	<div><strong>基本设置：</strong></div>
        <?php
		$sql="select p_num from p_qikan order by p_id desc limit 1";
		$query=$d->Query($sql);
		$row=mysql_fetch_array($query);
		$qnum=(int)$row['p_num']+1;
		?>
        <div style="float:left;">期刊数：第<input type="text" name="qnum" id="qnum" value="<?php echo $qnum; ?>" width="3" style="width:50px;">期</div>
        <div style="float:left;margin-left:20px;">背景颜色：#<input type="text" name="bgcolor" id="bgcolor" value="44aded" maxlength="6" style="width:100px;"></div>
        <div style="float:left;margin-left:20px;">网站域名：<input type="text" name="weburl" id="weburl" value="http://mu.pp86.net" style="width:250px;"><span style="color:red;">*结尾不需要' / '，一般不需更改，改动会导致图片显示不正确</span></div>
        <div style="clear:both;margin-top:30px;"><strong>内容设置：</strong></div>
        <div style="margin-top:10px;">顶部图片<span style="color:red;">(宽度：760px * 105px)</span>:<input type="file" name="toppic" id="toppic" ></div>
        <div style="clear:both;margin-top:30px;"><strong>栏目一内容设置：</strong></div>
        <div style="margin-top:10px;">栏目一标题图片<span style="color:red;">(宽度：730px)</span>:<input type="file" name="l1titpic" id="l1titpic" ></div>
        <div style="margin-top:10px;">栏目一焦点新闻标题:<input type="text" name="l1focustit" id="l1focustit" style="width:500px;">---新闻链接:<input type="text" name="l1focuslink" id="l1focuslink" style="width:500px;"></div>
         <div style="margin-top:10px;">栏目一焦点新闻简要内容:<input type="text" name="l1focuscon" id="l1focuscon" style="width:500px;">---栏目一焦点新闻图片:<input type="file" name="l1focuspic" id="l1focuspic"><span style="color:red;">(图片尺寸：370px * 240px)</span></div>
         <div style="margin-top:10px;">
             栏目一列表新闻标题1:<input type="text" name="l1list1" id="l1list1" style="width:500px;">---栏目一列表新闻链接1:<input type="text" name="l1link1" id="l1link1" style="width:300px;"><br>
             栏目一列表新闻标题2:<input type="text" name="l1list2" id="l1list2" style="width:500px;">---栏目一新闻列表链接2:<input type="text" name="l1link2" id="l1link2" style="width:300px;"><br>
             栏目一列表新闻标题3:<input type="text" name="l1list3" id="l1list3" style="width:500px;">---栏目一新闻列表链接3:<input type="text" name="l1link3" id="l1link3" style="width:300px;"><br>
             栏目一列表新闻标题4:<input type="text" name="l1list4" id="l1list4" style="width:500px;">---栏目一新闻列表链接4:<input type="text" name="l1link4" id="l1link4" style="width:300px;"><br>
             栏目一列表新闻标题5:<input type="text" name="l1list5" id="l1list5" style="width:500px;">---栏目一新闻列表链接5:<input type="text" name="l1link5" id="l1link5" style="width:300px;">
         </div>
         <div style="margin-top:10px;">
             栏目一精彩推荐标题1:<input type="text" name="l1rec1" id="l1rec1" style="width:500px;">---栏目一精彩推荐链接1:<input type="text" name="l1reclink1" id="l1reclink1" style="width:300px;"><br>
             栏目一精彩推荐标题2:<input type="text" name="l1rec2" id="l1rec2" style="width:500px;">---栏目一精彩推荐链接2:<input type="text" name="l1reclink2" id="l1reclink2" style="width:300px;"><br>
             栏目一精彩推荐标题3:<input type="text" name="l1rec3" id="l1rec3" style="width:500px;">---栏目一精彩推荐链接3:<input type="text" name="l1reclink3" id="l1reclink3" style="width:300px;"><br>
         </div>
         <div style="clear:both;margin-top:30px;"><strong>栏目二内容设置：</strong></div>
         <div style="margin-top:10px;">栏目二标题图片<span style="color:red;">(宽度：730px)</span>:<input type="file" name="l2titpic" id="l2titpic" ></div>
         <div style="margin-top:10px;">栏目二焦点新闻标题:<input type="text" name="l2focustit" id="l2focustit" style="width:500px;">---新闻链接:<input type="text" name="l2focuslink" id="l2focuslink" style="width:500px;"></div>
         <div style="margin-top:10px;">栏目二焦点新闻简要内容:<input type="text" name="l2focuscon" id="l2focuscon" style="width:500px;">---栏目二焦点新闻图片:<input type="file" name="l2focuspic" id="l2focuspic"><span style="color:red;">(图片尺寸：280px * 180px)</span></div>
         <div style="margin-top:10px;">
             栏目二列表新闻标题1:<input type="text" name="l2list1" id="l2list1" style="width:500px;">---栏目二列表新闻链接1:<input type="text" name="l2link1" id="l2link1" style="width:300px;"><br>
             栏目二列表新闻标题2:<input type="text" name="l2list2" id="l2list2" style="width:500px;">---栏目二新闻列表链接2:<input type="text" name="l2link2" id="l2link2" style="width:300px;"><br>
             栏目二列表新闻标题3:<input type="text" name="l2list3" id="l2list3" style="width:500px;">---栏目二新闻列表链接3:<input type="text" name="l2link3" id="l2link3" style="width:300px;"><br>
             栏目二列表新闻标题4:<input type="text" name="l2list4" id="l2list4" style="width:500px;">---栏目二新闻列表链接4:<input type="text" name="l2link4" id="l2link4" style="width:300px;">
         </div>
         <div style="clear:both;margin-top:30px;"><strong>底部内容：</strong></div>
         <div style="margin-top:10px;">底部广告图片<span style="color:red;">(宽度：730px)</span>:<input type="file" name="adpic" id="adpic" ></div>
         
         <div style="margin-top:10px;">底部文章标题:<input type="text" name="footeratctit" id="footeratctit" style="width:500px;">---文章链接:<input type="text" name="footeratclink" id="footeratclink" style="width:300px;"></div>
         <div style="margin-top:10px;">底部文章简要内容:<input type="text" name="footeratccon" id="footeratccon" style="width:500px;"></div>
         <div style="clear:both;margin-top:30px;text-align:center"><input type="submit" id="preview" name="preview" value="预览"></div>
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
