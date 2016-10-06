<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
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
	if(isset($_GET["state"]))
	{
		if($_GET["state"]=="submit")
		{
			$pwd=$_POST['downpwd'];
			$sql="update lxy_download_pwd set pwd='".$pwd."'";
			mysql_query($sql);
			echo "<script lanugage='javascript'>alert('设置成功');location.href='setdownpwd.php'</script>";
		}
	}
?>

<form name="myform" id="myform" action="?state=submit" method="post">
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
                                            <td align="left" style="padding-top:3px; color:#0C296B; background:#DFEFFF;"><strong>资料下载管理面板中心</strong><span style="font-weight:bold;margin-left:500px;"><a href="dowload.php?language=<?php  echo $_GET["language"]; ?>">返回</a></span></td>
                                         </tr>
                                    </table>
                                </td>
                            </tr>

                            <tr>
                            	<td>
                                	<table width="100%" cellpadding="0" cellspacing="1" border="0" class="allTable">
                                    	<tr style="height:40px; line-height:40px;">
                                        	<td style="width:70px;">下载密码：</td>
                                            <td align="left">
                                            <?php
											$sql="select * from lxy_download_pwd order by id asc limit 1";
											$query=mysql_query($sql);
											$rs=@mysql_fetch_array($query);
											?>
                                            <input type="text" name="downpwd" id="downpwd" style="width:320px;" value="<?php echo $rs['pwd'] ?>"/>&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" id="submit" value="确认"/></td>
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
                                      
</body>
</html>
