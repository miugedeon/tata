<div class="c_frames">
	<div class="c_nav"><?php include_once("inc/c_nav.php"); ?></div>
    <div class="c_right">
    	<div class="c_path"><?php include_once("inc/c_path.php"); ?></div>
        <div class="db_content">
			<?php
			if($twoID>0)	
				$d->AboutQuery('p_type',$twoID);
			else
				$d->AboutQuery('p_type',$typeID);
			?>
        </div>
    </div>
</div>