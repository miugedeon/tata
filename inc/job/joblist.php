<div class="aabbcc">&nbsp;&nbsp;&nbsp;&nbsp;成功的企业离不开优秀的人才，“有德有才重用，有德无才留用，有才无德放弃使用”是中山市古镇国际物流园的人才战略，以“想干事的给机会，能干事的给岗位，干成事的给地位”为原则，并以培养、引进高素质的经营管理人才为重点，建立一支一流的管理人才队伍，为物流园的发展保驾护航<br><br><br></div>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#cccccc">  
	<tr>    
		<td width="4%" bgcolor="#ffffff" align="center">NO</td>    
		<td width="35%" bgcolor="#ffffff" align="center">职位名称</td>    
		<td width="20%" bgcolor="#ffffff" align="center">招聘人数</td>    
		<td width="12%" bgcolor="#ffffff" align="center">工作地点</td>     
	</tr>
<?php
	$sql="select * from p_job ";
	$query=mysql_query($sql);
		while($row=mysql_fetch_array($query))
		{?>

		<tr bgcolor="#FFFFFF" onmouseover="this.style.backgroundColor = '#E7FADA'" onmouseout="this.style.backgroundColor = ''" height="30px"> 		  
			<td align="center" style="font-size:14px;" width="4%"><a href='job-19-<?php echo $row["p_id"]; ?>.html'><?php echo $row["p_id"]; ?></a></td>    
			<td align="center" style="font-weight:bold;font-size:16px;" width="35%"><a href='job-19-<?php echo $row["p_id"]; ?>.html'><?php echo $row["p_file2"]; ?></a></td>    
			<td align="center" style="font-size:14px;" width="20%"><a href='job-19-<?php echo $row["p_id"]; ?>.html'><?php echo $row["p_file5"]; ?></a></td>    
			<td align="center" style="font-size:14px;" width="12%"><a href='job-19-<?php echo $row["p_id"]; ?>.html'><?php echo $row["p_file6"]; ?></a></td>    

				
		</tr>
	
		<?php 
		}
		?>
</table>