<form name="form1" id="form1" action="admin_manage.php?state=add" method="post">
<table width="70%" cellpadding="0" cellspacing="1" border="0" class="alltable" style="margin-top:20px;">
<tr style="height:35px; line-height:35px;">
        <td width="10%" align="center" class="333" style="background:#fff;">用户名:</td>
        <td align="center"><input type="text" name="p_username" id="p_username"></td>
        <td width="10%" align="center" class="333" style="background:#fff;">密　码:</td>
        <td align="center"><input type="password" name="p_userpwd" id="p_userpwd"></td>
        <td width="12%" align="center" class="333" style="background:#fff;">用户权限:</td>
        <td align="center">
            <select name="p_lv" id="p_lv">
                <option value="0">请选择权限</option>
                <option value="1">系统管理员</option>
                <option value="2">普通用户</option>
            </select>
        </td>
        <td align="center" width="100" style="background:#fff;">
            <input type="submit" id="" value="添加(A)" name="" class="but_60" onClick="return user_check()">
        </td>
    </tr>
</table>
</form>