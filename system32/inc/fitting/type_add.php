<form name="form1" id="form1" action="?state=add" method="post" enctype="multipart/form-data">
<table width="80%" cellpadding="0" cellspacing="0" border="0">
    <tr>
        <td>
            <table width="100%" cellpadding="0" cellspacing="1" border="0" class="alltable">
                <tr style="height:35px; line-height:35px;">
                    <td colspan="2" style="background:#fff; padding-left:14px;"><strong style="color:#666;">רҵ������</strong></td>
                </tr>
                <tr style="height:30px; line-height:30px;">
                    <td align="center" style="color:#666;width:100px;">һ��Ŀ¼:</td>
                    <td>
                        <select name="p_bigtype" id="p_bigtype">
                            <option value="0">��ѡ��һ��Ŀ¼</option>
                            <?php
                                $sql="select * from p_product_type where p_bigtype=0 and language='".$_GET["language"]."'";
                                $array=$d->Query($sql);
                                while($row=mysql_fetch_array($array))
                                {
                            ?>
                            <option value="<?php echo $row["p_id"]?>"><?php echo $row["p_title"]?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr style="height:30px; line-height:30px;">
                    <td align="center" style="color:#666;">Ŀ¼����:</td>
                    <td>
                        <input type="text" name="p_title" id="p_title" />
                    </td>
                </tr>
                <tr style="height:30px; line-height:30px;">
                    <td align="center" style="color:#666;">ͼƬ���:</td>
                    <td>
                       	<input type="file" name="p_file" id="p_file" />
                    </td>
                </tr>
                <tr style="height:30px; line-height:30px;">
                    <td align="center" style="color:#666;">��Ʒ����:</td>
                    <td>
                       	<textarea id="p_content" name="p_content"></textarea>
                    </td>
                </tr>
                <tr style="height:40px; line-height:40px;">
                    <td align="center" style="color:#666;">��ز���:</td>
                    <td>
                        <input type="submit" name="" id="" class="but_60" value="���(A)" onClick="return check()" />
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<input type="hidden" name="language" id="language" value="<?php echo $_GET["language"]?>">
</form>