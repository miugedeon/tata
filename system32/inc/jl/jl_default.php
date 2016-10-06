<?php
	$sql="select * from p_jobfrom ";
	$num=$d->Execute($sql);
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
		
		if($offset==-6)
		{
			$offset=0;
		}
		
		$sql="select * from p_jobfrom  order by id desc limit ".$offset.",".$pagesize."";
		$query=mysql_query($sql);
		while($row=mysql_fetch_array($query))
		{
?>
<tr style="height:22px; line-height:22px;">

            	<td align="center" style="background:#fff;"><?php echo $row["ID"]?></td>
                <td align="center" style="background:#fff;"><?php echo $row["TalentsName"]?></td>
                <td align="center" style="background:#fff;"><?php echo $row["Linkman"]?></td>
                <td align="center" style="background:#fff;"><?php echo $row["Sex"]?></td>
                <td align="center" style="background:#fff;"><?php echo $row["BirthDate"]?></td>
                <td align="center" style="background:#fff;"><?php echo $row["Telephone"]?></td>
				 <td align="center" style="background:#fff;"><?php echo $row["AddTime"]?></td>
                <td align="center" style="background:#fff;"><a href="jl_delete_one.php?p_id=<?php echo $row["ID"]?>" onClick="return confirm('您确认删除吗？')">删除</a>|<a href="jl_update.php?p_id=<?php echo $row["ID"]?>">查看</a></td>
            </tr>
<?php
		}
?>

<tr>
	<td colspan="10" align="center">
		<table cellpadding="0" id="page" cellspacing="0" border="0" style="height:40px; line-height:40px; color:#333333;">
			<tr>
				<td>共有[<?php echo $num?>]个</td>
				<td width="10"></td>
				<td>共[<?php echo $page?>/<?php echo $pagecount?>]页</td>
				<td width="10"></td>
				<td><a href="?page=1&language=<?php echo $language?>&p_typelist=<?php echo $p_typelist?>">首页</a></td>
				<td width="5"></td>
				<td><a href="?page=<?php echo $page-1?>&language=<?php echo $language?>&p_typelist=<?php echo $p_typelist?>">上页</a></td>
				<td width="5"></td>
				<td><a href="?page=<?php echo $page+1?>&language=<?php echo $language?>&p_typelist=<?php echo $p_typelist?>">下页</a></td>
				<td width="5"></td>
				<td><a href="?page=<?php echo $pagecount?>&language=<?php echo $language?>&p_typelist=<?php echo $p_typelist?>">末页</a></td>
				<td width="5"></td>
				
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
	<td colspan="10" style="height:300px; line-height:300px; text-align:center;">系统没有查询到相关数据信息</td>
</tr>
<?php
	}
?>