<div class="c_frames">
	<div class="c_nav"><?php include_once("inc/c_nav.php"); ?></div>
    <div class="c_right">
    	<div class="c_path"><?php include_once("inc/c_path.php"); ?></div>
        <div class="db_content">
		<?
		$p_id=0+$_GET['p_id'];
		if($p_id>0)
		{
				$sql="select * from p_news where p_id=".$p_id."";
				$query=$d->Query($sql);
				$i=0;
				$row=mysql_fetch_array($query);
				?>
				<div id="news_title"> <h1 id=newh1 style="font-size:18px;" ><? echo $row["p_title_en"]?></h1>
				<p style="">Date:<? echo $row["p_adddate"]?></p>
				</div>
				<div class="content"> 
				<? echo $row["p_content_en"]?>
				</div>
			<?
		}
		else
		{
		?>
							<div id="new_list">
								<ul>
									<?
								$sql="select * from p_news where p_type=".$typeID." and language='cn' and p_title_en<>'' order by p_id desc";
								
								$pages=page_sam($sql,10,"news-$typeID.html?page=",2);
								$query2=$d->Query($sql.$limits);
								
								$i=0;
								while($row2=mysql_fetch_array($query2))
								{
								$i++;
								?>
									<li>
										<span class=right><?echo $row2[p_adddate]?></span>
										<a href="news_show-<? echo $row2[p_type]?>-<? echo $row2[p_id]?>.html">										
										<? echo utfsubstr($row2[p_title_en],0,80)?>
										</a>
										
									</li>
								<?
								}
								?>
								</ul>
								
							</div>
                            
							<?php
	if($num>$pagesize){
	?>
    <div align="center" style="margin-top:20px;clear:both;"><?php echo $pages;?></div>
    <?php
	}
	?>	


		<?}?>
		
		</div>
    </div>
</div>