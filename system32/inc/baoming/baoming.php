<?php
	$sql="select * from p_baoming";
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
		
		$sql="select * from p_baoming order by p_id desc limit ".$offset.",".$pagesize."";
		$query=mysql_query($sql);
		while($row=mysql_fetch_array($query))
		{
?>
<tr style="height:25px; line-height:25px;">
    <td align="center" width="5%" style=""><span style="color:#333;"><?php echo $row["p_id"]?></span></td>
    <td align="center" width="10%" style=""><span style="color:#333;"><?php echo $row["p_userName"]?></span></td>
    <td align="center" width="10%" style=""><span style="color:#333;"><?php echo $row["p_specialty"]?></span></td>
    <td align="center" width="10%" style=""><span style="color:#333;"><?php echo $row["p_specialty2"]?></span></td>
    <td align="center" width="8%" style=""><span style="color:#333;"><?php echo $row["p_tel"]?></span></td>
    <td align="center" width="8%" style=""><span style="color:#333;"><?php if($row["p_state"]==1){?><b><font color="#CC0033">√</font><?php }?></span></td>
    <td align="center" width="8%" style=""><span style="color:#333;"><?php echo $row["p_addDate"]?></span></td>
    <td align="center" width="8%" style=""><span style="color:#333;"><?php if($row["p_index"]==1){?><b><font color="#CC0033">已报名</font><?php }?></span></td>
    <td align="center" width="8%" style=""><span style="color:#333;"><a onClick="return confirm('您确认删除吗？')" href="baomingdelete.php?p_id=<?php echo $row["p_id"]?>">删除</a>|<a href="baominglook.php?p_id=<?php echo $row["p_id"]?>">查看</a></span></td>
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
?>