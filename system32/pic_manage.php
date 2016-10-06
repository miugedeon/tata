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
<title>中国品牌网</title>
<link href="css/admin.css" rel="stylesheet" type="text/css">
<body>
<?php
	include_once("../common/myfile.php");
	$language="";
	if(isset($_GET["language"]))
	{
		$language=$_GET["language"];
	}
	
	$state="";
	if(isset($_GET["state"]))
	{
				$state=$_GET["state"];
				$p_id=$_POST["p_id"];
				$language=$_POST["language"];
				$p_mark=$_POST["p_mark"];
				$p_title=$_POST["p_title"];
				$p_sort=0+$_POST["p_sort"];
				$p_pic=$_FILES["p_pic"];
				$p_pic2=$_FILES["p_pic2"];
				$p_url=$_POST["p_url"];

		switch($state)
		{
			case "add":
				$fileName=date("Ymdhis").mt_rand(0,9);				
				$f=new myfile($fileName,$p_pic,"../upload/picture/");
				if($f->type())
				{
					$f->upload();
					$p_pics=$f->fileName();
				}
				
				$fileName=date("Ymdhis").mt_rand(0,9);				
				$f=new myfile($fileName,$p_pic,"../upload/picture/");
				if($f->type())
				{
					$f->upload();
					$p_pic2s=$f->fileName();
				}
				$sql="insert into p_banner(p_title,p_pic2,p_mark,language,p_pic,p_url,p_sort) values('".$p_title."','".$p_pic2s."','".$p_mark."','".$language."','".$p_pics."','".$p_url."',".$p_sort.")";
				$d->Admin($_SESSION["admin"],"添加成功",$sql,"pic_manage.php?language=".$language."");
			break;
			case "delete":
				$p_id=$_GET["p_id"];
				$language=$_GET["language"];
				$state=$d->Admin1($_SESSION["admin"]);
				if($state==1)
				{
					$sql="select * from p_banner where p_id=".$p_id;
					$query=$d->Query($sql);
					$row=mysql_fetch_array($query);
					if(!empty($row["p_pic"]))
					{
						if(file_exists($row["p_pic"]))
						{
							unlink($row["p_pic"]);
						}
					}
					$sql="delete from p_banner where p_id=".$p_id;
					$d->Query($sql);
					alertUrl("删除成功","pic_manage.php?language=".$language."");
				}
				else
				{
					alertBack("权限不够");
				}
			break;
			case "edit":
				$p_id=$_GET["p_id"];
				$language=$_GET["language"];
			break;
			case "update":
				
				$sql="update p_banner set p_mark='".$p_mark."'";
				$sql=$sql.",p_url='".$p_url."'";
				$sql=$sql.",p_title='".$p_title."'";
				$sql=$sql.",p_sort=".$p_sort."";
				$fileName=date("Ymdhis").mt_rand(0,9);				
				$f=new myfile($fileName,$p_pic,"upload/banner/");
				$state=$d->Admin1($_SESSION["admin"]);
				if($p_pic["size"]!=0)
				{
					if($f->type())
					{
						$sqlpic="select * from p_banner where p_id=".$p_id;
						$query=$d->Query($sqlpic);
						$row=mysql_fetch_array($query);
						if(!empty($row["p_pic"]))
						{
							if(file_exists($row["p_pic"]))
							{
								unlink($row["p_pic"]);
							}
						}
						$f->upload();
						$sql=$sql.",p_pic='".$f->fileName()."'";
					}

				}
				$fileName=date("Ymdhis").mt_rand(0,9);				
				$f=new myfile($fileName,$p_pic2,"../upload/picture/");
				if($p_pic2["size"]!=0)
				{
					if($f->type())
					{
						$sqlpic="select * from p_banner where p_id=".$p_id;
						$query=$d->Query($sqlpic);
						$row=mysql_fetch_array($query);
						if(!empty($row["p_pic2"]))
						{
							if(file_exists($row["p_pic2"]))
							{
								unlink($row["p_pic2"]);
							}
						}
						$f->upload();
						$sql=$sql.",p_pic2='".$f->fileName()."'";
					}

				}
					$sql=$sql." where p_id=".$p_id;
					$d->Query($sql);
					//echo $sql;
					alertUrl("更新成功","pic_manage.php?language=".$language."");

			break;
		}
	}
	else
	{
		$state="add";
	}

?>
<form name="form" id="form" method="post" action="?state=<?php if($state=="add"){?>add<?php }else{?>update<?php }?>" enctype="multipart/form-data">
<input type="hidden" name="language" id="language" value="<?php echo $language?>">

<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="17" valign="top" background="images/mail_leftbg.gif"><img src="images/left-top-right.gif" width="17" height="29" /></td>
    <td valign="top" background="images/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2">
      <tr>
        <td height="31" style="text-align:right; font-size:12px; color:#666;">当前位置:　网站后台 &gt 内页图片 </td>
      </tr>
    </table></td>
    <td width="16" valign="top" background="images/mail_rightbg.gif"><img src="images/nav-right-bg.gif" width="16" height="29" /></td>
  </tr>
  <tr>
    <td valign="middle" background="images/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" bgcolor="#F7F8F9">
        <?php
        	if($state=="add")
			{
        	}
			else
			{
        	}
		?>
		
		
		
		
		<?php
		        	if($state=="add")
			{
			
        	}
			else
			{
				$p_id=$_GET["p_id"];
	$language=$_GET["language"];
	$sql="select * from p_banner where p_id=".$p_id;
	$query=$d->Query($sql);
	$row=mysql_fetch_array($query);
        	}

	
?>
<table width="100%" cellpadding="0" cellspacing="1" border="0" class="alltable" style="margin-top:20px;">
<input type="hidden" name="p_id" id="p_id" value="<?php echo $p_id?>" />
<input type="hidden" name="language" id="language" value="<?php echo $language?>" />
    <tr style="height:35px; line-height:35px;">
        <td width="100" style="text-align:center; color:#666;">图片隶属:</td>
        <td>
            
            <select name="p_mark" id="p_mark">
										            <?php
            	$sql="select * from p_list where p_typelist='pic' and language='cn'";
				$query=$d->Query($sql);
				while($row2=mysql_fetch_array($query))
				{
				?>
				<option value="<? echo $row2[p_mark]?>" <?php if($row["p_mark"]==$row2["p_mark"]){?>selected="selected"<?php }?> ><? echo $row2[p_title]?></option>
				<?
				}
			?>
            </select>
            
        </td>
    </tr>
	<tr style="height:35px; line-height:35px;">
        <td style="text-align:center; color:#666;">标题:</td>
        <td><input type="text" name="p_title" id="p_title" style="width:638px;" value="<?php echo $row["p_title"]?>"></td>
    </tr>
	
	<tr style="height:35px; line-height:35px;">
        <td style="text-align:center; color:#666;">排序(越大越前):</td>
        <td><input type="text" name="p_sort" id="p_sort" style="width:638px;" value="<?php echo $row["p_sort"]?>"></td>
    </tr>
	
    <tr style="height:35px; line-height:35px;">
        <td style="text-align:center; color:#666;">图片1:</td>
        <td>
            <table cellpadding="0" cellspacing="0">
            	<tr>
                	<td><input type="file" name="p_pic" id="p_pic" style="width:270px;"></td>
                    <td width="20"></td>
                    <td><?php echo $row["p_pic"]?></td>
                </tr>
            </table>
        </td>
    </tr>
	<tr style="height:35px; line-height:35px;">
        <td style="text-align:center; color:#666;">图片2:</td>
        <td>
            <table cellpadding="0" cellspacing="0">
            	<tr>
                	<td><input type="file" name="p_pic2" id="p_pic2" style="width:270px;"></td>
                    <td width="20"></td>
                    <td><?php echo $row["p_pic2"]?></td>
                </tr>
            </table>
        </td>
    </tr>
	<tr style="height:35px; line-height:35px;">
        <td style="text-align:center; color:#666;">链接网址:</td>
        <td><input type="text" name="p_url" id="p_url" style="width:638px;" value="<?php echo $row["p_url"]?>"></td>
    </tr>
    <tr style="height:35px; line-height:35px;">
        <td style="text-align:center; color:#666;">相关操作:</td>
        <td><input type="submit" name="" id="" value="更新(U)" class="but_60" onClick="return check1()"></td>
    </tr>
</table>

<script language="javascript">
	function check()
	{
		var _p_mark=form.p_mark.value;
		if(_p_mark==0)
		{
			alert("请选择类别");
			form.p_mark.focus();
			return false;
		}
	}
</script>











        <table width="100%" cellpadding="0" cellspacing="1" border="0" class="alltable" style="margin-top:15px;">
        	<tr style="height:30px; line-height:30px;">
			

            	<td width="10%" style="background:#F3F8F7; text-align:center;"><strong style=" color:#333">编号</strong></td>
				<td width="10%" style="background:#F3F8F7; text-align:center;"><strong style=" color:#333">排序号</strong></td>
                <td width="20%" style="background:#F3F8F7; text-align:center;"><strong style=" color:#333">图片类别</strong></td>
                <td style="background:#F3F8F7; text-align:center;"><strong style=" color:#333">图片</strong></td>
				<td style="background:#F3F8F7; text-align:center;"><strong style=" color:#333">图片URL</strong></td>
				<td style="background:#F3F8F7; text-align:center;"><strong style=" color:#333">链接地址</strong></td>
                <td style="background:#F3F8F7; text-align:center;"><strong style=" color:#333">管理</strong></td>
            </tr>
            <?php
            	$sql="select a.*,b.p_title as bname from p_banner a left join (select * from p_list where p_mark<>'' ) as b on b.p_mark=a.p_mark  order by a.p_mark,a.p_sort desc";
				$query=$d->Query($sql);
				while($row=mysql_fetch_array($query))
				{
			?>
            <tr style="height:25px; line-height:25px;">
            	<td width="10%" style="text-align:center; color:#666;"><?php echo $row["p_id"]?></td>
				<td width="10%" style="text-align:center; color:#666;"><?php echo $row["p_sort"]?></td>
                <td width="20%" style="text-align:center; color:#666;">
				<?php echo $row["bname"]?>
                </td>
				<td style="text-align:center; color:#666;">
				<img src="<?php echo $row["p_pic"]?>" alt="" height=100 /></td>
                <td style="text-align:center; color:#666;"><a target="_blank" id="pic" href="pic_look.php?p_id=<?php echo $row["p_id"]?>"><?php echo $row["p_pic"]?></a></td>
                <td style="text-align:center; color:#666;"><a target="_blank" id="pic" href="pic_look.php?p_id=<?php echo $row["p_id"]?>"><?php echo $row["p_url"]?></a></td>
                <td style="text-align:center; color:#666;"><a onClick="return confirm('您确认删除吗？')" href="?state=delete&p_id=<?php echo $row["p_id"]?>&language=<?php echo $language?>">删除</a>|<a href="?state=edit&p_id=<?php echo $row["p_id"]?>&language=<?php echo $language?>">更新</a></td>
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
