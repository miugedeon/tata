<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include("../common/conn.php")?>
<title>无标题文档</title>
</head>

<body>
<link type="text/css" rel="Stylesheet" href="css/admin.css" />

<?php
	if(isset($_GET["showid"]))
	{
		$showid=$_GET["showid"];
		$sql="select * from lxy_download where id=".$showid;
		mysql_query("set names utf8");
		$query=mysql_query($sql);
		$row=mysql_fetch_array($query);
	}
?>


<?php
	if(isset($_GET["state"]))
	{
		$showid=$_POST["showid"];
		$FileName=$_POST["FileName"];
		$FileName_en=$_POST["FileName_en"];
		$FileContent=$_POST["FileContent"];
		$FileFile=$_FILES["FileFile"];
		$downpwd=$_POST["p_type"];
		$p_type_2=$_POST["p_type_2"];
		
		$sql="update lxy_download set FileName='".$FileName."',FileName_en='".$FileName_en."',FileContent='".$FileContent."',downpwd='".$downpwd."',p_type_2=".$p_type_2;
		
		if($FileFile["size"]>0)
		{
		
			$sql11111="select * from lxy_download where id=".$showid;
			mysql_query("set names gbk");
			$query=mysql_query($sql11111);
			$row=mysql_fetch_array($query);
			$D_path="../upload/download/".$row["FileFile"];
			unlink($D_path);
			
			$F_Name=$FileFile["name"];
			$hzm=strstr($F_Name,".");
			$showDate=date("Ymdhis");
			$num="";
			for($i=0;$i<4;$i++)
			{
				$num.=rand(0,9);
			}
			$NewName=$showDate.$num.$hzm;
			$path="../upload/download/".$NewName;
			move_uploaded_file($FileFile["tmp_name"],$path);
			
			$sql.=",FileFile='".$NewName."',Hzm='".$hzm."'";
		}
		session_start();
		$date=date("Y-m-d");
		$sql.=",AddDate='".$date."' where id=".$showid;
		mysql_query("set names utf8");
		mysql_query($sql);
		echo "<script language='javascript'>alert('更新成功');location.href='dowload.php?language=".$_POST["language"]."'</script>";
	}
?>




<form name="myform" id="myform" action="?state=update" method="post" enctype="multipart/form-data">
<input type="hidden" name="showid" id="showid" value="<?php echo $showid?>" />
<input type="hidden" name="language" id="language" value="<?php echo $row["language"]?>" />
<table width="100%" cellpadding="0" cellspacing="0" border="0">
    <tr>
        <td align="center">
            <table width="810" cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td valign="top">
                        <table width="100%" cellpadding="0" cellspacing="0" border="0">
                            <tr>
                                <td>
                                    <table width="100%" style="background:#DFEFFF; height:28px; border:#C0D5F0 1px solid; border-bottom:none;" cellpadding="0" cellspacing="0" border="0">
                                         <tr>
                                         	<td align="left" width="30" style="padding-left:15px; background:#DFEFFF;"></td>
                                            <td align="left" style="padding-top:3px; color:#0C296B; background:#DFEFFF;"><strong>资料修改管理面板中心</strong></td>
                                         </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                            	<td>
                                	<table width="100%" cellpadding="0" cellspacing="1" border="0" class="allTable">
										<tr style="height:40px; line-height:40px;">
                                        	<td style="width:70px;">类型：</td>
                                            <td align="left">
											<?php											$selected0=$row["downpwd"]==0?" selected='selected'" : "";
											$selected1=$row["downpwd"]==1?" selected='selected'" : "";											?>
                                            	<select name="p_type">
                                                	<option value="0"<?php echo $selected0; ?>>产品规格书</option>
                                                    <option value="1"<?php echo $selected1; ?>>照明知识分享</option>
                                                </select>
                                            </td>
											
                                      </tr> 
									
									
									<tr style="height:40px; line-height:40px;">
                                        	<td style="width:70px;">类型二：</td>
                                            <td align="left">
                                            	<select name="p_type_2">
                                                	<option value="0">-请选择-</option>
                                                    <?php
														$sqlrun="select * from p_type where p_bigtype=16 and language='cn' order by p_id asc";
														$queryrun=$d->Query($sqlrun);
														while($rowrun=mysql_fetch_array($queryrun)){
															$selected2=$rowrun[p_id]==$row[p_type_2]?' selected="selected"' : '';
													?>
														<option value="<?php echo $rowrun[p_id]; ?>"<?php echo $selected2; ?>><?php echo $rowrun[p_title]; ?></option>
													<?php
														}
													?>
                                                </select>
                                            </td>
											
                                      </tr> 
									
                                    	<tr style="height:40px; line-height:40px;">
                                        	<td style="width:70px;">文件名称：</td>
                                            <td align="left"><input type="text" name="FileName" id="FileName" style="width:320px;" value="<?php echo $row["FileName"]?>" /></td>
                                      </tr>
                                      <tr style="height:40px; line-height:40px;">
                                        	<td style="width:70px;">英文名称：</td>
                                            <td align="left"><input type="text" name="FileName_en" id="FileName_en" style="width:320px;" value="<?php echo $row["FileName_en"]?>" /></td>
                                      </tr>
                                        <tr style="height:40px; line-height:40px;">
                                        	<td>上传文件：</td>
                                            <td align="left">
                                       	    <input type="file" name="FileFile" id="FileFile" style="width:320px;" />
                                                <span style="color:#999999; font-family:Arial, Helvetica, sans-serif;">upload/download/<?php echo $row["FileFile"]?></span>                                            </td>
                                      </tr>
                                      
                                      
                                        <tr style="height:40px; line-height:40px;display:none;">
                                        	<td>文件说明：</td>
                                            <td align="left">
                                           	  <textarea name="FileContent" id="FileContent" rows="5" cols="50"><?php echo $row["FileContent"]?></textarea>                                            </td>
                                      </tr>
                                        <tr style="height:40px; line-height:40px;display:none;"> 
                                        	<td>下载权限：</td>
                                            <td align="left">
                                            	<?php
                                                	if($row["FileVip"]==1)
													{
												?>
                                              <input type="radio" name="FileVip" id="FileVip" value="1" checked="checked" />会员
                                                <input type="radio" name="FileVip" id="FileVip" value="0" />非会员
                                                <?php
                                                	}
													else
													{
												?>
                                                <input type="radio" name="FileVip" id="FileVip" value="1" />会员
                                                <input type="radio" name="FileVip" id="FileVip" value="0" checked="checked" />非会员
                                                <?php
                                                	}
												?>                                            </td>
                                      </tr>
                                      <tr style="height:40px; line-height:40px; display:none;"> 
                                        	<td>首页显示：</td>
                                            <td align="left">
                                            	<?php
                                                	if($row["is_index"]==1)
													{
												?>
                                                <input type="checkbox" name="is_index" id="is_index" value="1" checked="checked" />
                                                <?php
                                                	}
													else
													{
												?>
                                                <input type="checkbox" name="is_index" id="is_index" value="0" />
                                                <?php
                                                	}
												?>
                                            </td>
                                      </tr>
                                        <tr style="height:40px; line-height:40px;">
                                        	<td colspan="2" align="left" style="padding-left:75px;">
                                           	  <input type="submit" name="send" id="send" value="更新" class="ba" onclick="return down()" />                                            </td>
                                      </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</form>


<script language="javascript">
	function down()
	{
		// myform
		var _FileName=myform.FileName.value;
		if(_FileName=="")
		{
			alert("请输入文件名称!")
			myform.FileName.focus();
			return false;
		}
		//FileFile
		
	}
	function url()
	{
		var goPage=myform.goToPage.value;
		window.location.href="dowload.php?page="+goPage;
	}
</script>
<style type="text/css">
	
.allTable{ background:#CCC;}
.allTable tr td{ background:#FFF;}
</style>
</body>
</html>
