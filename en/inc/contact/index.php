<div class="contact_frames">
	<div class="toptext">There is none of perfect products in the world, but <span>MLS</span> has a perfect pursuit.</div>
    <div class="contact_db_content">
    	<div class="l_content">
        	<?php
			$sql="select * from p_type where language='cn' and p_id=7";
			$query=$d->Query($sql);
			$row=mysql_fetch_array($query);
			echo $row[p_content_en];
			?>
        </div>
        <div class="r_content">
        	<?php
			$sql="select * from p_type where language='cn' and p_id=8";
			$query=$d->Query($sql);
			$row=mysql_fetch_array($query);
			echo $row[p_content_en];
			?>
        </div>
    </div>
</div>