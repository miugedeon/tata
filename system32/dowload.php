<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include("../common/conn.php")?>
<title>无标题文档</title>
</head>

<body>
<style type="text/css">
	
.allTable{ background:#CCC;}
.allTable tr td{ background:#FFF;}
</style>
<link type="text/css" rel="Stylesheet" href="css/admin.css" />


<?php
	$language="";
	if(isset($_GET["language"]))
	{
		$language=$_GET["language"];
	}
	if(isset($_GET["state"]))
	{
		if($_GET["state"]=="add")
		{
			$FileFile=$_FILES["FileFile"];
			$F_Name=$FileFile["name"];
			$hzm=strstr($F_Name,".");
			$Date=date("Y-m-d");
			$showDate=date("Ymdhis");
			$num="";
			for($i=0;$i<4;$i++)
			{
				$num.=rand(0,9);
			}
			$NewName=$showDate.$num.$hzm;
			$path="../upload/Download/".$NewName;
			move_uploaded_file($FileFile["tmp_name"],$path);
			
			$FileName=$_POST["FileName"];
			$FileName_en=$_POST["FileName_en"];
			$FileContent=$_POST["FileContent"];
			$downpwd=$_POST['p_type'];
			$p_type_2=$_POST['p_type_2'];
			$language=$_POST["language"];
			
			session_start();
			$sql="insert into lxy_download(FileName,FileName_en,FileFile,FileContent,Admin,Hzm,AddDate,downpwd,p_type_2,language) values('".$FileName."','".$FileName_en."','".$NewName."','".$FileContent."','".$_SESSION["admin"]."','".$hzm."','".$Date."','".$downpwd."',".$p_type_2.",'".$language."')";		
			$d->Query($sql);
			echo "<script lanugage='javascript'>alert('添加成功');location.href='dowload.php?language=".$language."'</script>";
		}
	}
?>

<form name="myform" id="myform" action="?state=add" method="post" enctype="multipart/form-data">
<input type="hidden" name="language" id="language" value="<?php echo $language?>" />
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
                                            <td align="left" style="padding-top:3px; color:#0C296B; background:#DFEFFF;"><strong>资料下载管理面板中心</strong></td>
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
                                            	<select name="p_type">
                                                	<option value="0">产品规格书</option>
                                                    <option value="1">照明知识分享</option>
                                                </select>
                                            </td>
											
                                      </tr> 
									  
									  <tr style="height:40px; line-height:40px;">
                                        	<td style="width:70px;">类型二：</td>
                                            <td align="left">
                                            	<select name="p_type_2">
                                                	<option value="0">-请选择-</option>
                                                    <?php														$sqlrun="select * from p_type where p_bigtype=16 and language='cn' order by p_id asc";														$queryrun=$d->Query($sqlrun);														while($rowrun=mysql_fetch_array($queryrun)){													?>														<option value="<?php echo $rowrun[p_id]; ?>"><?php echo $rowrun[p_title]; ?></option>													<?php														}													?>
                                                </select>
                                            </td>
											
                                      </tr> 
									  
                                    	<tr style="height:40px; line-height:40px;">
                                        	<td style="width:70px;">文件名称：</td>
                                            <td align="left"><input type="text" name="FileName" id="FileName" style="width:320px;" /></td>
                                      </tr> 
                                      <tr style="height:40px; line-height:40px;">
                                        	<td style="width:70px;">英文名称：</td>
                                            <td align="left"><input type="text" name="FileName_en" id="FileName_en" style="width:320px;" /></td>
                                      </tr>
                                        <tr style="height:40px; line-height:40px;">
                                        	<td>上传文件：</td>
                                            <td align="left">
                                           	  <input type="file" name="FileFile" id="FileFile" style="width:320px;" />                                            </td>
                                      </tr>
                                      
                                        <tr style="height:40px; line-height:40px;display:none;">
                                        	<td>文件说明：</td>
                                            <td align="left">
                                           	  <textarea name="FileContent" id="FileContent" rows="5" cols="50"></textarea>                                            </td>
                                      </tr>
                                        
                                     
                                        <tr style="height:40px; line-height:40px;">
                                        	<td colspan="2" align="left" style="padding-left:75px;">
                                           	  <input type="submit" name="send" id="send" value="添加" class="ba" onclick="return down()" />                                            </td>
                                      </tr>
                                    </table>
                                </td>
                            </tr>

                            <tr><td style="height:15px;"></td></tr>

                            
                            <tr>
                            	<td>
                                	<table width="810" cellpadding="0" cellspacing="1" border="0" class="allTable">
                                    	<tr style="height:35px; line-height:35px;">
                                        	<td colspan="8" align="left" style="padding-left:15px;">分类:&nbsp;&nbsp;<a href="?t=0&language=cn">产品规格书</a>&nbsp;&nbsp;<a href="?t=1&language=cn">照明知识分享</a></td>
                                        </tr>
                                    	<tr style="height:35px; line-height:35px;">
                                            <td align="center" style="width:40px;"><strong style="color:#0C296B;">编号</strong></td>
                                            <td align="center"  style="width:120px;"><strong style="color:#0C296B;">文件名称</strong></td>
                                            <td align="center" style="width:80px;"><strong style="color:#0C296B;">文件类型</strong></td>
                                            <td align="center" style="width:50px;"><strong style="color:#0C296B;">下载量</strong></td>
                                            <td align="center" style="width:120px;"><strong style="color:#0C296B;">上传时间</strong></td>
                                            <td align="center" style="width:120px;"><strong style="color:#0C296B;">类型</strong></td>
                                            <td align="center" style="width:80px;"><strong style="color:#0C296B;">操作员</strong></td>
                                            <td align="center" style="width:100px;"><strong style="color:#0C296B;">管理</strong></td>
                                        </tr>
                                        <?php
											if(isset($_GET['t']) && $_GET['t'] != ""){
												$t=$_GET['t'];
												if($t==0)
													$sql="select * from lxy_download where language='".$language."' and downpwd='0' order by id desc";
												elseif($t==1)
													$sql="select * from lxy_download where language='".$language."' and downpwd='1' order by id desc";
											}else{
                                        		$sql="select * from lxy_download where language='".$language."' order by id desc";
											}
											mysql_query("set names utf8");
											$query=mysql_query($sql);
											$num=mysql_num_rows($query);
											
											
											if($num>0)
											{
											
											$pagesize=10;
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
											
											
											$sql.=" limit ".$offset.",".$pagesize."";
											mysql_query("set names utf8");
											$query=mysql_query($sql);
											while($row=mysql_fetch_array($query))
											{
												if($row[downpwd]=='0') $row[downpwd]="产品规格书";
												elseif($row[downpwd]=='1') $row[downpwd]="照明知识分享";
										?>
                                        <tr style="height:27px; line-height:27px;">
                                            <td align="center" style="width:40px;"><?php echo $row["id"]?></td>
                                            <td align="center"  style="width:120px;"><?php echo $row["FileName"]?></td>
                                            <td align="center" style="width:80px;"><?php echo $row["Hzm"]?></td>
                                            <td align="center" style="width:50px;"><?php echo $row["Hist"]?></td>
                                            <td align="center" style="width:120px;"><?php echo $row["AddDate"]?></td>
                                            <td align="center" style="width:120px;"><?php echo $row["downpwd"]?></td>
                                            <td align="center" style="width:80px;"><?php echo $row["Admin"]?></td>
                                            <td align="center" style="width:100px;"><a onclick="return confirm('您确认删除吗？')" href="dowloadDelete.php?showid=<?php echo $row["id"]?>">删除</a> | <a href="downloadUpdate.php?showid=<?php echo $row["id"]?>">更新</a></td>
                                        </tr>
                                        <?php
                                        	}
										?>
                                        <tr style="height:30px;">
                                            <td colspan="9" align="center" style="height:40px;">
                                                <table cellpadding="0" cellspacing="0" id="page">
                                                    <tr>
                                                        <td>共有［<?php echo $num?>］个文件</td>
                                                        <td style="width:8px;"></td>
                                                        <td>共有［<?php echo $pagecount?>］页</td>
                                                        <td style="width:8px;"></td>
                                                        <td>当前第［<?php echo $page?>］页</td>
                                                        <td style="width:8px;"></td>
                                                        <td><a href="?language=<?php echo $language?>">首页</a></td>
                                                        <td style="width:8px;"></td>
                                                        <td><a href="?page=<?php echo ($page-1)?>&language=<?php echo $language?>&t=<?php echo $t; ?>">上页</a></td>
                                                        <td style="width:8px;"></td>
                                                        <td><a href="?page=<?php echo ($page+1)?>&language=<?php echo $language?>&t=<?php echo $t; ?>">下页</a></td>
                                                        <td style="width:8px;"></td>
                                                        <td><a href="?page=<?php echo ($pagecount)?>&language=<?php echo $language?>&t=<?php echo $t; ?>">未页</a></td>
                                                        <td style="width:8px;"></td>
                                                        <td>转到:</td>
                                                        <td>
                                                            <select name="goToPage" id="goToPage" onchange="url()">
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
																<option <?php echo $selected?> value="<?php echo $i?>">第 <?php echo $i?> 页</option>
																<?php
																	$i++;
																	}
																?>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                    	}
														else
														{
													?>
                                                    <tr style="height:80px; line-height:80px;">
                <td colspan="9" style="padding-left:15px;"><strong style="color:#0C296B;">系统提示:没有相关的下载资料!  Sorry........</strong></td>
            </tr>
                                                    <?php
                                                    	}
													?>
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
		var _FileFile=myform.FileFile.value;
		if(_FileFile=="")
		{
			alert("请选择上传的文件!")
			myform.FileFile.focus();
			return false;
		}
	}
	
	function url()
	{
		var goPage=myform.goToPage.value;
		window.location.href="dowload.php?page="+goPage+"&language=<?php echo $language?>&t=<?php echo $t; ?>";
	}
</script>
</body>
</html>
