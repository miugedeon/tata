<div class="c_frames">
	<div class="c_nav"><?php include_once("inc/c_nav.php"); ?></div>
    <div class="c_right">
    	<div class="c_path"><?php include_once("inc/c_path.php"); ?></div>
        <div class="db_content">
            <div id="new_list">
                <ul>
                <?
                $sql="select * from lxy_download where downpwd=".($typeID-1)." and language='cn' order by id desc"; 
				//echo $sql;
                $pages=page_sam($sql,10,"tech-$typeID.html?page=",2);
                $query2=$d->Query($sql.$limits);
                
                $i=0;
                while($row2=mysql_fetch_array($query2))
                {
                $i++;
                ?>
                    <li>
                        <a href="upload/Download/<?php echo $row2[FileFile]; ?>" target="_blank"><? echo utfsubstr($row2[FileName_en],0,$strlen); ?></a>
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
		
		</div>
    </div>
</div>