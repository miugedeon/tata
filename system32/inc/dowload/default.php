<style type="text/css">
	#down tr td{ text-align:center;}
</style>
<tr>
    <td>
        <table width="100%" cellpadding="0" cellspacing="1" border="0" class="allTable" id="down">
            <tr style="height:35px; line-height:35px;">
            	<td align="center" style="width:30px; text-align:center;"><strong style="color:#0C296B;">全选</strong></td>
                <td align="center" style="width:30px; text-align:center;"><strong style="color:#0C296B;">编号</strong></td>
                <td align="center"  style="width:290px;"><strong style="color:#0C296B;">文件名称</strong></td>
                <td align="center" style="width:60px;"><strong style="color:#0C296B;">文件类型</strong></td>
                <td align="center" style="width:150px;"><strong style="color:#0C296B;">类别管理</strong></td>
                <td align="center" style="width:70px;"><strong style="color:#0C296B;">上传时间</strong></td>
                <td align="center" style="width:40px;"><strong style="color:#0C296B;">权限</strong></td>
                <td align="center" style="width:40px;"><strong style="color:#0C296B;">首页</strong></td>
                <td align="center" style="width:50px;"><strong style="color:#0C296B;">操作员</strong></td>
                <td align="center" style="width:60px;"><strong style="color:#0C296B;">管理</strong></td>
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
                            echo "会员";
                        }
                        else
                        {
                            echo "非会员";
                        }
                    ?>
                </td>
                <td align="center" style="width:40px;">
                    <?php
                        if($row["is_index"]==1)
                        {
                            echo "<b><font color='#CC0033'>√</font></b>";
                        }
                        else
                        {
                            echo "";
                        }
                    ?>
                </td>
                <td align="center" style="width:50px;"><?php echo $row["Admin"]?></td>
                <td align="center" style="width:60px;"><a onClick="return confirm('您确认删除吗？')" href="dowloadDelete.php?showid=<?php echo $row["id"]?>">删除</a>|<a href="downloadUpdate.php?showid=<?php echo $row["id"]?>&other=1">更新</a></td>
            </tr>
            <?php
                }
            ?>
            <tr>
                <td align="center" colspan="10" style="height:40px; line-height:40px;">
                    <table cellpadding="0" cellspacing="0">
                        <tr>
                            <td><input type="submit" name="send" id="send" value="删除所选" class="but_70" onClick="return sendAll()"></td>
                            <td width="10"></td>
                            <td><input type="button" name="checkAll" id="checkAll" value="全选" class="but_60" onClick="return CheckAll()"></td>
                            <td width="10"></td>
                            <td><input type="button" name="deleteAll" id="deleteAll" value="反选" class="but_60" onClick="return DeleteAll()"></td>
                           
                        </tr>
                    </table>
                </td>
            </tr>
            <tr style="height:30px;">
                <td colspan="10" align="center" style="height:40px;">
                    <table cellpadding="0" cellspacing="0" id="page">
                        <tr>
                            <td>共有［<?php echo $num?>］条</td>
                            <td style="width:8px;"></td>
                            <td>共有［<?php echo $pagecount?>］页</td>
                            <td style="width:8px;"></td>
                            <td>当前第［<?php echo $page?>］页</td>
                            <td style="width:8px;"></td>
                            <td><a href="?page=<?php echo $page?>&language=<?php echo $language?>">首页</a></td>
                            <td style="width:8px;"></td>
                            <td><a href="?page=<?php echo ($page-1)?>&language=<?php echo $language?>">上页</a></td>
                            <td style="width:8px;"></td>
                            <td><a href="?page=<?php echo ($page+1)?>&language=<?php echo $language?>">下页</a></td>
                            <td style="width:8px;"></td>
                            <td><a href="?page=<?php echo $pagecount?>&language=<?php echo $language?>">未页</a></td>
                            <td style="width:8px;"></td>
                            
                        </tr>
                        <?php
                            }
                            else
                            {
                        ?>
                        <tr style="height:80px; line-height:80px;">
<td colspan="9" style="padding-left:15px;"><strong style="color:#0C296B;">系统提示:没有相关的下载资料!  Sorry........</strong></td>
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