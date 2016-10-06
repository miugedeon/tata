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

KE.show({
id : 'p_content2',
width : '100%',
height : '300px'
});

KE.show({
id : 'p_content2_en',
width : '100%',
height : '300px'
});
</script>
<?php
	$uploadPicWidth_b=800;
	$uploadPicHeight_b=595;
	
	$uploadPicWidth_s=195;
	$uploadPicHeight_s=145;

	$language="";
	if(!isset($p_bigtype)) $p_bigtype=0;
	if(isset($_GET["language"]))
	{
		$language.=$_GET["language"];
	}
	
	if(isset($_GET["state"]))
	{
		$language=$_POST["language"];//语言
		$p_bigtype=$_POST["p_bigtype"];//大类别ID
		$p_smalltype=$_POST["p_smalltype"];//小类别ID
		$p_ssmalltype=$_POST["p_ssmalltype"];//三级子栏目
		$p_sort=$_POST["p_sort"];//产品排序
		$p_productname=addslashes($_POST["p_productname"]);//产品名称
		$p_productname_en=addslashes($_POST["p_productname_en"]);//产品英文名称
		$p_file1=addslashes($_POST["p_file1"]);
		$p_file2=addslashes($_POST["p_file2"]);
		$p_file3=addslashes($_POST["p_file3"]);
		$p_file4=addslashes($_POST["p_file4"]);
		$p_file5=addslashes($_POST["p_file5"]);
		$p_file6=addslashes($_POST["p_file6"]);
		$p_file7=addslashes($_POST["p_file7"]);
		$p_file8=addslashes($_POST["p_file8"]);
		$p_content=addslashes($_POST["p_content"]);//产品说明
		$p_content_en=addslashes($_POST["p_content_en"]);//产品说明
		$p_content2=addslashes($_POST["p_content2"]);//产品说明
		$p_content2_en=addslashes($_POST["p_content2_en"]);//产品说明
		$p_pic1_name="";//第一图片
		$p_pic2_name="";//第二图片
		$p_pic3_name="";//第三图片
		$p_pic4_name="";//第四图片
		$p_pic5_name="";//第五图片
		$p_adddate=date("Y-m-d");
		$p_index="";
		if(isset($_POST["p_index"])){$p_index=1;}else{$p_index=0;}
		$p_vip="";
		if(isset($_POST["p_vip"])){$p_vip=1;}else{$p_vip=0;}
		$p_adddate=date("Y-m-d");
		
		$sql1="insert into p_product";
		$sql2="(";
		$sql4=")";
		$sql5=" values";
		$sql6="(";
		$sql8=")";
		
		$sql3="p_bigtype";
		$sql7="".$p_bigtype."";
		
		$sql3=$sql3.",p_smalltype";
		$sql7=$sql7.",".$p_smalltype."";
		
		$sql3=$sql3.",p_ssmalltype";
		$sql7=$sql7.",".$p_ssmalltype."";
		
		$sql3=$sql3.",p_sort";
		$sql7=$sql7.",".$p_sort."";
		
		$sql3=$sql3.",p_productname";
		$sql7=$sql7.",'".$p_productname."'";
		
		$sql3=$sql3.",p_productname_en";
		$sql7=$sql7.",'".$p_productname_en."'";
		
		$sql3=$sql3.",p_file1";
		$sql7=$sql7.",'".$p_file1."'";
		
		$sql3=$sql3.",p_file2";
		$sql7=$sql7.",'".$p_file2."'";
		
		$sql3=$sql3.",p_file3";
		$sql7=$sql7.",'".$p_file3."'";
		
		$sql3=$sql3.",p_file4";
		$sql7=$sql7.",'".$p_file4."'";
		
		$sql3=$sql3.",p_file5";
		$sql7=$sql7.",'".$p_file5."'";
		
		$sql3=$sql3.",p_file6";
		$sql7=$sql7.",'".$p_file6."'";
		
		$sql3=$sql3.",p_file7";
		$sql7=$sql7.",'".$p_file7."'";
		
		$sql3=$sql3.",p_file8";
		$sql7=$sql7.",'".$p_file8."'";
		
		$sql3=$sql3.",p_content";
		$sql7=$sql7.",'".$p_content."'";

		$sql3=$sql3.",p_content_en";
		$sql7=$sql7.",'".$p_content_en."'";
		
		$sql3=$sql3.",p_content2";
		$sql7=$sql7.",'".$p_content2."'";
		
		$sql3=$sql3.",p_content2_en";
		$sql7=$sql7.",'".$p_content2_en."'";
		
		include_once("inc/product/upload.php");
		$sql3=$sql3.",p_pic1";
		$sql7=$sql7.",'".$p_pic1_name."'";
		
		$sql3=$sql3.",p_pic_s1";
		$sql7=$sql7.",'".$p_pic_s1_name."'";
		
		$sql3=$sql3.",p_pic2";
		$sql7=$sql7.",'".$p_pic2_name."'";
		
		$sql3=$sql3.",p_pic_s2";
		$sql7=$sql7.",'".$p_pic_s2_name."'";
		
		$sql3=$sql3.",p_pic3";
		$sql7=$sql7.",'".$p_pic3_name."'";
		
		$sql3=$sql3.",p_pic_s3";
		$sql7=$sql7.",'".$p_pic_s3_name."'";
		
		$sql3=$sql3.",p_pic4";
		$sql7=$sql7.",'".$p_pic4_name."'";
		
		$sql3=$sql3.",p_pic5";
		$sql7=$sql7.",'".$p_pic5_name."'";
		
		$sql3=$sql3.",p_index";
		$sql7=$sql7.",".$p_index."";
		
		$sql3=$sql3.",p_vip";
		$sql7=$sql7.",".$p_vip."";
		
		
		$sql3=$sql3.",p_adddate";
		$sql7=$sql7.",'".$p_adddate."'";
		
		$sql3=$sql3.",p_admin";
		$sql7=$sql7.",'".$_SESSION["admin"]."'";
		
		$sql3=$sql3.",language";
		$sql7=$sql7.",'".$language."'";
		$sql=$sql1.$sql2.$sql3.$sql4.$sql5.$sql6.$sql7.$sql8;
		//echo $sql;
		$d->Admin($_SESSION["admin"],"添加成功",$sql,"product_add.php?language=".$language."");
	}
?>
<form name="form" id="form" action="product_add.php?state=add" method="post" enctype="multipart/form-data">
<input type="hidden" name="language" id="language" value="<?php echo $language?>">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="17" valign="top" background="images/mail_leftbg.gif"><img src="images/left-top-right.gif" width="17" height="29" /></td>
    <td valign="top" background="images/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2">
      <tr>
        <td height="31" style="text-align:right; font-size:12px; color:#666;">当前位置:　网站后台 &gt 产品添加(A) </td>
      </tr>
    </table></td>
    <td width="16" valign="top" background="images/mail_rightbg.gif"><img src="images/nav-right-bg.gif" width="16" height="29" /></td>
  </tr>
  <tr>
    <td valign="middle" background="images/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" bgcolor="#F7F8F9">
    	<table width="100%" cellpadding="0" cellspacing="1" border="0" class="alltable" style="margin-top:20px;">
        	<tr style="height:35px; line-height:35px;">
            	<td width="100" align="center" class="c_666">一级目录:</td>
                <td>
                	<table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td style="border-right:#BAD6EC 1px solid; height:35px; line-height:35px; text-align:center; width:150px;">
                            <select name="p_bigtype" id="p_bigtype" onChange="bigtype();">
                    			<option value="0">请选择一级目录</option>
                                <?php
                                	$sql="select * from p_product_type where p_bigtype=0 and language='".$language."'";
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
                            <td width="100" align="center" style="border-right:#BAD6EC 1px solid;" class="c_666">二级目录</td>
                            <td width="150" align="center" style="border-right:#BAD6EC 1px solid;">
                            	<select name="p_smalltype" id="p_smalltype" onChange="smalltype();">
                                    <option value="0">请选择二级目录</option>
                                    <?php
                                    	if(isset($_GET["p_bigtype"]))
										{
											$select="";
											$sql="select * from p_product_type where p_bigtype=".$p_bigtype." and p_secondtype=0";
											$array=$d->Query($sql);
											while($row=mysql_fetch_array($array))
											{
												if(isset($_GET["p_smalltype"]))
												{
													$p_smalltype=$_GET["p_smalltype"];
													if($p_smalltype==$row["p_id"])
													{
														$select="selected='selected'";
													}
													else
													{
														$select="";
													}
												}
									?>
                                    <!--------------------------------------------------------------------->
                                    		<option value="<?php echo $row["p_id"]?>" <?php echo $select?>><?php echo $row["p_title"]?></option>
                                    <!--------------------------------------------------------------------->
                                    <?php
											}
                                    	}
									?>
                                </select>
                            </td>
                            <td width="100" align="center" style="border-right:#BAD6EC 1px solid;" class="c_666">三级目录</td>
                            <td width="150" align="center" style="border-right:#BAD6EC 1px solid;">
                            	<select name="p_ssmalltype" id="p_ssmalltype">
                                    <option value="0">请选择三级目录</option>
                                    <?php
                                    	if(isset($_GET["p_smalltype"]))
										{
											$select="";
											$p_smalltype=$_GET["p_smalltype"];
											$sql="select * from p_product_type where p_secondtype=".$p_smalltype."";
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
                            
                            <td width="100" align="center" style="border-right:#BAD6EC 1px solid;" class="c_666">产品排序:</td>
                            <td width="150" align="center" style="border-right:#BAD6EC 1px solid;">
                            	<?php
                                	$sql="select * from p_product where language='".$language."' order by p_sort desc limit 0,1";
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
            <tr style="height:35px; line-height:35px;display:none;">
            	<td align="center" class="c_666">产品型号:</td>
                <td style="padding-left:19px;"><input type="text" name="p_file2" id="p_file2" style="width:638px;"></td>
            </tr> 
            <tr style="height:35px; line-height:35px;">
            	<td align="center" class="c_666">产品名称:</td>
                <td style="padding-left:19px;"><input type="text" name="p_productname" id="p_productname" style="width:638px;"></td>
            </tr> 
            <tr style="height:35px; line-height:35px;">
            	<td align="center" class="c_666">产品名称（英文）:</td>
                <td style="padding-left:19px;"><input type="text" name="p_productname_en" id="p_productname_en" style="width:638px;"></td>
            </tr>                
            <tr style="height:35px; line-height:35px;display:none;">
            	<td align="center" class="c_666">产品价格:</td>
                <td style="padding-left:19px;"><input type="text" name="p_file4" id="p_file4" style="width:638px;"></td>
            </tr>  
            <tr style="height:35px; line-height:35px;">
            	<td align="center" class="c_666">产品参数:</td>
                <td style="padding-left:19px; padding-right:20px; padding-top:10px; padding-bottom:10px;"><textarea id="p_content" name="p_content"></textarea></td>
            </tr>
            <tr style="height:35px; line-height:35px;">
            	<td align="center" class="c_666">产品说明:</td>
                <td style="padding-left:19px; padding-right:20px; padding-top:10px; padding-bottom:10px;"><textarea id="p_content2" name="p_content2"></textarea></td>
            </tr>
             <tr style="height:35px; line-height:35px;">
            	<td align="center" class="c_666">产品参数（英文）:</td>
                <td style="padding-left:19px; padding-right:20px; padding-top:10px; padding-bottom:10px;"><textarea id="p_content_en" name="p_content_en"></textarea></td>
            </tr>
            <tr style="height:35px; line-height:35px;">
            	<td align="center" class="c_666">产品说明（英文）:</td>
                <td style="padding-left:19px; padding-right:20px; padding-top:10px; padding-bottom:10px;"><textarea id="p_content2_en" name="p_content2_en"></textarea></td>
            </tr>
            <tr style="height:35px; line-height:35px;display:none;">
            	<td align="center" class="c_666">淘宝链接:</td>
                <td style="padding-left:19px; padding-right:20px; padding-top:10px; padding-bottom:10px;"><input type="text" name="p_file1" id="p_file1" style="width:638px;" value="http://"></td>
            </tr>
            <tr style="height:35px; line-height:35px;">
            	<td align="center" class="c_666">产品图片1:</td>
                <td style="padding-left:19px;"><input type="file" name="p_pic1" id="p_pic1" style="width:400px;"><span style="color:red;">&nbsp;&nbsp;*产品图片尺寸为：800px*640px</span></td>
            </tr>
			<tr style="height:35px; line-height:35px;">
            	<td align="center" class="c_666">产品图片2:</td>
                <td style="padding-left:19px;"><input type="file" name="p_pic2" id="p_pic2" style="width:400px;"><span style="color:red;">&nbsp;&nbsp;*产品图片尺寸为：800px*640px</span></td>
            </tr>
           
            <tr style="height:35px; line-height:35px;">
            	<td align="center" class="c_666">产品大图3:</td>
                <td style="padding-left:19px;"><input type="file" name="p_pic3" id="p_pic3" style="width:400px;"><span style="color:red;">&nbsp;&nbsp;*产品图片尺寸为：800px*640px</span></td>
            </tr>
            <tr style="height:35px; line-height:35px;display:none;">
            	<td align="center" class="c_666">产品大图3:</td>
                <td style="padding-left:19px;"><input type="file" name="p_pic4" id="p_pic4" style="width:400px;"></td>
            </tr>
            <tr style="height:35px; line-height:35px; display:none;">
            	<td align="center" class="c_666">产品大图4:</td>
                <td style="padding-left:19px;"><input type="file" name="p_pic5" id="p_pic5" style="width:400px;"></td>
            </tr>
            
            <tr style="height:35px; line-height:35px;display:none;">
            	<td align="center" class="c_666">参与活动:</td>
                <td style="padding-left:19px;"><input name="p_file3" type="text" id="p_file3" style="width:638px;" readonly="readonly" onFocus="showFunctionsBox()" ></td>
            </tr> 
            
            <tr style="height:35px; line-height:35px;">
            	<td align="center" class="c_666">相关操作:</td>
                <td style="padding-left:15px;">
                	<table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td><input type="checkbox" name="p_index" id="p_index" value="1" onClick="showpic2();"></td>
                            <td class="c_666">新品推荐</td>
                            <td style="display:none;"><input type="checkbox" name="p_vip" id="p_vip" value="1"></td>
                            <td style="display:none;" class="c_666">主要</td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr id="ppp" style="height:35px; line-height:35px;display:none;">
            	<td align="center" class="c_666">首页图片:</td>
                <td style="padding-left:19px;"><input type="file" name="p_pic5" id="p_pic5" style="width:400px;"><span style="color:red;">&nbsp;&nbsp;*产品图片尺寸为：315px*120px</span></td>
            </tr>
            
            <tr>
            	<td colspan="2" align="center">
                	<table cellpadding="0" cellspacing="0" height="80">
                    	<tr>
                        	<td><input type="submit" name="" id="" value="添加(A)" class="but_60" onClick="return check()"></td>
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
<div id="functionBox" style="width:100px;background:#fff;border:1px solid #0CF;padding:5px;position:absolute;left:140px;top:780px;z-index:999;display:none;">
<div id="checkboxs">
<?php
$sql="select * from p_product_function where language='cn'";
$query=$d->Query($sql);
while($row=mysql_fetch_array($query)){
?>
<input type="checkbox" name="function[]" value="<?php echo $row[p_id]; ?>" class="function"><?php echo $row[p_title]; ?><br>
<?php
}
?>
</div>
<br>
<input type="button" id="FunctionOk" name="FunctionOk" value="确定" onClick="FunctionFill()" />&nbsp;<input type="button" id="FunctionCancel" name="FunctionCancel" value="取消" onClick="hideFunctionBox()" />
</div>
</body>

<script language="javascript">
	function bigtype()
	{
		var _p_bigtype=form.p_bigtype.value;
		window.location.href="product_add.php?p_bigtype="+_p_bigtype+"&language=<?php echo $language?>";
	}
	function smalltype()
	{
		var _p_smalltype=form.p_smalltype.value;
		window.location.href="product_add.php?p_bigtype=<?php echo $p_bigtype; ?>&p_smalltype="+_p_smalltype+"&language=<?php echo $language?>";
	}
	
	function showFunctionsBox(){
		var FunBox=document.getElementById('functionBox');	
		FunBox.style.display='block';
	}
	function hideFunctionBox(){
		var FunBox=document.getElementById('functionBox');	
		FunBox.style.display='none';
	}
	function FunctionFill(){
		var fillTxt='|';
		var p_file3=document.getElementById('p_file3');	
		var checkboxs=document.getElementById('checkboxs').getElementsByTagName('input');
		for(var i=0;i<checkboxs.length;i++){
			if(checkboxs[i].checked){
				fillTxt+=checkboxs[i].value+'|';	
			}	
		}
		p_file3.value=fillTxt;
		hideFunctionBox()
	}
	function showpic2(){
		if(document.getElementById('p_index').checked){

			document.getElementById('ppp').style.display='block';
		}else{
			document.getElementById('ppp').style.display='none';
		}
	}
</script>
<script language="javascript" src="js/product_add.js"></script>
