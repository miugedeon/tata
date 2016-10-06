<?php include_once("config.php")?>
<?php include_once("../common/myfile.php");?>
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
<script charset="utf-8" src="../editor/kindeditor.js"></script>
<script>
KE.show({
id : 'p_content',
width : '100%',
height : '300px'
});
</script>
<script type="text/javascript">
function openURL(URL){
	window.open(URL,"newwindow",'height=450,width=415,top=50%,left=50%,toolbar=no,menubar=no,resizable=no,location=no,status=no');	
}
</script>
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
				$p_secondtype=$_POST["p_secondtype"];
				$p_title=$_POST["p_title"];
				$p_title_en=$_POST["p_title_en"];
				$language=$_POST["language"];
				$p_profile=$_POST['p_content'];
				$p_file=$_FILES["p_file"];
				$p_file2=$_FILES["p_file2"];
				
				$sql="";
				$sql1="insert into p_product_type";
				$sql2=$sql6="(";
				$sql4=$sql8=")";
				$sql5=" values";
				
				
				$sql3="p_bigtype,p_secondtype,p_title,p_profile,language";
				$sql7="".$p_bigtype.",".$p_secondtype.",'".$p_title."','".$p_profile."','".$language."'";
				
				

				if($p_file["size"]!=0)
				{
					$fileName=date("Ymdhis").mt_rand(0,9)."1";
					$f=new myfile($fileName,$p_file,"../upload/product/");
					if($f->type())
					{
						$f->upload();
					}
					$sql3.=",p_file";
					$sql7.=",'".$f->fileName()."'";
					
				}
				if($p_file2["size"]!=0)
				{
					$fileName=date("Ymdhis").mt_rand(0,9)."1";
					$f=new myfile($fileName,$p_file2,"../upload/product/");
					if($f->type())
					{
						$f->upload();
					}
					$sql3.=",p_file2";
					$sql7.=",'".$f->fileName()."'";
					
				}
				
				
				$sql.=$sql1.$sql2.$sql3.$sql4.$sql5.$sql6.$sql7.$sql8;
				//echo $sql;
				$d->Admin($_SESSION["admin"],"添加成功",$sql,"?language=".$language."");
			break;
			case "update":
				$p_id=$_POST["p_id"];
				$p_bigtype=$_POST["p_bigtype"];
				$p_secondtype=$_POST["p_secondtype"];
				$p_title=$_POST["p_title"];
				$p_title_en=$_POST["p_title_en"];
				$p_profile=$_POST["p_content"];
				$language=$_POST["language"];
				$p_file=$_FILES["p_file"];
				$p_file2=$_FILES["p_file2"];
				
				$sql="";
				$sql.="update p_product_type set p_bigtype=".$p_bigtype.",p_secondtype=".$p_secondtype.",p_title='".$p_title."',p_title_en='".$p_title_en."',p_profile='".$p_profile."'";
				
				if($p_file["size"]!=0)
				{
					$fileName=date("Ymdhis").mt_rand(0,9)."1";
					$f=new myfile($fileName,$p_file,"../upload/product/");
					if($f->type())
					{
						$sqlpic1="select * from p_product_type where p_id=".$p_id;
						$query=$d->Query($sqlpic1);
						$rowpic=mysql_fetch_array($query);
						if(!empty($rowpic["p_file"]))
						{
							if(file_exists($rowpic["p_file"]))
							{
								unlink($rowpic["p_file"]);
							}
						}
						$f->upload();
					}
					$sql.=",p_file="."'".$f->fileName()."'";
				}
				if($p_file2["size"]!=0)
				{
					$fileName=date("Ymdhis").mt_rand(0,9)."1";
					$f=new myfile($fileName,$p_file2,"../upload/product/");
					if($f->type())
					{
						$sqlpic1="select * from p_product_type where p_id=".$p_id;
						$query=$d->Query($sqlpic1);
						$rowpic=mysql_fetch_array($query);
						if(!empty($rowpic["p_file2"]))
						{
							if(file_exists($rowpic["p_file2"]))
							{
								unlink($rowpic["p_file2"]);
							}
						}
						$f->upload();
					}
					$sql.=",p_file2="."'".$f->fileName()."'";
				}
				$sql.=" where p_id=".$p_id;
				//echo $sql;
				$d->Admin($_SESSION["admin"],"更新成功",$sql,"?language=".$language."");
			break;
			case "del":
				//
//					$other=$_GET["other"];
//					$p_id=$_GET["p_id"];
//					$language=$_GET["language"];
//					if($other==1)
//					{
//						$sql="delete from p_product_type where p_bigtype=".$p_id."";
//						$d->Query($sql);
//						$sql="delete from p_product_type where p_id=".$p_id."";
//						$d->Query($sql);
//					}
//					else
//					{
//						$sql="delete from p_product_type where p_id=".$p_id."";
//						$d->Query($sql);
//					}
//					alertUrl("删除成功","?language=".$language."");


					echo "删除";
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
        <td height="31" style="text-align:right; font-size:12px; color:#666;">当前位置:　网站后台 &gt 产品分类 </td>
      </tr>
    </table></td>
    <td width="16" valign="top" background="images/mail_rightbg.gif"><img src="images/nav-right-bg.gif" width="16" height="29" /></td>
  </tr>
  <tr>
    <td valign="middle" background="images/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" bgcolor="#F7F8F9">
    	<table width="100%" cellpadding="0" cellspacing="0" border="0" style="margin-top:20px;">
        	<tr>
            	<td width="30%" valign="top" align="center">
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
		$s=$s."d.add(0,-1,'<strong style=color:#FF0000;>目录列表</strong>','#','这是产品分类管理','','/skins/default/img/tree/imgfolder.gif');";
		$sql="select * from p_product_type where p_bigtype=0 and language='".$_GET["language"]."'";
		$array=$d->Query($sql);
		$num=$d->Execute($sql);
		$i=1;
		while($row=mysql_fetch_array($array))
		{
			$s=$s."d.add('a".$i."',0,'".$row["p_title"]."','?state=edit&other=1&p_id=".$row["p_id"]."&language=".$row['language']."'); ";
			$sql1="select * from p_product_type where p_bigtype=".$row["p_id"]." and p_secondtype=0";
			$num1=$d->Row($sql1);
			$array1=$d->Query($sql1);
			$j=1;
			while($row1=mysql_fetch_array($array1))
			{
				$s=$s."d.add('b".$j.$i."','a".$i."','".$row1["p_title"]."','?state=edit&other=2&p_id=".$row1["p_id"]."&language=".$row1['language']."');";
				$sql2="select * from p_product_type where p_secondtype=".$row1["p_id"]." and language='".$_GET['language']."'";
				$num2=$d->Row($sql2);
				$array2=$d->Query($sql2);
				$k=1;
				while($row2=mysql_fetch_array($array2))
				{
					$s=$s."d.add('c".$k."','b".$j.$i."','".$row2["p_title"]."','?state=edit&other=3&p_big=".$row2['p_secondtype']."&p_id=".$row2["p_id"]."&language=".$row2['language']."');";	
					$k++;
				}
				$j++;
			}
			$i++;
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
                <td width="70%" align="left" valign="top">
                	<?php
                    	if($state=="edit")
						{
							include_once("inc/product/type_edit.php");
                    	}
						else
						{
							include_once("inc/product/type_add.php");
                    	}
					?>
                </td>
            </tr>
            <?php /*?><tr>
            <td height="20" colspan="2"></td>
            </tr>
            <tr>
            <td colspan="2" align="center">
            	<table width="60%" class="alltable">
                	<tr>
                    	<td width="30%" align="center" style="font-family:Arial, Helvetica, sans-serif; height:35px; line-height:35px;  background:#F3F8F7;"><strong style="color:#666;">参数名称</strong></td>
                        <td width="70%" align="center" style="font-family:Arial, Helvetica, sans-serif; height:35px; line-height:35px;  background:#F3F8F7;"><strong style="color:#666;">参数值</strong></td>
                    </tr>
                    <?php
						if(!isset($_GET['p_id'])){
					?>
                    <tr>
                    	<td colspan="2" align="center" height="30">请选择产品系列</td>
                    </tr>
                    <?php
						}else{
							$p_id=$_GET['p_id'];
							$sql="select * from p_product_para_list where p_series=$p_id";
							$query=mysql_query($sql);
							$num=@mysql_num_rows($query);
							if($num>0){
								while($rows=mysql_fetch_array($query)){
					?>
                    <tr>
                    	<td align="center" height="30"><?php echo $rows['p_para_name']; ?></td>
                        <td align="center" height="30"><?php echo $rows['p_para_value']; ?></td>
                    </tr>
                    <?php
								}
							}else{
					?>
                    <tr>
                    	<td colspan="2" align="center" height="30">该系列尚未添加产品参数，<a href="product_para_add.php?p_id=<?php echo $p_id; ?>&language=<?php echo $language; ?>" style="color:#06F;">点击添加</a></td>
                    </tr>
                    <?php
							}
						}
					?>
                </table>
            </td>
            </tr><?php */?>
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
