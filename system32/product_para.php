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
<title>�й�Ʒ����</title><body>
<?php
	$language="";
	if(isset($_GET["language"]))
	{
		$language=$_GET["language"];
	}
	$state="";
	if(isset($_GET["state"]))
	{
		$state=$_GET["state"];
		switch($state)
		{
			case "add":
				$p_para_name=$_POST["p_para_name"];	
				$language=$_POST["language"];
				
				$sql="select * from p_product_para where p_para_name='".$p_para_name."' and language='".$language."'";
				$query=$d->Query($sql);
				$rows=mysql_num_rows($query);
				if($rows==0)
				{
					include_once("inc/product/para_pic_upload.php");
					$sql="insert into p_product_para(p_para_name,p_para_pic,language) values('".$p_para_name."','".$p_para_picPath."','".$language."')";
					$d->Admin($_SESSION["admin"],"��ӳɹ�",$sql,"product_para.php?language=".$language);
				}
				else
				{
					alertBack("�����Ѵ���");
				}
			break;
			
			case "delete":
				$p_id=$_GET["p_id"];
				$language=$_GET["language"];
				$sql="delete from p_product_para where p_id=".$p_id;
				$d->Admin($_SESSION["admin"],"ɾ���ɹ�",$sql,"product_para.php?language=".$language);
			break;
			case "edit":
				$p_id=$_POST["p_id"];
				$language=$_POST["language"];
				$p_para_name=$_POST["p_para_name"];	
				include_once("inc/product/para_pic_upload.php");
				$sql="update p_product_para set p_para_name	='".$p_para_name."',p_para_pic='".$p_para_picPath."' where p_id=".$p_id;
				$d->Admin($_SESSION["admin"],"���³ɹ�",$sql,"product_para.php?language=".$language);
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

<form name="form" id="form" enctype="multipart/form-data" action="product_para.php?state=<?php if($state=="add"){?>add<?php }else{?>edit<?php }?>" method="post" >
<input type="hidden" name="language" id="language" value="<?php echo $language?>" />
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="17" valign="top" background="images/mail_leftbg.gif"><img src="images/left-top-right.gif" width="17" height="29" /></td>
    <td valign="top" background="images/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2">
      <tr>
        <td height="31" style="text-align:right; font-size:12px; color:#666;">��ǰλ��:����վ��̨ &gt ��Ʒ�������� </td>
      </tr>
    </table></td>
    <td width="16" valign="top" background="images/mail_rightbg.gif"><img src="images/nav-right-bg.gif" width="16" height="29" /></td>
  </tr>
  <tr>
    <td valign="middle" background="images/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" bgcolor="#F7F8F9">
    	<table width="450" cellpadding="0" cellspacing="1" border="0" class="alltable" style="margin-top:20px;">
        	<?php
            	if($state=="update")
				{
				$p_id=$_GET["p_id"];
				$language=$_GET["language"];
				$sql="select * from p_product_para where p_id=".$p_id;
				$query=$d->Query($sql);
				while($row=mysql_fetch_array($query))
					{
			?>
            <input type="hidden" name="p_id" id="p_id" value="<?php echo $_GET['p_id']; ?>">
            <input type="hidden" name="language" id="language" value="<?php echo $_GET['language']; ?>">
        	<tr style="height:35px; line-height:35px;">
            	<td width="100" align="center" style="color:#333;">��������:</td>
                <td align="center"><input type="text" name="p_para_name" id="p_para_name" style="width:200px;" value="<?php echo $row["p_para_name"]?>" /></td>
                <td align="center" rowspan="2"><input type="submit" name="send" id="send" value="����" class="but_60" onClick="return check()" /></td>
            </tr>
            <tr style="height:35px; line-height:35px;">
            <td width="100" align="center" style="color:#333;">����ͼƬ</td>
            <td align="center"><input type="file" name="p_para_pic" id="p_para_pic" /><br /><?php if($row["p_para_pic"]=="") {?>����ͼƬ<?php }else{  echo $row["p_para_pic"]; }?></td>
            </tr>
            <?php
					}
            	}
				else
				{
			?>
            <tr style="height:35px; line-height:35px;">
            	<td width="100" align="center" style="color:#333;">��������:</td>
                <td align="center"><input type="text" name="p_para_name" id="p_para_name" style="width:200px;" /></td>
                <td align="center" rowspan="2"><input type="submit" name="send" id="send" value="���(A)" class="but_60" onClick="return check();" /></td>
            </tr>
            <tr style="height:35px; line-height:35px;">
            <td width="100" align="center" style="color:#333;">����ͼƬ</td>
            <td align="center"><input type="file" name="p_para_pic" id="p_para_pic" /></td>
            </tr>
            <?php
            	}
			?>
        </table>
        
        <table width="800" cellpadding="0" cellspacing="1" border="0" class="alltable" style="margin-top:15px;">
        	<tr style="height:35px; line-height:35px;">
            	<td align="center"><strong style="color:#333333;">���</strong></td>
                <td align="center"><strong style="color:#333333;">��������</strong></td>
                <td align="center"><strong style="color:#333333;">����ͼƬ</strong></td>
                <td align="center"><strong style="color:#333333;">����</strong></td>
            </tr>
            <?php
            	$sql="select * from p_product_para where language='".$language."'";
				$query=$d->Query($sql);
				while($row=mysql_fetch_array($query))
				{
			?>
            <tr style="height:80px; line-height:25px;">
            	<td width="100" align="center" style="color:#333;"><?php echo $row["p_id"]?></td>
                <td align="center" style="color:#333;"><?php echo $row["p_para_name"]?></td>
                 <td align="center" style="color:#333;"><?php if($row["p_para_pic"]=="") {?>����ͼƬ<?php }else{ ?><img src="<?php echo $row["p_para_pic"]?>" width="65" height="65"><?php } ?></td>
                <td align="center" style="color:#333;"><a href="product_para.php?state=delete&p_id=<?php echo $row["p_id"]?>&language=<?php echo $language?>">ɾ��</a>|<a href="product_para.php?state=update&p_id=<?php echo $row["p_id"]?>&language=<?php echo $language?>">����</a></td>
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
</form>
</body>


<script language="javascript">
	function check()
	{
		var _p_title=form.p_para_name.value;
		if(_p_title=="")
		{
			alert("�������������");
			form.p_para_name.focus();
			return false;
		}
	}
</script>
