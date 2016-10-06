<?php
	$sql="select * from p_fck";
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
		
		$sql="select * from p_fck order by p_id desc limit ".$offset.",".$pagesize."";
		$query=mysql_query($sql);
		$i=1;
		while($row=mysql_fetch_array($query))
		{
?>
<tr style="height:22px; line-height:22px;">
	<td align="center" class="c_333"><?php echo $row["p_id"]; ?></td>
	<td align="center" class="c_333"><?php echo $row["p_company"]?></td>
	<td align="center" class="c_333"><?php echo $row["p_title"]?></td>
	<td align="center" class="c_333"><?php echo $row['p_email'] ?></td>
	<td align="center" class="c_333"><?php echo $row["p_tel"]?></td>
	<td align="center" class="c_333"><?php echo $row["p_date"]?></td>
	<td align="center"><a href="fckDelete.php?p_id=<?php echo $row["p_id"]?>" onClick="return confirm('您确认删除吗？')">删除</a>|<a href="fckLook.php?p_id=<?php echo $row["p_id"]?>">查看</a></td>
</tr>
<?php
		$i++;
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
				<td><a href="?page=1">首页</a></td>
				<td width="5"></td>
				<td><a href="?page=<?php echo $page-1?>">上页</a></td>
				<td width="5"></td>
				<td><a href="?page=<?php echo $page+1?>">下页</a></td>
				<td width="5"></td>
				<td><a href="?page=<?php echo $pagecount?>">末页</a></td>
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