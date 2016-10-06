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
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="17" valign="top" background="images/mail_leftbg.gif"><img src="images/left-top-right.gif" width="17" height="29" /></td>
    <td valign="top" background="images/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2">
      <tr>
        <td height="31" style="text-align:right; font-size:12px; color:#666;">当前位置:　网站后台 &gt 网上报名 </td>
      </tr>
    </table></td>
    <td width="16" valign="top" background="images/mail_rightbg.gif"><img src="images/nav-right-bg.gif" width="16" height="29" /></td>
  </tr>
  <tr>
    <td valign="middle" background="images/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" bgcolor="#F7F8F9">
    	<table width="100%" cellpadding="0" cellspacing="1" border="0"  style="margin-top:20px;">
        	<tr style="">
            	<td align="center">
                	<form name="fomr1" id="form1" action="?state=edit" method="post">
                	<?php
					
						if(isset($_GET["state"]))
						{
						
							$p_id=$_POST["p_id"];
							$p_index;
							if(isset($_POST["p_index"])){$p_index=1;}else{$p_index=0;}
							$sql="update p_baoming set p_index=".$p_index." where p_id=".$p_id;
							$d->Admin($_SESSION["admin"],"更新成功",$sql,"netBaoming.php");
							$d->Close();
						}
					
						if(isset($_GET["p_id"]))
						{
                    	$p_id=$_GET["p_id"];
						$sql="update p_baoming set p_state=1 where p_id=".$p_id;
						$d->Query($sql);
						$sql="select * from p_baoming where p_id=".$p_id;
						$query=$d->Query($sql);
						while($row=mysql_fetch_array($query))
						{
					?>
                    <input type="hidden" name="p_id" id="p_id" value="<?php echo $row["p_id"]?>">
                	<table width="600" cellpadding="0" cellspacing="1" border="0" class="alltable">
                    	<tr>
                        	<td colspan="4" align="center" height="40" style="background:#cccc;"><strong><?php echo $row["p_userName"]?>个人信息</strong></td>
                        </tr>
                        <tr style="height:30px;">
                        	<td align="center" width="150" style="color:#666;">编号:</td>
                            <td align="center" style="color:#666;"><?php echo $row["p_id"]?></td>
                            <td align="center" width="150" style="color:#666;">报名时间:</td>
                            <td align="center" style="color:#666;"><?php echo $row["p_addDate"]?></td>
                        </tr>
                        <tr style="height:30px; background:#cccc;" >
                        	<td align="center" width="150" style="color:#666;">报读专业:</td>
                            <td align="center" style="color:#666;"><?php echo $row["p_specialty"]?></td>
                            <td align="center" width="150" style="color:#666;">专业细分:</td>
                            <td align="center" style="color:#666;"><?php echo $row["p_specialty2"]?></td>
                        </tr>
                        <tr style="height:30px">
                        	<td align="center" width="150" style="color:#666;">姓名:</td>
                            <td align="center" style="color:#666;"><?php echo $row["p_userName"]?></td>
                            <td align="center" width="150" style="color:#666;">性别:</td>
                            <td align="center" style="color:#666;"><?php echo $row["p_sex"]?></td>
                        </tr>
                        <tr style="height:30px">
                        	<td align="center" width="150" style="color:#666;">民族:</td>
                            <td align="center" style="color:#666;"><?php echo $row["p_Nation"]?></td>
                            <td align="center" width="150" style="color:#666;">出生日期:</td>
                            <td align="center" style="color:#666;"><?php echo $row["p_birthDate"]?></td>
                        </tr>
                        <tr style="height:30px">
                        	<td align="center" width="150" style="color:#666;">最高学历:</td>
                            <td align="center" style="color:#666;"><?php echo $row["p_maxEdu"]?></td>
                            <td align="center" width="150" style="color:#666;">联系地址:</td>
                            <td align="center" style="color:#666;"><?php echo $row["p_address"]?></td>
                        </tr>
                        <tr style="height:30px">
                        	<td align="center" width="150" style="color:#666;">身份证号:</td>
                            <td align="left" colspan="3" style="color:#666;"><?php echo $row["p_IDnumber"]?></td>
                            
                      </tr>
                        <tr style="height:30px">
                        	<td align="center" width="150" style="color:#666;">联系电话:</td>
                            <td align="left" colspan="3" style="color:#666;"><?php echo $row["p_tel"]?></td>
                      </tr>
                        <tr style="height:30px">
                        	<td align="center" width="150" style="color:#666;">信息备注:</td>
                            <td align="left" colspan="3" style="color:#666;"><?php echo $row["p_content"]?></td>
                      </tr>
                        <tr style="height:30px">
                        	<td align="center" width="150" style="color:#666;">报名情况:</td>
                            <td align="left" colspan="3" style="color:#666;">
                            	
                               <?php
                               		if($row["p_index"]==1)
									{
							   ?>
                               <input type="checkbox" name="p_index" id="p_index" value="1" checked="checked">
                               
                               <?php
                               		}
									else
									{
							   ?>
                               <input type="checkbox" name="p_index" id="p_index" value="0">
                               <?php
                               		}
							   ?>
                          </td>
                        </tr>
                        <tr style="height:30px">
                        	
                            <td align="center" colspan="4" height="60">
                            	<table cellpadding="0" cellspacing="0" border="0">
                                	<tr>
                                    	<td><input type="submit" name="" id="" class="but_60" value="确认"></td>
                                    	<td><input type="button" name="" id="" class="but_60" value="返回" onClick="history.go(-1);"></td>
                                        <td width="5"></td>
                                    	<td align="center"><a href="javascript:window.print();" class="but_60">打印</a></td>
                                        <td width="5"></td>
                                        <td align="center"><a onClick="return confirm('您确认删除吗？')" href="baomingdelete.php?p_id=<?php echo $row["p_id"]?>" class="but_60">删除</a></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                    <?php
							}
                    	}
					?>
                    </form>
                    <br><br><br><br><br><br><br>
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
</body>
