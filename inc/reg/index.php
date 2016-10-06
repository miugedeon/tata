
<div class="c_frames">
	<div class='breadNavBg'>
		<div class="c_path"><?php include_once("inc/reg/c_path.php"); ?></div>
	</div>
	<div class='breadBb'>
		<div class="c_nav"><?php include_once("inc/reg/c_nav.php"); ?></div>
		<div class="c_right">

			<div class="db_content">
				<?php
				$typeID=$_GET['typeID'];
				if($typeID==33)
						include_once("inc/reg/regfrom.php");
				elseif($typeID==34)
						include_once("inc/reg/wangji.php");
				else
						$d->AboutQuery('p_type',$typeID);
					
				?>
			</div>
		</div>
	</div>
</div>