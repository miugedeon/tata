<?php
	$p_id=$_GET["p_id"];
	$language=$_GET["language"];
	$sql="select * from p_banner where p_id=".$p_id;
	$query=$d->Query($sql);
	while($row=mysql_fetch_array($query))
	{
?>
<table width="70%" cellpadding="0" cellspacing="1" border="0" class="alltable" style="margin-top:20px;">
<input type="hidden" name="p_id" id="p_id" value="<?php echo $p_id?>" />
<input type="hidden" name="language" id="language" value="<?php echo $language?>" />
    <tr style="height:35px; line-height:35px;">
        <td width="100" style="text-align:center; color:#666;">ͼƬ����:</td>
        <td>
            
            <select name="p_type" id="p_type">
                <option value="0">��ѡ�����</option>
                <option value="about" <?php if($row["p_type"]=="about"){?>selected="selected"<?php }?>>��˾���</option>
                <option value="product" <?php if($row["p_type"]=="product"){?>selected="selected"<?php }?>>��Ʒչʾ</option>
                <option value="news" <?php if($row["p_type"]=="news"){?>selected="selected"<?php }?>>��������</option>
                <option value="feedback" <?php if($row["p_type"]=="feedback"){?>selected="selected"<?php }?>>��������</option>
                <option value="service" <?php if($row["p_type"]=="service"){?>selected="selected"<?php }?>>����֧��</option>
                <option value="join" <?php if($row["p_type"]=="join"){?>selected="selected"<?php }?>>���̼���</option>
                <option value="contact" <?php if($row["p_type"]=="contact"){?>selected="selected"<?php }?>>��ϵ����</option>
            </select>
            
        </td>
    </tr>
    <tr style="height:35px; line-height:35px;">
        <td style="text-align:center; color:#666;">ͼƬ�ϴ�:</td>
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
        <td style="text-align:center; color:#666;">��ز���:</td>
        <td><input type="submit" name="" id="" value="����(U)" class="but_60" onClick="return check1()"></td>
    </tr>
</table>
<?php
	}
?>
<script language="javascript">
	function check()
	{
		var _p_type=form.p_type.value;
		if(_p_type==0)
		{
			alert("��ѡ�����");
			form.p_type.focus();
			return false;
		}
	}
</script>