<?php	

$pcf=$_POST["cf"];
$pmd=$_POST["md"];
	$sql="SELECT * FROM p_cy WHERE cf LIKE BINARY '%".$pcf."%' and md LIKE BINARY '%".$pmd."%'";
	$query=mysql_query($sql);

?>
  <div class="cases">
    	<div class="c_path"><?php include_once("inc/c_path.php"); ?></div>
        <div class="db_content">

			<div class='waytable'>
				<table width='100%' border='0' cellpadding='3' cellspacing='1' bgcolor='#b23c1e'>
					<tr>
						<td align="center" width="5%">编号</td>
						<td align="center" width="23%">出发地</td>
						<td align="center" width="23%">目的地</td>
						<td align="center" width="8%">联系人</td>
						<td align="center" width="8%">货车长度</td>
						<td align="center" width="12%">联系电话</td>
						<td align="center" width="10%">加入时间</td>
						<td align="center" width="5%">详细</td>
					</tr>
<?php
$i==0;
	while($row=mysql_fetch_array($query))
{	$i++;
?>
					<tr bgcolor="#FFFFFF" onmouseover="this.style.backgroundColor = '#E7FADA'" onmouseout="this.style.backgroundColor = ''" height="30px">    
						<td align="center"width="5%" style="font-size:14px;"><?php echo $row["id"]; ?></td>    
						<td align="left"  width="23%"style="font-size:14px;"><?php echo $row["cf"]; ?></td>    
						<td align="left"  width="23%"style="font-size:14px;"><?php echo $row["md"]; ?></td>    
						<td align="center"  width="8%"style="font-size:14px;"><?php echo $row["linkman"]; ?></td>    
						<td align="center"  width="8%"style="font-size:14px;"><?php echo $row["carlength"]; ?></td>    
						<td align="center"  width="12%"style="font-size:14px;"><?php echo $row["cztel"]; ?></td>  
						<td align="center"  width="10%"style="font-size:14px;"><?php echo $row["addtime"]; ?></td>  
						<td align="center"  width="5%"style="font-size:14px;"><a href="way-x-<?php echo$row['id']?>.html">详细</a></td>  
					</tr>
<?php }  
	if($i==2) {?>
					<tr bgcolor="#FFFFFF" onmouseover="this.style.backgroundColor = '#E7FADA'" onmouseout="this.style.backgroundColor = ''" height="30px">    
						<td align="center"width="5%" style="font-size:14px;" colspan=8>无相关消息</td>  
					</tr>
	<?php } ?>
				</table>
			</div>
			<div class="caselist">

               
				<?php if($num>$pagesize){ ?><div align="center"><?php echo $pages; ?></div><?php } ?>
           </div>
        </div>
    </div>