<style type="text/css">
	#down tr td{ text-align:center;}
</style>
<tr>
    <td>
        <table width="100%" cellpadding="0" cellspacing="1" border="0" class="allTable" id="down">
            <tr style="height:35px; line-height:35px;">
            	<td align="center" style="width:30px; text-align:center;"><strong style="color:#0C296B;">ȫѡ</strong></td>
                <td align="center" style="width:30px; text-align:center;"><strong style="color:#0C296B;">���</strong></td>
                <td align="center"  style="width:290px;"><strong style="color:#0C296B;">�ļ�����</strong></td>
                <td align="center" style="width:60px;"><strong style="color:#0C296B;">�ļ�����</strong></td>
                <td align="center" style="width:150px;"><strong style="color:#0C296B;">������</strong></td>
                <td align="center" style="width:70px;"><strong style="color:#0C296B;">�ϴ�ʱ��</strong></td>
                <td align="center" style="width:40px;"><strong style="color:#0C296B;">Ȩ��</strong></td>
                <td align="center" style="width:40px;"><strong style="color:#0C296B;">��ҳ</strong></td>
                <td align="center" style="width:50px;"><strong style="color:#0C296B;">����Ա</strong></td>
                <td align="center" style="width:60px;"><strong style="color:#0C296B;">����</strong></td>
            </tr>
            <?php
                $sql="select * from lxy_download order by downpwd asc";
                
                mysql_query("set names gbk");
                $query=mysql_query($sql);
                $num=mysql_num_rows($query);
                
                
                if($num>0)
                {
                
                $pagesize=12;
                $pagecount=ceil($num/$pagesize);
                
                if(isset($_GET["page"]))
                {
                    $page=$_GET["page"];
                }
                else
                {
                    $page=1;
                }
                
                if($page=="")
                {
                    $page=1;
                }
                if($page<=0)
                {
                    $page=1;
                }
                if($page>$pagecount)
                {
                    $page=$pagecount;
                }
                $offset=$pagesize*($page-1);
                
                
                $sql="select * from lxy_download order by downpwd asc limit ".$offset.",".$pagesize."";
                mysql_query("set names gbk");
                $query=mysql_query($sql);
                while($row=mysql_fetch_array($query))
                {
            ?>
            <tr style="height:27px; line-height:27px;">
            	<td><input type="checkbox" name="showid[]" id="showid" value="<?php echo $row["p_id"]?>"></td>
                <td align="center" style="width:30px;"><?php echo $row["id"]?></td>
                <td align="center"  style="width:290px;"><?php echo $row["FileName"]?></td>
                <td align="center" style="width:60px;"><?php echo $row["Hzm"]?></td>
                <td align="center" style="width:150px;"><?php echo $row["FileType"]?>-<?php echo $row["FileType2"]?></td>
                <td align="center" style="width:70px;"><?php echo $row["AddDate"]?></td>
                <td align="center" style="width:40px;">
                    <?php
                        if($row["FileVip"]==1)
                        {
                            echo "��Ա";
                        }
                        else
                        {
                            echo "�ǻ�Ա";
                        }
                    ?>
                </td>
                <td align="center" style="width:40px;">
                    <?php
                        if($row["is_index"]==1)
                        {
                            echo "<b><font color='#CC0033'>��</font></b>";
                        }
                        else
                        {
                            echo "";
                        }
                    ?>
                </td>
                <td align="center" style="width:50px;"><?php echo $row["Admin"]?></td>
                <td align="center" style="width:60px;"><a onClick="return confirm('��ȷ��ɾ����')" href="dowloadDelete.php?showid=<?php echo $row["id"]?>">ɾ��</a>|<a href="downloadUpdate.php?showid=<?php echo $row["id"]?>&other=1">����</a></td>
            </tr>
            <?php
                }
            ?>
            <tr>
                <td align="center" colspan="10" style="height:40px; line-height:40px;">
                    <table cellpadding="0" cellspacing="0">
                        <tr>
                            <td><input type="submit" name="send" id="send" value="ɾ����ѡ" class="but_70" onClick="return sendAll()"></td>
                            <td width="10"></td>
                            <td><input type="button" name="checkAll" id="checkAll" value="ȫѡ" class="but_60" onClick="return CheckAll()"></td>
                            <td width="10"></td>
                            <td><input type="button" name="deleteAll" id="deleteAll" value="��ѡ" class="but_60" onClick="return DeleteAll()"></td>
                           
                        </tr>
                    </table>
                </td>
            </tr>
            <tr style="height:30px;">
                <td colspan="10" align="center" style="height:40px;">
                    <table cellpadding="0" cellspacing="0" id="page">
                        <tr>
                            <td>���У�<?php echo $num?>����</td>
                            <td style="width:8px;"></td>
                            <td>���У�<?php echo $pagecount?>��ҳ</td>
                            <td style="width:8px;"></td>
                            <td>��ǰ�ڣ�<?php echo $page?>��ҳ</td>
                            <td style="width:8px;"></td>
                            <td><a href="?page=<?php echo $page?>&language=<?php echo $language?>">��ҳ</a></td>
                            <td style="width:8px;"></td>
                            <td><a href="?page=<?php echo ($page-1)?>&language=<?php echo $language?>">��ҳ</a></td>
                            <td style="width:8px;"></td>
                            <td><a href="?page=<?php echo ($page+1)?>&language=<?php echo $language?>">��ҳ</a></td>
                            <td style="width:8px;"></td>
                            <td><a href="?page=<?php echo $pagecount?>&language=<?php echo $language?>">δҳ</a></td>
                            <td style="width:8px;"></td>
                            
                        </tr>
                        <?php
                            }
                            else
                            {
                        ?>
                        <tr style="height:80px; line-height:80px;">
<td colspan="9" style="padding-left:15px;"><strong style="color:#0C296B;">ϵͳ��ʾ:û����ص���������!  Sorry........</strong></td>
</tr>
                        <?php
                            }
                        ?>
                    </table>
                </td>
            </tr>
        </table>
    </td>
</tr>