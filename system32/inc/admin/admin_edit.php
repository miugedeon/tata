
<?php
	$sql="select * from p_admin where p_id=".$p_id;
	mysql_query("set names gbk");
	$query=mysql_query($sql);
	while($row=mysql_fetch_array($query))
	{
?>
<form name="form1" id="form1" action="admin_manage.php?state=update" method="post">
<input type="hidden"  name="p_id" id="p_id" value="<?php echo $p_id?>" />
<table width="70%" cellpadding="0" cellspacing="1" border="0" class="alltable" style="margin-top:20px;">
    <tr style="height:35px; line-height:35px;">
        <td width="10%" align="center" class="333" style="background:#fff;">用户名:</td>
        <td align="center"><input type="text" name="p_username" id="p_username" value="<?php echo $row["p_username"]?>"></td>
        <td width="10%" align="center" class="333" style="background:#fff;">密　码:</td>
        <td align="center"><input type="password" name="p_userpwd" id="p_userpwd"></td>
        <td width="12%" align="center" class="333" style="background:#fff;">用户权限:</td>
        <td align="center">
            <select name="p_lv" id="p_lv">
                <option value="0">请选择权限</option>
                <option value="1" <?php if($row["p_lv"]==1){?>selected="selected"<?php }?>>系统管理员</option>
                <option value="2" <?php if($row["p_lv"]==2){?>selected="selected"<?php }?>>普通用户</option>
            </select>
        </td>
        <td align="center" width="100" style="background:#fff;">
            <input type="submit" id="" value="更新(U)" name="" class="but_60" onClick="return user_check_update()">
        </td>
    </tr>
</table>
</form>
<?php
	}
?>