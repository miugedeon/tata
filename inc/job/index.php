
<div class="c_frames">
	<div class='breadNavBg'>
		<div class="c_path"><?php include_once("inc/c_path.php"); ?></div>
	</div>
	<div class='breadBb'>
		<div class="c_nav"><?php include_once("inc/c_nav.php"); ?></div>
		<div class="c_right">

			<div class="db_content">
				<?php
				if($twoID>0)	
					$d->AboutQuery('p_type',$twoID);
				else
					{
					if ($typeID==18)
						include_once("inc/job/joblist.php");
					else if($typeID==19)
						include_once("inc/job/jobfrom.php");
					else
						$d->AboutQuery('p_type',$typeID);
					}
					
				
				
				?>
			</div>
		</div>
	</div>
</div>