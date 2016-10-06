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
        <td width="100" style="text-align:center; color:#666;">图片隶属:</td>
        <td>
            
            <select name="p_type" id="p_type">
                <option value="0">请选择类别</option>
                <option value="about" <?php if($row["p_type"]=="about"){?>selected="selected"<?php }?>>公司简介</option>
                <option value="product" <?php if($row["p_type"]=="product"){?>selected="selected"<?php }?>>产品展示</option>
                <option value="news" <?php if($row["p_type"]=="news"){?>selected="selected"<?php }?>>新闻中心</option>
                <option value="feedback" <?php if($row["p_type"]=="feedback"){?>selected="selected"<?php }?>>在线留言</option>
                <option value="service" <?php if($row["p_type"]=="service"){?>selected="selected"<?php }?>>服务支持</option>
                <option value="join" <?php if($row["p_type"]=="join"){?>selected="selected"<?php }?>>招商加盟</option>
                <option value="contact" <?php if($row["p_type"]=="contact"){?>selected="selected"<?php }?>>联系我们</option>
            </select>
            
        </td>
    </tr>
    <tr style="height:35px; line-height:35px;">
        <td style="text-align:center; color:#666;">图片上传:</td>
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
        <td style="text-align:center; color:#666;">相关操作:</td>
        <td><input type="submit" name="" id="" value="更新(U)" class="but_60" onClick="return check1()"></td>
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
			alert("请选择类别");
			form.p_type.focus();
			return false;
		}
	}
</script>