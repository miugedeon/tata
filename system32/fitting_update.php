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
height : '300px'
});
</script>
<?php

	
	if(isset($_GET["state"]))
	{
		$p_id=$_POST["p_id"];
		$language=$_POST["language"];//语言
		$p_productname=$_POST["p_productname"];;//产品名称
		$p_content=$_POST["p_content"];//产品说明


		
		$sql="update p_fitting set ";
		$sql=$sql."p_productname='".$p_productname."'";
		$sql=$sql.",p_content='".$p_content."'";
		include("../common/myfile.php");
		//第一图片
		$p_pic1=$_FILES["p_pic1"];
		if($p_pic1["size"]!=0)
		{
			
			$fileName=date("Ymdhis").mt_rand(0,9)."1";
			$f=new myfile($fileName,$p_pic1,"upload/fitting/");
			if($f->type())
			{
				$sqlpic1="select * from p_fitting where p_id=".$p_id;
				$query=$d->Query($sqlpic1);
				$rowpic=mysql_fetch_array($query);
				if(!empty($rowpic["p_pic1"]))
				{
					if(file_exists($rowpic["p_pic1"]))
					{
						unlink($rowpic["p_pic1"]);
					}
				}
				$f->upload();
			}
			$sql=$sql.",p_pic1='".$f->fileName()."'";
		}
		//第二张图片
		$p_pic2=$_FILES["p_pic2"];
		if($p_pic2["size"]!=0)
		{
			$fileName=date("Ymdhis").mt_rand(0,9)."2";
			$f=new myfile($fileName,$p_pic2,"upload/fitting/");
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
				}
				$f->upload();
			}
			$sql=$sql.",p_pic2='".$f->fileName()."'";
		}
		
		
		$sql=$sql." where p_id=".$p_id;
		echo $sql;
		$d->Admin($_SESSION["admin"],"更新成功",$sql,"fitting_update.php?p_id=".$p_id."&language=".$language."");
	}
?>
<?php
	$p_id=$_GET["p_id"];
	$language="";
	if(isset($_GET["language"]))
	{
		$language.=$_GET["language"];
	}

	$sql="select * from p_fitting where p_id=".$p_id;
	$array=$d->Query($sql);
	while($rowlist=mysql_fetch_array($array))
	{
?>
<form name="form" id="form" action="fitting_update.php?state=edit" method="post" enctype="multipart/form-data">
<input type="hidden" name="language" id="language" value="<?php echo $language?>">
<input type="hidden" name="p_id" id="p_id" value="<?php echo $p_id?>">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="17" valign="top" background="images/mail_leftbg.gif"><img src="images/left-top-right.gif" width="17" height="29" /></td>
    <td valign="top" background="images/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2">
      <tr>
        <td height="31" style="text-align:right; font-size:12px; color:#666;">当前位置:　网站后台 &gt 零配件更新(A) </td>
      </tr>
    </table></td>
    <td width="16" valign="top" background="images/mail_rightbg.gif"><img src="images/nav-right-bg.gif" width="16" height="29" /></td>
  </tr>
  <tr>
    <td valign="middle" background="images/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" bgcolor="#F7F8F9">
    	<table width="100%" cellpadding="0" cellspacing="1" border="0" class="alltable" style="margin-top:20px;">
        	
            <tr style="height:35px; line-height:35px;">
            	<td align="center" class="c_666">型号:</td>
                <td style="padding-left:19px;"><input type="text" name="p_productname" id="p_productname" style="width:638px;" value="<?php echo $rowlist["p_productname"]?>"></td>
            </tr>
           
            <tr style="height:35px; line-height:35px;">
            	<td align="center" class="c_666">零件说明:</td>
                <td style="padding-left:19px; padding-right:20px; padding-top:10px; padding-bottom:10px;"><textarea id="p_content" name="p_content"><?php echo $rowlist["p_content"]?></textarea></td>
            </tr>
            <tr style="height:35px; line-height:35px;" w>
            	<td  width="150" align="center" class="c_666">产品小图:<br /><span style="color:red;">（小图格式：335 * 545）</span></td>
                <td style="padding-left:19px;">
                	<input type="file" name="p_pic1" id="p_pic1" style="width:400px;">
                    <?php
                    	if(!empty($rowlist["p_pic1"]))
						{
					?>
                    <?php echo $rowlist["p_pic1"]?>　<a href="pic_delete.php?p_id=<?php echo $rowlist["p_id"]?>&atction=fitting&pic=1&language=<?php echo $language?>">删除图片</a>
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
            <tr style="height:35px; line-height:35px;">
            	<td align="center" class="c_666">产品大图:</td>
                <td style="padding-left:19px;">
                	<input type="file" name="p_pic2" id="p_pic2" style="width:400px;">
                    <?php
                    	if(!empty($rowlist["p_pic2"]))
						{
					?>
                    <?php echo $rowlist["p_pic2"]?>　<a href="pic_delete.php?p_id=<?php echo $rowlist["p_id"]?>&atction=fitting&pic=2&language=<?php echo $language?>">删除图片</a>
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
</body>

<script language="javascript">
	function bigtype()
	{
		var _p_bigtype=form.p_bigtype.value;
		var _p_id=form.p_id.value;
		window.location.href="product_update.php?p_bigtype="+_p_bigtype+"&language=<?php echo $language?>&p_id="+_p_id+"";
	}
</script>
<script language="javascript" src="js/product_add.js"></script>
