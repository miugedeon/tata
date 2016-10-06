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
<?php
	$state="";
	if(isset($_GET["state"]))
	{
		$state=$_GET["state"];
		switch($state)
		{
			case "add":
				$p_bigtype=$_POST["p_bigtype"];
				$p_secondtype=$_POST['p_secondtype'];
				if($p_bigtype>0 && $p_secondtype==0) $deep=1;
				elseif($p_secondtype>0){$deep=2;$p_bigtype=$p_secondtype;}
				else $deep=0;
				$p_title=$_POST["p_title"];
				$p_title_en=$_POST["p_title_en"];
				$p_pic=$_FILES["p_pic"];
				$language=$_POST["language"];
				$p_content=$p_title;
				$sql="";
				if($p_pic["size"]==0)
				{
					$sql="insert into p_type(p_bigtype,p_deep,p_title,p_title_en,language,p_content) values(".$p_bigtype.",".$deep.",'".$p_title."','".$p_title_en."','".$language."','".$p_content."')";
				}
				else
				{
					include_once("../common/myfile.php");
					$fileName=date("Ymdhis").mt_rand(0,9)."1";
					$f=new myfile($fileName,$p_pic,"../upload/channel/");
					if($f->type())
					{
						$f->upload();
					}
					$sql="insert into p_type(p_bigtype,p_deep,p_title,p_title_en,p_pic,language,p_content) values(".$p_bigtype.",".$deep.",'".$p_title."','".$p_title_en."','".$f->fileName()."','".$language."','".$p_content."')";
				}	
				$d->Admin($_SESSION["admin"],"添加成功",$sql,"type_manage.php?language=".$language."");

			break;
			case "update":
				$p_id=$_POST["p_id"];
				$p_bigtype=$_POST["p_bigtype"];
				$p_mark=$_POST["p_mark"];
				$p_secondtype=$_POST['p_secondtype'];
				if($p_bigtype>0 && $p_secondtype==0) $deep=1;
				elseif($p_secondtype>0){$deep=2;$p_bigtype=$p_secondtype;}
				else $deep=0;
				$p_title=$_POST["p_title"];
				$p_title_en=$_POST["p_title_en"];
				$p_pic=$_FILES["p_pic"];
				$language=$_POST["language"];
				
				$sql="";
				if($p_pic["size"]==0)
				{
					$sql="update p_type set p_bigtype=".$p_bigtype.",p_deep=".$deep.",p_title='".$p_title."',p_mark='".$p_mark."',p_title_en='".$p_title_en."' where p_id=".$p_id;
				}
				else
				{
					include_once("../common/myfile.php");
					$fileName=date("Ymdhis").mt_rand(0,9)."1";
					$f=new myfile($fileName,$p_pic,"../upload/channel/");
					if($f->type())
					{
						$sqlpic1="select * from p_type where p_id=".$p_id;
						$query=$d->Query($sqlpic1);
						$rowpic=mysql_fetch_array($query);
						if(!empty($rowpic["p_pic"]))
						{
							if(file_exists($rowpic["p_pic"]))
							{
								unlink($rowpic["p_pic"]);
							}
						}
						$f->upload();
					}
					$sql="update p_type set p_bigtype=".$p_bigtype.",p_deep=".$deep.",p_title='".$p_title."',p_title_en='".$p_title_en."',p_pic='".$f->fileName()."' where p_id=".$p_id;
				}
				
				$d->Admin($_SESSION["admin"],"更新成功",$sql,"?language=".$language."");
				$sqlt="update p_type a left join p_type b on b.p_id=a.p_bigtype set a.p_mark=b.p_mark where a.p_bigtype>0";
				$d->Query($sqlt);
			break;
			case "del":
				$b=$d->Admin1($_SESSION["admin"]);
				if($b==1)
				{
					$other=$_GET["other"];
					$p_id=$_GET["p_id"];
					$language=$_GET["language"];
					if($other==1)
					{
						$sql="delete from p_type where p_bigtype=".$p_id."";
						$d->Query($sql);
						$sql="delete from p_type where p_id=".$p_id."";
						$d->Query($sql);
					}
					else
					{
						$sql="delete from p_type where p_id=".$p_id."";
						$d->Query($sql);
					}
					alertUrl("删除成功","type_manage.php?language=".$language."");
				}
				else
				{
					alertBack("权限不够");
				}

			break;
			default:
			break;
		}
	}
	else
	{
		$state="add";
	}
?>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="17" valign="top" background="images/mail_leftbg.gif"><img src="images/left-top-right.gif" width="17" height="29" /></td>
    <td valign="top" background="images/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2">
      <tr>
        <td height="31" style="text-align:right; font-size:12px; color:#666;">当前位置:　网站后台 &gt 版块管理 </td>
      </tr>
    </table></td>
    <td width="16" valign="top" background="images/mail_rightbg.gif"><img src="images/nav-right-bg.gif" width="16" height="29" /></td>
  </tr>
  <tr>
    <td valign="middle" background="images/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" bgcolor="#F7F8F9">
    	<table width="70%" cellpadding="0" cellspacing="0" border="0" style="margin-top:20px;">
        	<tr>
            	<td width="50%" valign="top" align="center">
                	  <script type="text/javascript" src="images/dtree/dtree.js"></script>
  					  <link rel="stylesheet" type="text/css"  href="images/dtree/dtree.css" />
                	<table width="80%" cellpadding="0" cellspacing="1" border="0" class="alltable">
                    	<tr>
                        	<td style="padding-left:10px; font-family:Arial, Helvetica, sans-serif; height:35px; line-height:35px; background:#F3F8F7;">
                            	<a href="javascript: d.openAll();"><strong style="color:#666;">打开列表</strong></a> |
								<a href="javascript: d.closeAll();"><strong style="color:#666;">关闭列表</strong></a>
                            </td>
                        </tr>
                        <tr>
                        	<td valign="top">
<div class="dtree" bgcolor="#cccccc">
	<?php
    	$s="<script type='text/javascript'>";
		$s=$s."var d = new dTree('d'); ";
		$s=$s."d.add(0,-1,'<strong style=color:#FF0000;>目录列表</strong>','#','这是网站信息目录列表','','/skins/default/img/tree/imgfolder.gif');";
		$sql="select * from p_type where p_deep=0 and language='".$_GET["language"]."'";
		$array=$d->Query($sql);
		$num=$d->Execute($sql);
		while($row=mysql_fetch_array($array))
		{
			$s=$s."d.add('".$row["p_id"]."',0,'".$row["p_title"]."','type_manage.php?state=edit&other=1&p_id=".$row["p_id"]."&language=".$row['language']."'); ";
			$sql1="select * from p_type where p_bigtype=".$row["p_id"]."";
			$num1=$d->Row($sql1);
			$array1=$d->Query($sql1);
			while($row1=mysql_fetch_array($array1))
			{
				$s=$s."d.add('".$row1["p_id"]."',".$row["p_id"].",'".$row1["p_title"]."','type_manage.php?state=edit&other=2&p_id=".$row1["p_id"]."&language=".$row1['language']."');";
				$sql2="select * from p_type where p_bigtype=".$row1['p_id'];
				$num2=$d->Row($sql2);
				$array2=$d->Query($sql2);
				while($row2=mysql_fetch_array($array2))
				{
					$s=$s."d.add('".$row2["p_id"]."',".$row1["p_id"].",'".$row2["p_title"]."','type_manage.php?state=edit&other=3&p_id=".$row2["p_id"]."&parents=".$row['p_id']."&language=".$row2['language']."');";	
				}
			}
		}
		$s=$s."document.write(d);";
		$s=$s."</script>";
		echo $s;
	?>
    <br><br>
</div>
                            </td>
                        </tr>
                    </table>
                </td>
                <td width="50%" align="center" valign="top">
                	<?php
                    	if($state=="edit")
						{
							include_once("inc/type_manage/type_manage_edit.php");
                    	}
						else
						{
							include_once("inc/type_manage/type_manage_add.php");
                    	}
					?>
                </td>
            </tr>
            <tr><td style="height:20px;"></td></tr>
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
<script language="javascript">
	function check()
	{
		var _p_title=form1.p_title.value;
		if(_p_title=="")
		{
			alert("请输入类别名称");
			form1.p_title.focus();
			return false;
		}
	}
</script>
<?php include_once("foot.php")?>
