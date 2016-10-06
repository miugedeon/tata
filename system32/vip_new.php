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
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="17" valign="top" background="images/mail_leftbg.gif"><img src="images/left-top-right.gif" width="17" height="29" /></td>
    <td valign="top" background="images/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2">
      <tr>
        <td height="31" style="text-align:right; font-size:12px; color:#666;">当前位置:　网站后台 &gt 最新会员 </td>
      </tr>
    </table></td>
    <td width="16" valign="top" background="images/mail_rightbg.gif"><img src="images/nav-right-bg.gif" width="16" height="29" /></td>
  </tr>
  <tr>
    <td valign="middle" background="images/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" bgcolor="#F7F8F9">
    	<table width="100%" cellpadding="0" cellspacing="1" border="0" class="alltable" style="margin-top:20px;">
        	<tr style="height:35px; line-height:35px;">
            	<td width="5%" align="center"><strong>编号</strong></td>
                <td width="10%" align="center"><strong>用户名</strong></td>
                <td width="10%" align="center"><strong>真实姓名</strong></td>
                <td width="10%" align="center"><strong>注册时间</strong></td>
                <td width="10%" align="center"><strong>联系电话</strong></td>
                <td width="10%" align="center"><strong>电子邮件</strong></td>
                <td width="10%" align="center"><strong>状态</strong></td>
                <td width="10%" align="center"><strong>管理</strong></td>
            </tr>
            <?php
$language=$_GET["language"];
	$sql="select * from p_user where language='".$language."'";
	$num=$d->Execute($sql);
	if($num>0)
	{
		$pagesize=11;
		$pagecount=ceil($num/$pagesize);
	
		if(isset($_GET["page"]))
		{
			$page=$_GET["page"];
		}
		else
		{
			$page=1;
		}
		
		if($page=="")
		{
			$page=1;
		}
		if($page<=0)
		{
			$page=1;
		}
		if($page>$pagecount)
		{
			$page=$pagecount;
		}
		
		$offset=$pagesize*($page-1);
		
		if($offset==-6)
		{
			$offset=0;
		}
		
		$sql="select * from p_user where language='".$language."' order by p_id desc limit ".$offset.",".$pagesize."";
		$query=mysql_query($sql);
		while($row=mysql_fetch_array($query))
		{
			?>
            <tr style="height:25px; line-height:25px;">
            	<td width="5%" align="center"><span><?php echo $row["p_id"]?></span></td>
                <td width="10%" align="center"><span><?php echo $row["p_userName"]?></span></td>
                <td width="10%" align="center"><span><?php echo $row["p_RealName"]?></span></td>
                <td width="10%" align="center"><span><?php echo $row["date"]?></span></td>
                <td width="10%" align="center"><span><?php echo $row["p_tel"]?></span></td>
                <td width="10%" align="center"><span><?php echo $row["p_email"]?></span></td>
                <td width="10%" align="center">
                	<?php
                    	if($row["is_vip"]==1)
						{
					?>
                    <b><font color="#CC0033">√</font>
                    <?php
                    	}
						else
						{
					?>
                    
                    <?php
                    	}
					?>
                </td>
                <td width="10%" align="center"><span><a onClick="return confirm('您确认删除吗？')" href="vip_delete.php?p_id=<?php echo $row["p_id"]?>&language=<?php echo $language?>">删除</a>|<a href="vip_look.php?p_id=<?php echo $row["p_id"]?>&language=<?php echo $language?>">查看</a></span></td>
            </tr>
            
            
<?php
		}
?>

<tr>
	<td colspan="10" align="center">
		<table cellpadding="0" id="page" cellspacing="0" border="0" style="height:40px; line-height:40px; color:#333333;">
			<tr>
				<td>共有[<?php echo $num?>]个</td>
				<td width="10"></td>
				<td>共[<?php echo $page?>/<?php echo $pagecount?>]页</td>
				<td width="10"></td>
				<td><a href="?page=1&language=<?php echo $language?>">首页</a></td>
				<td width="5"></td>
				<td><a href="?page=<?php echo $page-1?>&language=<?php echo $language?>">上页</a></td>
				<td width="5"></td>
				<td><a href="?page=<?php echo $page+1?>&language=<?php echo $language?>">下页</a></td>
				<td width="5"></td>
				<td><a href="?page=<?php echo $pagecount?>&language=<?php echo $language?>">末页</a></td>
				<td width="5"></td>
				<td>转:</td>
				<td>
					<select name="goToPage" id="goToPage" onChange="GoPage()">
						<?php
							$i=1;
							while($i<=$pagecount)
							{
							if($_GET["page"]>=$i)
							{
								$selected="selected=selected";
							}
							else
							{
								$selected="";
							}
						?>
						<option <?php echo $selected?> value="<?php echo $i?>"><?php echo $i?></option>
						<?php
							$i++;
							}
						?>
					</select>
				</td>
				<td>页</td>
			</tr>
		</table>
	</td>
</tr>
<?php
	}
	else
	{
?>
<tr>
	<td colspan="10" style="height:300px; line-height:300px; text-align:center;">系统没有查询到相关数据信息</td>
</tr>
<?php
	}
?>            
            
            
            
            
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
</body>
