    <div class="cases">
    	<div class="c_path"><?php include_once("inc/c_path.php"); ?></div>
        <div class="db_content">

        	<div class="arealist">
			   <div class='' style='float:left;'>线路表检索： 关键字：</div>
				<div class=''style='float:left;'>	
					<form name="formSearch" method="post" action="way-w.html" onSubmit="">
					  
					  <input id=inputname name="Keyword" type="text" class="textfield" value="" size="20">
					  <input name="submitSearch" type="submit" class="button" value="检索">
			   
					</form>
				</div>
				<div style='clear:both;'></div>
           </div>
			<div class='waytable'>
				<table width='100%' border='0' cellpadding='3' cellspacing='1' bgcolor='#b23c1e'>

					<tr>
						<td align="center" width="5%">编号</td>
						<td align="center" width="8%">物流公司</td>
						<td align="center" width="20%">直达城市</td>
						<td align="center" width="25%">中转城市</td>
						<td align="center" width="5%">联系电话</td>
						<td align="center" width="10%">档口位置</td>
					</tr>
<?php
	$sql="select * from p_way where viewflag=1";
	$query=mysql_query($sql);
		while($row=mysql_fetch_array($query))
		{?>
					<tr bgcolor="#FFFFFF" onmouseover="this.style.backgroundColor = '#E7FADA'" onmouseout="this.style.backgroundColor = ''" height="30px">    
						<td align="center" style="font-size:14px;" width="5%"><?php echo $row["id"]; ?></td>    
						<td align="center" style="font-weight:bold;font-size:16px;" width="8%"><?php echo $row["company"]; ?></td>    
						<td align="left" style="font-size:14px;" width="20%"><?php echo $row["way"]; ?></td>    
						<td align="left" style="font-size:14px;" width="25%"><?php echo $row["cityy"]; ?></td>    
						<td align="center" style="font-size:14px;" width="5%"><?php echo $row["tel"]; ?></td>    
						<td align="center" style="font-size:14px;" width="10%"><?php echo $row["address"]; ?></td>  
					</tr>
		<?php 
		}
		?>

					
				</table>
			</div>
			<div class="caselist">

               
				<?php if($num>$pagesize){ ?><div align="center"><?php echo $pages; ?></div><?php } ?>
           </div>
        </div>
    </div>