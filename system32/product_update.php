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


	if(!isset($p_bigtype)) $p_bigtype=0;
	if(isset($_GET["state"]))
	{
		$p_id=$_POST["p_id"];
		$language=$_POST["language"];//语言
		$p_bigtype=$_POST["p_bigtype"];//大类别ID
		$p_smalltype=$_POST["p_smalltype"];//小类别ID
		$p_ssmalltype=$_POST["p_ssmalltype"];//三级子栏目
		$p_sort=$_POST["p_sort"];//产品排序
		$p_productname=addslashes($_POST["p_productname"]);//产品名称
		$p_productname_en=addslashes($_POST["p_productname_en"]);//产品名称
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

		$p_adddate=date("Y-m-d");
		$p_index="";
		if(isset($_POST["p_index"])){$p_index=1;}else{$p_index=0;}
		$p_vip="";
		if(isset($_POST["p_vip"])){$p_vip=1;}else{$p_vip=0;}
		$p_adddate=date("Y-m-d");
		
		$sql="";
		$sql="update p_product set p_bigtype=".$p_bigtype.",p_smalltype=".$p_smalltype.",p_ssmalltype=".$p_ssmalltype.",p_sort=".$p_sort."";
		$sql=$sql.",p_productname='".$p_productname."'";
		$sql=$sql.",p_productname_en='".$p_productname_en."'";
		$sql=$sql.",p_file1='".$p_file1."'";
		$sql=$sql.",p_file2='".$p_file2."'";
		$sql=$sql.",p_file3='".$p_file3."'";
		$sql=$sql.",p_file4='".$p_file4."'";
		$sql=$sql.",p_file5='".$p_file5."'";
		$sql=$sql.",p_file6='".$p_file6."'";
		$sql=$sql.",p_file7='".$p_file7."'";
		$sql=$sql.",p_file8='".$p_file8."'";
		$sql=$sql.",p_content='".$p_content."'";
		$sql=$sql.",p_content_en='".$p_content_en."'";
		$sql=$sql.",p_content2='".$p_content2."'";
		$sql=$sql.",p_content2_en='".$p_content2_en."'";
		$sql=$sql.",p_index=".$p_index."";
		$sql=$sql.",p_vip=".$p_vip."";
		include("../common/myfile.php");
		include("../common/smallpic.class.php");
		//第一图片
		$p_pic1=$_FILES["p_pic1"];
		if($p_pic1["size"]!=0)
		{
			
			$fileName=date("Ymdhis").mt_rand(0,9)."1";
			$f=new myfile($fileName,$p_pic1,"../upload/product/");
			if($f->type())
			{
				$sqlpic1="select * from p_product where p_id=".$p_id;
				$query=$d->Query($sqlpic1);
				$rowpic=mysql_fetch_array($query);
				if(!empty($rowpic["p_pic1"]))
				{
					if(file_exists($rowpic["p_pic1"]))
					{
						unlink($rowpic["p_pic1"]);
					}
					if(file_exists($rowpic["p_pic_s1"]))
					{
						unlink($rowpic["p_pic_s1"]);
					}
				}
				$f->upload();
				$sm=new Songfeng_Image_Ratio();
				$p_pic1_name=$sm->RatioAdjuct($f->fileName(),$uploadPicWidth_b,$uploadPicHeight_b,2);
				$p_pic_s1_name=$sm->RatioAdjuct($f->fileName(),$uploadPicWidth_s,$uploadPicHeight_s);
				unlink($f->fileName());
			}
			$sql=$sql.",p_pic1='".$p_pic1_name."'";
			$sql=$sql.",p_pic_s1='".$p_pic_s1_name."'";
		}
		//第二张图片
		$p_pic2=$_FILES["p_pic2"];
		if($p_pic2["size"]!=0)
		{
			$fileName=date("Ymdhis").mt_rand(0,9)."2";
			$f=new myfile($fileName,$p_pic2,"../upload/product/");
			if($f->type())
			{
				$sqlpic2="select * from p_product where p_id=".$p_id;
				$query=$d->Query($sqlpic2);
				$rowpic=mysql_fetch_array($query);
				if(!empty($rowpic["p_pic2"]))
				{
					if(file_exists($rowpic["p_pic2"]))
					{
						unlink($rowpic["p_pic2"]);
					}
					if(file_exists($rowpic["p_pic_s2"]))
					{
						unlink($rowpic["p_pic_s2"]);
					}
				}
				$f->upload();
				$sm=new Songfeng_Image_Ratio();
				$p_pic2_name=$sm->RatioAdjuct($f->fileName(),$uploadPicWidth_b,$uploadPicHeight_b,2);
				$p_pic_s2_name=$sm->RatioAdjuct($f->fileName(),$uploadPicWidth_s,$uploadPicHeight_s);
				unlink($f->fileName());
			}
			$sql=$sql.",p_pic2='".$p_pic2_name."'";
			$sql=$sql.",p_pic_s2='".$p_pic_s2_name."'";
		}
		
		//第三张图片
		$p_pic3=$_FILES["p_pic3"];
		if($p_pic3["size"]!=0)
		{
			$fileName=date("Ymdhis").mt_rand(0,9)."3";
			$f=new myfile($fileName,$p_pic3,"../upload/product/");
			if($f->type())
			{
				$sqlpic3="select * from p_product where p_id=".$p_id;
				$query=$d->Query($sqlpic3);
				$rowpic=mysql_fetch_array($query);
				if(!empty($rowpic["p_pic3"]))
				{
					if(file_exists($rowpic["p_pic3"]))
					{
						unlink($rowpic["p_pic3"]);
					}
				    if(file_exists($rowpic["p_pic_s3"]))
					{
						unlink($rowpic["p_pic_s3"]);
					}
				}
				$f->upload();
				$sm=new Songfeng_Image_Ratio();
				$p_pic3_name=$sm->RatioAdjuct($f->fileName(),$uploadPicWidth_b,$uploadPicHeight_b,2);
				$p_pic_s3_name=$sm->RatioAdjuct($f->fileName(),$uploadPicWidth_s,$uploadPicHeight_s);
				unlink($f->fileName());
			}
			$sql=$sql.",p_pic3='".$p_pic3_name."'";
			$sql=$sql.",p_pic_s3='".$p_pic_s3_name."'";
		}
		
		//第四张图片
		$p_pic4=$_FILES["p_pic4"];
		if($p_pic4["size"]!=0)
		{
			$fileName=date("Ymdhis").mt_rand(0,9)."4";
			$f=new myfile($fileName,$p_pic4,"../upload/product/");
			if($f->type())
			{
				$sqlpic4="select * from p_product where p_id=".$p_id;
				$query=$d->Query($sqlpic4);
				$rowpic=mysql_fetch_array($query);
				if(!empty($rowpic["p_pic4"]))
				{
					if(file_exists($rowpic["p_pic4"]))
					{
						unlink($rowpic["p_pic4"]);
					}
				}
				$f->upload();
			}
			$sql=$sql.",p_pic4='".$f->fileName()."'";
		}
		
		
		//第五张图片
		if($p_index==1){
		$p_pic5=$_FILES["p_pic5"];
		if($p_pic5["size"]!=0)
		{
			$fileName=date("Ymdhis").mt_rand(0,9)."5";
			$f=new myfile($fileName,$p_pic5,"../upload/product/");
			if($f->type())
			{
				$sqlpic5="select * from p_product where p_id=".$p_id;
				$query=$d->Query($sqlpic5);
				$rowpic=mysql_fetch_array($query);
				if(!empty($rowpic["p_pic5"]))
				{
					if(file_exists($rowpic["p_pic5"]))
					{
						unlink($rowpic["p_pic5"]);
					}
				}
				$f->upload();
			}
			$sm=new Songfeng_Image_Ratio();
			$p_pic5_name=$sm->RatioAdjuct($f->fileName(),315,120,2);
			$p_pic_s5_name='';
			unlink($f->fileName());
			$sql=$sql.",p_pic5='".$p_pic5_name."'";
		}
		}
		
		$sql=$sql." where p_id=".$p_id;
		//echo $sql;
		$d->Admin($_SESSION["admin"],"更新成功",$sql,"product_update.php?p_id=".$p_id."&language=".$language."");
	}
?>
<?php
	$p_id=$_GET["p_id"];
	$language="";
	if(isset($_GET["language"]))
	{
		$language.=$_GET["language"];
	}

	$sql="select * from p_product where p_id=".$p_id;
	$array=$d->Query($sql);
	while($rowlist=@mysql_fetch_array($array))
	{
?>
<form name="form" id="form" action="product_update.php?state=edit" method="post" enctype="multipart/form-data">
<input type="hidden" name="language" id="language" value="<?php echo $language?>">
<input type="hidden" name="p_id" id="p_id" value="<?php echo $p_id?>">
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
                            <?php
                            	if(isset($_GET["p_bigtype"]))
								{
							?>
                                 <select name="p_bigtype" id="p_bigtype" onChange="bigtype()">
                                    <option value="0">请选择一级目录</option>
                                    <?php
                                        $sql="select * from p_product_type where p_bigtype=0 and language='".$language."'";
                                        $array=$d->Query($sql);
                                        $select="";
                                        while($row=mysql_fetch_array($array))
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
                                    ?>
                                    <option value="<?php echo $row["p_id"]?>" <?php echo $select?>><?php echo $row["p_title"]?></option>
                                    <?php
                                        }
                                    ?>
                                </select>

                            <?php
                            	}
								else
								{
							?>
                                <select name="p_bigtype" id="p_bigtype" onChange="bigtype()">
                                    <option value="0">请选择一级目录</option>
                                    <?php
                                        $sql="select * from p_product_type where p_bigtype=0 and language='".$language."'";
                                        $array=$d->Query($sql);
                                        $select="";
                                        while($row=mysql_fetch_array($array))
                                        {
                                            if($rowlist["p_bigtype"]==$row["p_id"])
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
                            <?php
                            	}
							?>
                            
                    		</td>
                            <td width="100" align="center" style="border-right:#BAD6EC 1px solid;" class="c_666">二级目录</td>
                            <td width="150" align="center" style="border-right:#BAD6EC 1px solid;">
                            	<?php
                                	if(isset($_GET["p_bigtype"]))
									{
								?>
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
                                <?php
                                	}
									else
									{
								?>
                                <select name="p_smalltype" id="p_smalltype" onChange="smalltype();">
                                	<option value="0">请选择二级目录</option>
                                    <?php
                                	$sql="select * from p_product_type where p_bigtype=".$rowlist["p_bigtype"]." and p_secondtype=0";
									$array=$d->Query($sql);
									$select="";
									while($row=mysql_fetch_array($array))
									{
										if($rowlist["p_smalltype"]==$row["p_id"])
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
                                <?php
                                	}
								?>
                            </td>
                            <td width="100" align="center" style="border-right:#BAD6EC 1px solid;" class="c_666">三级目录</td>
                            <td width="150" align="center" style="border-right:#BAD6EC 1px solid;">
                            	<?php
                                	if(isset($_GET["p_bigtype"]))
									{
								?>
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
                                <?php
                                	}
									else
									{
								?>
                                <select name="p_ssmalltype" id="p_ssmalltype">
                                	<option value="0">请选择三级目录</option>
                                    <?php
                                	$sql="select * from p_product_type where p_secondtype=".$rowlist["p_smalltype"]."";
									echo $sql;
									$array=$d->Query($sql);
									$select="";
									while($row=mysql_fetch_array($array))
									{
										if($rowlist["p_ssmalltype"]==$row["p_id"])
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
                                <?php
                                	}
								?>
                            </td>
                            
                            
                            <td width="100" align="center" style="border-right:#BAD6EC 1px solid;" class="c_666">产品排序:</td>
                            <td width="150" align="center" style="border-right:#BAD6EC 1px solid;">
                            	<input type="text" name="p_sort" id="p_sort" style="width:80px;" value="<?php echo $rowlist["p_sort"]?>"  />
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr style="height:35px; line-height:35px;display:none;">
            	<td align="center" class="c_666">产品型号:</td>
                <td style="padding-left:19px;"><input type="text" name="p_file2" id="p_file2" style="width:638px;" value="<?php echo htmlspecialchars($rowlist["p_file2"])?>"></td>
            </tr> 
            <tr style="height:35px; line-height:35px;">
            	<td align="center" class="c_666">产品名称:</td>
                <td style="padding-left:19px;"><input type="text" name="p_productname" id="p_productname" style="width:638px;" value="<?php echo htmlspecialchars($rowlist["p_productname"])?>"></td>
            </tr>
            
            <tr style="height:35px; line-height:35px;display:none;">
            	<td align="center" class="c_666">产品价格:</td>
                <td style="padding-left:19px;"><input type="text" name="p_file4" id="p_file4" style="width:638px;" value="<?php echo htmlspecialchars($rowlist["p_file4"])?>"></td>
            </tr>  
            <tr style="height:35px; line-height:35px;">
            	<td align="center" class="c_666">产品名称（英文）:</td>
                <td style="padding-left:19px;"><input type="text" name="p_productname_en" id="p_productname_en" style="width:638px;" value="<?php echo $rowlist["p_productname_en"]?>"></td>
            </tr>
            <tr style="height:35px; line-height:35px;">
            	<td align="center" class="c_666">产品参数:</td>
                <td style="padding-left:19px; padding-right:20px; padding-top:10px; padding-bottom:10px;"><textarea id="p_content" name="p_content"><?php echo $rowlist["p_content"]?></textarea></td>
            </tr>
            <tr style="height:35px; line-height:35px;">
            	<td align="center" class="c_666">产品说明:</td>
                <td style="padding-left:19px; padding-right:20px; padding-top:10px; padding-bottom:10px;"><textarea id="p_content2" name="p_content2"><?php echo $rowlist["p_content2"]?></textarea></td>
            </tr>
            <tr style="height:35px; line-height:35px;">
            	<td align="center" class="c_666">产品参数（英文）:</td>
                <td style="padding-left:19px; padding-right:20px; padding-top:10px; padding-bottom:10px;"><textarea id="p_content_en" name="p_content_en"><?php echo $rowlist["p_content_en"]?></textarea></td>
            </tr>
            <tr style="height:35px; line-height:35px;">
            	<td align="center" class="c_666">产品说明（英文）:</td>
                <td style="padding-left:19px; padding-right:20px; padding-top:10px; padding-bottom:10px;"><textarea id="p_content2_en" name="p_content2_en"><?php echo $rowlist["p_content2_en"]?></textarea></td>
            </tr>
            <tr style="height:35px; line-height:35px;display:none;">
            	<td align="center" class="c_666">淘宝链接:</td>
                <td style="padding-left:19px;"><input type="text" name="p_file1" id="p_file1" style="width:638px;" value="<?php echo $rowlist["p_file1"]?>"></td>
            </tr>
            <tr style="height:35px; line-height:35px;">
            	<td align="center" class="c_666">产品图片1:</td>
                <td style="padding-left:19px;">
                	<input type="file" name="p_pic1" id="p_pic1" style="width:400px;">
                    <?php
                    	if(!empty($rowlist["p_pic1"]))
						{
					?>
                    <?php echo $rowlist["p_pic1"]?>
                    <?php
                    	}
						else
						{
					?>
                    暂无图片信息
                    <?php
                    	}
					?>
                    <span style="color:red;">&nbsp;*产品图片尺寸为800px * 640px</span>
                </td>
                
            </tr>
            <tr style="height:35px; line-height:35px;">
            	<td align="center" class="c_666">产品图片2:</td>
                <td style="padding-left:19px;">
                	<input type="file" name="p_pic2" id="p_pic2" style="width:400px;">
                    <?php
                    	if(!empty($rowlist["p_pic2"]))
						{
					?>
                    <?php echo $rowlist["p_pic2"]?>
                    <?php
                    	}
						else
						{
					?>
                    暂无图片信息
                    <?php
                    	}
					?>
                    <span style="color:red;">&nbsp;*产品图片尺寸为800px * 640px</span>
                </td>
            </tr>
            <tr style="height:35px; line-height:35px;">
            	<td align="center" class="c_666">产品图片3:</td>
                <td style="padding-left:19px;">
                	<input type="file" name="p_pic3" id="p_pic3" style="width:400px;">
                    <?php
                    	if(!empty($rowlist["p_pic3"]))
						{
					?>
                    <?php echo $rowlist["p_pic3"]?>
                    <?php
                    	}
						else
						{
					?>
                    暂无图片信息
                    <?php
                    	}
					?>
                    <span style="color:red;">&nbsp;*产品图片尺寸为800px * 640px</span>
                </td>
            </tr>
            <tr style="height:35px; line-height:35px;display:none;">
            	<td align="center" class="c_666">产品大图3:</td>
                <td style="padding-left:19px;">
                	<input type="file" name="p_pic4" id="p_pic4" style="width:400px;">
                	<?php
                    	if(!empty($rowlist["p_pic4"]))
						{
					?>
                    <?php echo $rowlist["p_pic4"]?>　<a href="pic_delete.php?p_id=<?php echo $rowlist["p_id"]?>&atction=product&pic=4&language=<?php echo $language?>">删除图片</a>
                    <?php
                    	}
						else
						{
					?>
                    暂无图片信息
                    <?php
                    	}
					?>
                </td>
            </tr>
  
            <tr style="height:35px; line-height:35px;display:none;">
            	<td align="center" class="c_666">参与活动:</td>
                <td style="padding-left:19px;"><input name="p_file3" type="text" id="p_file3" style="width:638px;" readonly="readonly" onFocus="showFunctionsBox()" value="<?php echo $rowlist["p_file3"]?>" ></td>
            </tr> 
            <tr style="height:35px; line-height:35px;">
            	<td align="center" class="c_666">相关操作:</td>
                <td style="padding-left:15px;">
                	<table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td style=""><input type="checkbox" name="p_index" id="p_index" value="1" <?php if($rowlist["p_index"]==1){?>checked="checked"<?php }?>  onclick="showpic2();"></td>
                            <td class="c_666">新品推荐</td>
                            <td style="display:none;"><input type="checkbox" name="p_vip" id="p_vip" value="1" <?php if($rowlist["p_vip"]==1){?>checked="checked"<?php }?>></td>
                            <td style="display:none;" class="c_666">主要</td>
                            
                        </tr>
                    </table>
                </td>
            </tr>
            <tr id="ppp" style="height:35px; line-height:35px;<?php if(!$rowlist[p_index]) echo "display:none;" ?>">
            	<td align="center" class="c_666">首页图片:</td>
                <td style="padding-left:19px;">
                	<input type="file" name="p_pic5" id="p_pic5" style="width:400px;">
                	<?php
                    	if(!empty($rowlist["p_pic5"]))
						{
					?>
                    <?php echo $rowlist["p_pic5"]?>
                    <?php
                    	}
						else
						{
					?>
                    暂无图片信息
                    <?php
                    	}
					?>
                    <span style="color:red;">&nbsp;*产品图片尺寸为315px * 120px</span>
                </td>
            </tr>
            <tr>
            	<td colspan="2" align="center">
                	<table cellpadding="0" cellspacing="0" height="80">
                    	<tr>
                        	<td><input type="submit" name="" id="" value="更新" class="but_60" onClick="return check()"></td>
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
<?php
	}
?>
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
		var _p_id=form.p_id.value;
		window.location.href="product_update.php?p_bigtype="+_p_bigtype+"&language=<?php echo $language?>&p_id="+_p_id+"";
	}
	function smalltype()
	{
		var _p_smalltype=form.p_smalltype.value;
		var _p_id=form.p_id.value;
		window.location.href="product_update.php?p_bigtype=<?php echo $p_bigtype; ?>&p_smalltype="+_p_smalltype+"&language=<?php echo $language?>&p_id="+_p_id;
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
