<div class="c_frames">
	<div class="c_nav"><?php include_once("c_nav.php"); ?></div>
    <div class="c_right">
    	<div class="c_path"><?php include_once("inc/c_path.php"); ?></div>
        <div class="db_content">
			<div class="product_list">
            	<ul>
                	<?php
					
					if(get(twoID)>0){
						$sql="select * from p_product where language='cn' and p_smalltype=$twoID and p_productname_en<>''";
						$pagelink="product-$typeID-".get(twoID).".html?page=";
					}else{
						$sql="select * from p_product where language='cn' and p_bigtype=$typeID and p_productname_en<>''";
						$pagelink="product-$typeID.html?page=";
					}
					$pages=page_sam($sql,9,$pagelink,2);
					$query=$d->Query($sql.$limits);
					while($row=mysql_fetch_array($query)){
					?>
                	<li><a href="productshow-<?php echo $row[p_bigtype]; ?>-<?php echo $row[p_smalltype]; ?>-<?php echo $row[p_id]; ?>.html"><p class="pImg"><img src="<?php echo imgpath($row[p_pic_s1]); ?>" width="195" height="145" /></p><p class="pTxt"><?php echo utfsubstr($row[p_productname_en],0,$strlen); ?></p></a></li>
                    <?php
					}
					?>
                </ul>
                <div class="clear" style="margin-top:20px;"></div>
                <?php if($num>$pagesize){ ?><div align="center"><?php echo $pages; ?></div><?php } ?>
            </div>
		</div>
    </div>
</div>