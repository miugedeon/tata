			<?php
            	$sql="select * from p_indexpic where language='".$language."'";
				$num=$d->Execute($sql);
				if($num>0)
				{
					$pagesize=11;
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
					
					if($offset==-6)
					{
						$offset=0;
					}
					
					$sql="select * from p_indexpic where language='".$language."' order by p_ordering desc,p_id asc limit ".$offset.",".$pagesize."";
					$query=mysql_query($sql);
					while($row=mysql_fetch_array($query))
					{
			?>
            
            <tr onMouseOut="this.className='out'" style="height:22px; line-height:22px;">
            	<td align="center" onMouseOver="this.className='over'">
                	<input type="checkbox" name="showid[]" id="showid" value="<?php echo $row["p_id"]?>">
                </td>
                
                <td align="center" class="c_666"><?php echo $row["p_ordering"]?></td>
                
                <td align="center" class="c_666" height="55"><img src="<?php echo $row["p_pic1"]?>" width="125" height="48" border="0"/></td>
                 
                <td align="center" class="c_666"><?php echo $row["p_title"]?></td>   
                       
                <td align="center"><a href="indexPic_delete_one.php?p_id=<?php echo $row["p_id"]?>&action=1&language=<?php echo $language?>" onClick="return confirm('您确认删除吗？')">删除</a>|<a href="indexPic_update.php?p_id=<?php echo $row["p_id"]?>&language=<?php echo $language?>">更新</a></td>
            </tr>
            
            <?php
            	}
			?>
            <tr>
            	<td align="center" colspan="11" style="height:40px; line-height:40px;">
                	<table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td><input type="submit" name="send" id="send" value="删除所选" class="but_70" onClick="return sendAll()"></td>
                            <td width="10"></td>
                            <td><input type="button" name="checkAll" id="checkAll" value="全选" class="but_60" onClick="return CheckAll()"></td>
                            <td width="10"></td>
                            <td><input type="button" name="deleteAll" id="deleteAll" value="反选" class="but_60" onClick="return DeleteAll()"></td>
                            <td width="10"></td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr>
            	<td colspan="11" align="center">
                	<table cellpadding="0" id="page" cellspacing="0" border="0" style="height:40px; line-height:40px; color:#333333;">
                    	<tr>
                        	<td>共有[<?php echo $num?>]张图片</td>
                            <td width="10"></td>
                            <td>共[<?php echo $page?>/<?php echo $pagecount?>]页</td>
                            <td width="10"></td>
                            <td><a href="?page=1&language=<?php echo $language?>">首页</a></td>
                            <td width="5"></td>
                            <td><a href="?page=<?php echo $page-1?>&language=<?php echo $language?>">上页</a></td>
                            <td width="5"></td>
                            <td><a href="?page=<?php echo $page+1?>&language=<?php echo $language?>">下页</a></td>
                            <td width="5"></td>
                            <td><a href="?page=<?php echo $pagecount?>&language=<?php echo $language?>">末页</a></td>
                            <td width="5"></td>
                            <td>转:</td>
                            <td>
                            	<select name="goToPage" id="goToPage" onChange="GoPage()">
                                	<?php
										$i=1;
                                    	while($i<=$pagecount)
										{
										if($_GET["page"]>=$i)
										{
											$selected="selected=selected";
										}
										else
										{
											$selected="";
										}
									?>
                                	<option <?php echo $selected?> value="<?php echo $i?>"><?php echo $i?></option>
                                    <?php
										$i++;
                                    	}
									?>
                                </select>
                            </td>
                            <td>页</td>
                        </tr>
                    </table>
                </td>
            </tr>
            <?php
					
            	}
				else
				{
			?>
            <tr>
            	<td colspan="11" style="height:300px; line-height:300px; text-align:center;">系统没有查询到相关数据信息</td>
            </tr>
            <?php
            	}
			?>
			
<script language="javascript">
	
	
	//全选事件
	function CheckAll()
	{
		for(var i=0;i<form.elements.length;i++)
		{
			if (form.elements[i].name!='checkAll' && form.elements[i].name!='deleteAll' && form.elements[i].name!='p_key') {
				form.elements[i].checked =true;
			}
			else
			{
				form.elements[i].checked =false;
			}
		}
	}
	//反选事件
	function DeleteAll()
	{
		for(var i=0;i<form.elements.length;i++)
		{
			if (form.elements[i].name!='checkAll' && form.elements[i].name!='deleteAll') {
				form.elements[i].checked =false;
			}
		}
	}
	
	//判断有没有选择事件
	function sendAll()
	{
		var state="";
		for(var i=0;i<form.elements.length;i++)
		{
		
			if (form.elements[i].checked==true) {
				state=true;
				break;
			}
			else
			{
				
				state=false;
			}
				
		}
		if(state==true)
		{
			if(confirm("您确定要删除么?"))
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		else
		{
			alert("请选择图片！");
			return false;
		}
	}
	
	function GoPage()
	{
		var goPage=form.goToPage.value;
		window.location.href="indexPic_manage.php?page="+goPage+"&language=<?php echo $language?>";
	}

</script>            