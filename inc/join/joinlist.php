<table width='100%' border='0' cellpadding='3' cellspacing='1' bgcolor='#cccccc'>

					<tr>
						<td align="center" width="5%">编号</td>
						<td align="center" width="10%">公司名称</td>
						<td align="center" width="10%">联系人</td>
						<td align="center" width="15">公司电话</td>
						<td align="center" width="35%">公司地址</td>
						<td align="center" width="20%">公司email</td>
					</tr>
<?php
	$sql="select * from p_join where ViewFlag=1";
	$query=mysql_query($sql);
		while($row=mysql_fetch_array($query))
		{?>
					<tr bgcolor="#FFFFFF" onmouseover="this.style.backgroundColor = '#E7FADA'" onmouseout="this.style.backgroundColor = ''" height="30px">    
						<td align="center" style="font-size:14px;" width="5%"><?php echo $row["id"]; ?></td>    
						<td align="center" style="font-weight:bold;font-size:16px;" width="10%"><?php echo $row["company"]; ?></td>    
						<td align="center" style="font-size:14px;" width="10%"><?php echo $row["linkman"]; ?></td>    
						<td align="center" style="font-size:14px;" width="15%"><?php echo $row["tel"]; ?></td>    
						<td align="center" style="font-size:14px;" width="35%"><?php echo $row["address"]; ?></td>    
						<td align="center" style="font-size:14px;" width="20%"><?php echo $row["email"]; ?></td>  
					</tr>
		<?php 
		}
		?>

					
				</table>