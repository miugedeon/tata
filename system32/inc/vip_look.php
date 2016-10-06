<?php
	if(isset($_GET["state"]))
	{
		$language=$_POST["language"];
		$id=$_POST["id"];
		$is_vip=$_POST["is_vip"];
		$sql="update p_user set ";
		$sql.="is_vip='".$is_vip."'";


		$sql.=" where p_id=".$id;
		$d->Query($sql);
		echo "<script language='javascript'>alert('更新成功');location.href='vip_new.php?language=".$language."'</script>";
		
	}
	$p_id=$_GET["p_id"];
	$language=$_GET["language"];
	$sql="select * from p_user where p_id=".$p_id."";
	$query=$d->Query($sql);
	while($row=mysql_fetch_array($query))
	{
?>
<form name="userForm" id="userForm" action="?state=edit" method="post">
<input type="hidden" id="id" name="id" value="<?php echo $row["p_id"]?>">
<input type="hidden" name="language" value="<?php echo $language?>" id="language" />
<div style="width:725px; margin:0 auto;">

    	
        <div>
        	<table width="650" cellpadding="0" cellspacing="1" border="0" style="margin:0 auto; margin-top:20px;" id="userinfo">
            	<tr>
                	<td width="169" align="right" style="width:100px; text-align:right; background:#F7F5E8; color:#666;">编号:</td>
                  <td width="478" style="background:#F7F5E8;"><input type="text" name="p_id" id="p_id" disabled="disabled" value="<?php echo $row["p_id"]?>"></td>
              </tr>
                <tr>
                	<td align="right" style="color:#666;">用户名:</td>
                    <td>
                    	<input type="text" name="p_userName" id="p_userName" value="<?php echo $row["p_userName"]?>" disabled="disabled" />
                    </td>
                </tr>
                <tr>
                	<td align="right" style="background:#F7F5E8; color:#666;">密码:</td>
                    <td style="background:#F7F5E8;">
                    	<input type="password" disabled="disabled" name="p_userPwd" id="p_userPwd" /><span style="color:#666; font-family:Arial, Helvetica, sans-serif;"><?php echo $row["p_userPwd"]?>&nbsp;注:出于安全考虑,密码已加密处理</span>
                    </td>
                </tr>
                <tr>
                	<td align="right" style="color:#666;">性别:</td>
                    <td>
                    	<input type="radio" name="p_sex" disabled="disabled" id="p_sex" value="男" <?php if($row["p_sex"]=="男"){?>checked="checked"<?php }?> />男
                        <input type="radio" name="p_sex" disabled="disabled" id="p_sex" value="女" <?php if($row["p_sex"]=="女"){?>checked="checked"<?php }?>/>女
                    </td>
                </tr>
                <tr>
                	<td align="right" style="background:#F7F5E8; color:#666;">真实姓名:</td>
                    <td style="background:#F7F5E8;"><input disabled="disabled" type="text" name="p_RealName" id="p_RealName" value="<?php echo $row["p_RealName"]?>"></td>
                </tr>
                <tr>
                	<td align="right" style="color:#666;">电子邮件:</td>
                    <td><input type="text" name="p_email" disabled="disabled" value="<?php echo $row["p_email"]?>" id="p_email"></td>
                </tr>
                <tr>
                	<td align="right" style="background:#F7F5E8; color:#666;">联系电话:</td>
                    <td style="background:#F7F5E8;">
                    	<input type="text" name="p_tel" disabled="disabled" id="p_tel" value="<?php echo $row["p_tel"]?>">
                    </td>
                </tr>
                <tr>
                	<td align="right" style="color:#666;">传真号码:</td>
                    <td><input type="text" name="p_fax" id="p_fax" disabled="disabled" value="<?php echo $row["p_fax"]?>"></td>
                </tr>
                <tr>
                	<td align="right" style="background:#F7F5E8; color:#666;">联系地址:</td>
                    <td style="background:#F7F5E8;"><input disabled="disabled" type="text" name="p_address" id="p_address" style="width:300px;" value="<?php echo $row["p_address"]?>"></td>
                </tr>
                <tr>
                	<td align="right" style="color:#666;">备注信息:</td>
                    <td>
                    	<textarea rows="5" cols="50" disabled="disabled" id="p_other" name="p_other"><?php echo $row["p_other"]?></textarea>
                    </td>
                </tr>
                <tr>
                	<td align="right" style="color:#666;">操作:</td>
                    <td>
                    	<input type="radio" name="is_vip" id="is_vip" value="1" <?php if($row["is_vip"]==1){?>checked="checked"<?php }?> />加入会员
                        <input type="radio" name="is_vip" id="is_vip" value="0" <?php if($row["is_vip"]==0){?>checked="checked"<?php }?> />暂时不加
                    </td>
                </tr>
                <tr>
                	<td align="right" style="background:#F7F5E8; color:#666;">注册时间:</td>
                    <td style="background:#F7F5E8;">2012-5-10</td>
                </tr>
                <tr>
                	<td colspan="2" style="height:50px; line-height:50px; text-align:center;">
                    	<input type="submit" name="send" id="send" value="更新信息" class="send01" onClick="return u_sends()" />
                    </td>
                </tr>
                <tr>
                	<td colspan="2" style="height:50px; padding:20px; color:#C5A157; text-align:left; line-height:200%;">
                    	温馨提示:如果密码为空时,系统则不更新密码信息,请妥善保管好用户名和密码，帐号请勿借予他人使用,如本公司发现此类情况,我司将做出封号注销用户信息等处理,网站会员系统本公司拥有最终解释权,谢谢您的合作.
                    </td>
                </tr>
            </table>
            
            <br><br><br>
        </div>
</div>
<?php
	}
?>
</form>

<style type="text/css">
#userinfo{ background:#ECE9D8;}
#userinfo tr td{ height:30px; background:#fff;}
.send01{ background:#ECE9D8; border:#ccc 1px solid; width:70px; height:20px; line-height:20px; cursor:pointer;}
</style>