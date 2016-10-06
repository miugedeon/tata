<?php include_once("config.php")?>
<link href="images/skin.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" /><style type="text/css">
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
height : '500px'
});
</script>
<?php
	$language="";
	if(isset($_GET["language"]))
	{
		$language.=$_GET["language"];
	}
	
	if(isset($_GET["state"]))
	{
		$language=$_POST["language"];//语言
		$p_bigtype=$_POST["p_bigtype"];//大类别ID
		$p_smalltype=$_POST["p_smalltype"];//小类别ID
		$p_sort=$_POST["p_sort"];//产品排序
		$p_productname=$_POST["p_productname"];;//产品名称
		$p_content=$_POST["p_content"];//产品说明
		
		$p_file1=$_POST["p_file1"];
		$p_file2=$_POST["p_file2"];
		$p_file3=$_POST["p_file3"];
		
		$sql1="insert into p_area2";
		$sql2="(";
		$sql4=")";
		$sql5=" values";
		$sql6="(";
		$sql8=")";
		
		$sql3="p_bigtype";
		$sql7="".$p_bigtype."";
		
		$sql3=$sql3.",p_smalltype";
		$sql7=$sql7.",".$p_smalltype."";
		
		$sql3=$sql3.",p_sort";
		$sql7=$sql7.",".$p_sort."";
		
		$sql3=$sql3.",p_productname";
		$sql7=$sql7.",'".$p_productname."'";
		
		$sql3=$sql3.",p_file1";
		$sql7=$sql7.",'".$p_file1."'";
		
		$sql3=$sql3.",p_file2";
		$sql7=$sql7.",'".$p_file2."'";
		
		$sql3=$sql3.",p_file3";
		$sql7=$sql7.",'".$p_file3."'";
		
		$sql3=$sql3.",p_content";
		$sql7=$sql7.",'".$p_content."'";
		
		$sql3=$sql3.",language";
		$sql7=$sql7.",'".$language."'";
		$sql=$sql1.$sql2.$sql3.$sql4.$sql5.$sql6.$sql7.$sql8;
		$d->Admin($_SESSION["admin"],"添加成功",$sql,"area_add.php?language=".$language."");
	}
?>
<form name="form" id="form" action="area2_add.php?state=add" method="post" enctype="multipart/form-data">
<input type="hidden" name="language" id="language" value="<?php echo $language?>">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="17" valign="top" background="images/mail_leftbg.gif"><img src="images/left-top-right.gif" width="17" height="29" /></td>
    <td valign="top" background="images/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2">
      <tr>
        <td height="31" style="text-align:right; font-size:12px; color:#666;">当前位置:　网站后台 &gt 地区添加(A) </td>
      </tr>
    </table></td>
    <td width="16" valign="top" background="images/mail_rightbg.gif"><img src="images/nav-right-bg.gif" width="16" height="29" /></td>
  </tr>
  <tr>
    <td valign="middle" background="images/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" bgcolor="#F7F8F9">
    	<table width="100%" cellpadding="0" cellspacing="1" border="0" class="alltable" style="margin-top:20px;">
        	<tr style="height:35px; line-height:35px;">
            	<td width="100" align="center" class="c_666">区域目录:</td>
                <td>
                	<table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td style="border-right:#BAD6EC 1px solid; height:35px; line-height:35px; text-align:center; width:150px;">
                            <select name="p_bigtype" id="p_bigtype" onChange="bigtype()">
                    			<option value="0">请选择区域目录</option>
                                <?php
                                	$sql="select * from p_area2_type where p_bigtype=0 and language='".$language."'";
									$array=$d->Query($sql);
									$select="";
									while($row=mysql_fetch_array($array))
									{
										if(isset($_GET["p_bigtype"]))
										{
											$p_bigtype=$_GET["p_bigtype"];
											if($p_bigtype==$row["p_id"])
											{
												$select="selected='selected'";
											}
											else
											{
												$select="";
											}
										}
								?>
                                <option value="<?php echo $row["p_id"]?>" <?php echo $select?>><?php echo $row["p_title"]?></option>
                                <?php
                                	}
								?>
                    		</select>
                    		</td>
                            <td width="100" align="center" style="border-right:#BAD6EC 1px solid;" class="c_666">地区目录</td>
                            <td width="150" align="center" style="border-right:#BAD6EC 1px solid;">
                            	<select name="p_smalltype" id="p_smalltype">
                                    <option value="0">请选择地区目录</option>
                                    <?php
                                    	if(isset($_GET["p_bigtype"]))
										{
											$select="";
											$p_bigtype=$_GET["p_bigtype"];
											$sql="select * from p_area2_type where p_bigtype=".$p_bigtype."";
											$array=$d->Query($sql);
											while($row=mysql_fetch_array($array))
											{
									?>
                                    <!--------------------------------------------------------------------->
                                    		<option value="<?php echo $row["p_id"]?>"><?php echo $row["p_title"]?></option>
                                    <!--------------------------------------------------------------------->
                                    <?php
											}
                                    	}
									?>
                                </select>
                            </td>
                            <td width="100" align="center" style="border-right:#BAD6EC 1px solid;" class="c_666">排序:</td>
                            <td width="150" align="center" style="border-right:#BAD6EC 1px solid;">
                            	<?php
                                	$sql="select * from p_area2 where language='".$language."' order by p_sort desc limit 0,1";
									$array=$d->Query($sql);
									$sort="";
									$row=mysql_fetch_array($array);
									$sort=$row["p_sort"]+1;
								?>
                            	<input type="text" name="p_sort" id="p_sort" style="width:80px;" value="<?php echo $sort?>">
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr style="height:35px; line-height:35px;">
            	<td align="center" class="c_666">地区名称:</td>
                <td style="padding-left:19px;"><input type="text" name="p_productname" id="p_productname" style="width:638px;"></td>
            </tr>
            
            <tr style="height:35px; line-height:35px;">
            	<td align="center" class="c_666">地址:</td>
                <td style="padding-left:19px;"><input type="text" name="p_file1" id="p_file1" style="width:638px;"></td>
            </tr>
            
            <tr style="height:35px; line-height:35px;">
            	<td align="center" class="c_666">联系人:</td>
                <td style="padding-left:19px;"><input type="text" name="p_file2" id="p_file2" style="width:638px;"></td>
            </tr>
            
            <tr style="height:35px; line-height:35px;">
            	<td align="center" class="c_666">电话:</td>
                <td style="padding-left:19px;"><input type="text" name="p_file3" id="p_file3" style="width:638px;"></td>
            </tr>
            
            <tr style="height:35px; line-height:35px;">
            	<td align="center" class="c_666">地区明细:</td>
                <td style="padding-left:19px; padding-right:20px; padding-top:10px; padding-bottom:10px;"><textarea id="p_content" name="p_content"></textarea></td>
            </tr>
            <tr>
            	<td colspan="2" align="center">
                	<table cellpadding="0" cellspacing="0" height="80">
                    	<tr>
                        	<td><input type="submit" name="" id="" value="添加(A)" class="but_60"></td>
                            <td width="10"></td>
                            <td><input type="reset" name="" id="" value="重填(R)" class="but_60"></td>
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
</body>

<script language="javascript">
	function bigtype()
	{
		var _p_bigtype=form.p_bigtype.value;
		window.location.href="area2_add.php?p_bigtype="+_p_bigtype+"&language=<?php echo $language?>";
	}
</script>
