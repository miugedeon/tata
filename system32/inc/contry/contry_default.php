
			<?php
            	$sql="select * from p_contry";
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
					
					$sql="select * from p_contry order by p_id asc limit ".$offset.",".$pagesize."";
					$query=mysql_query($sql);
					while($row=mysql_fetch_array($query))
					{
			?>
            
            <tr onMouseOut="this.className='out'" style="height:22px; line-height:22px;">
            	<td width="49" align="center" onMouseOver="this.className='over'">
                	<input type="checkbox" name="showid[]" id="showid" value="<?php echo $row["p_id"]?>">
                </td>
                
                <td width="50" align="center" class="c_666"><?php echo $row["p_id"]?></td>
                
                <td width="15%" align="center" class="c_666" height="25"><img src="<?php echo $row["p_pic1"]?>" width="80" height="20" border="0"/></td>
                 
                <td width="5%" align="center" class="c_666"><?php echo $row["p_title_cn"]?></td>   
                
                <td width="5%" align="center" class="c_666"><?php echo $row["p_title_en"]?></td>  
                <td align="center" class="c_666"><?php echo $row["p_link"]?></td>  
                       
                <td width="8%" align="center"><a href="contry_delete_one.php?p_id=<?php echo $row["p_id"]?>&action=1&language=<?php echo $language?>" onClick="return confirm('��ȷ��ɾ����')">ɾ��</a>|<a href="contry_update.php?p_id=<?php echo $row["p_id"]?>&language=<?php echo $language?>">����</a></td>
            </tr>
            
            <?php
            	}
			?>
            <tr>
            	<td align="center" colspan="11" style="height:40px; line-height:40px;">
                	<table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td><input type="submit" name="send" id="send" value="ɾ����ѡ" class="but_70" onClick="return sendAll()"></td>
                            <td width="10"></td>
                            <td><input type="button" name="checkAll" id="checkAll" value="ȫѡ" class="but_60" onClick="return CheckAll()"></td>
                            <td width="10"></td>
                            <td><input type="button" name="deleteAll" id="deleteAll" value="��ѡ" class="but_60" onClick="return DeleteAll()"></td>
                            <td width="10"></td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr>
            	<td colspan="11" align="center">
                	<table cellpadding="0" id="page" cellspacing="0" border="0" style="height:40px; line-height:40px; color:#333333;">
                    	<tr>
                        	<td>����[<?php echo $num?>]������</td>
                            <td width="10"></td>
                            <td>��[<?php echo $page?>/<?php echo $pagecount?>]ҳ</td>
                            <td width="10"></td>
                            <td><a href="?page=1&language=<?php echo $language?>">��ҳ</a></td>
                            <td width="5"></td>
                            <td><a href="?page=<?php echo $page-1?>&language=<?php echo $language?>">��ҳ</a></td>
                            <td width="5"></td>
                            <td><a href="?page=<?php echo $page+1?>&language=<?php echo $language?>">��ҳ</a></td>
                            <td width="5"></td>
                            <td><a href="?page=<?php echo $pagecount?>&language=<?php echo $language?>">ĩҳ</a></td>
                            <td width="5"></td>
                            <td>ת:</td>
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
                            <td>ҳ</td>
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
            	<td colspan="11" style="height:300px; line-height:300px; text-align:center;">ϵͳû�в�ѯ�����������Ϣ</td>
            </tr>
            <?php
            	}
			?>
			
<script language="javascript">
	
	
	//ȫѡ�¼�
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
	//��ѡ�¼�
	function DeleteAll()
	{
		for(var i=0;i<form.elements.length;i++)
		{
			if (form.elements[i].name!='checkAll' && form.elements[i].name!='deleteAll') {
				form.elements[i].checked =false;
			}
		}
	}
	
	//�ж���û��ѡ���¼�
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
			if(confirm("��ȷ��Ҫɾ��ô?"))
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
			alert("��ѡ��");
			return false;
		}
	}
	
	function GoPage()
	{
		var goPage=form.goToPage.value;
		window.location.href="contry_manage.php?page="+goPage+"&language=<?php echo $language?>";
	}

</script>            