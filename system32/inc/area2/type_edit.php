<?php
	$p_id=$_GET["p_id"];
	$language=$_GET["language"];
	$other=$_GET["other"];
	$sql="select * from p_area2_type where p_id=".$p_id." and language='".$language."'";
	$array=$d->Query($sql);
	while($row=mysql_fetch_array($array))
	{
	$p_title=$row["p_title"];
?>

<form name="form1" id="form1" action="?state=update" method="post" enctype="multipart/form-data">
<table width="80%" cellpadding="0" cellspacing="0" border="0">
    <tr>
        <td>
            <table width="100%" cellpadding="0" cellspacing="1" border="0" class="alltable">
                <tr style="height:35px; line-height:35px;">
                    <td colspan="2" style="background:#fff; padding-left:14px;"><strong style="color:#666;">������</strong></td>
                </tr>
                <tr style="height:30px; line-height:30px;">
                  <td align="center" style="color:#666;width:100px;">һ��Ŀ¼:</td>
                    <td>
                    	<?php
                        	if($other==1)
							{
						?>
                        <!---------------------------------------һ��Ŀ¼�޸�------------------------------------------------------>
                        <select name="p_bigtype" id="p_bigtype">
                            <option value="0">��ѡ��һ��Ŀ¼</option>
                        </select>
                        <!--------------------------------------------------------------------------------------------->
                        <?php
                        	}
							else
							{
						?>
                        <!----------------------------------------����Ŀ¼�޸�----------------------------------------------------->
                        <select name="p_bigtype" id="p_bigtype">
                            <option value="0">��ѡ��һ��Ŀ¼</option>
                            <?php
                                $sql="select * from p_area2_type where p_bigtype=0 and language='".$_GET["language"]."'";
                                $array=$d->Query($sql);
                                while($row1=mysql_fetch_array($array))
                                {
                            ?>
                            <option value="<?php echo $row1["p_id"]?>" <?php if($row["p_bigtype"]==$row1["p_id"]){?>selected="selected"<?php }?>><?php echo $row1["p_title"]?></option>
                            <?php
                                }
                            ?>
                        </select>
           
                        <!--------------------------------------------------------------------------------------------->
                        <?php
                        	}
						?>
                    </td>
                </tr>
                <tr style="height:30px; line-height:30px;">
                    <td align="center" style="color:#666;">Ŀ¼����:</td>
                    <td>
                        <input type="text" name="p_title" id="p_title" value="<?php echo $p_title?>">
                    </td>
                </tr>
                <tr style="height:40px; line-height:40px;">
                    <td align="center" style="color:#666;">��ز���:</td>
                    <td>
                        <table cellpadding="0" cellspacing="0">
                        	<tr>
                            	<td><input type="submit" name="" id="" class="but_60" value="����" onClick="return check()" /></td>
                                <td width="5"></td>
                                <td><input type="button" name="" id="" class="but_60" value="ɾ��" onClick="del(<?php echo $p_id?>,<?php echo $other?>,'<?php echo $language?>')"></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<input type="hidden" name="language" id="language" value="<?php echo $_GET["language"]?>">
<input type="hidden" name="p_id" id="p_id" value="<?php echo $p_id?>">
</form>
<?php
	}
?>
<script language="javascript">
	function del(p_id,other,language)
	{
		 if (confirm("��ȷ��ɾ����?"))
		 {
		 	//alert("ɾ��ID:"+p_id);
			//alert("����:"+other);
			//alert("����:"+language);
		 	location.href="area2_type_delete.php?state=del&other="+other+"&p_id="+p_id+"&language="+language+"";
			return true;
		 }
		 else
		 {
			return false;
		 }
	}
</script>