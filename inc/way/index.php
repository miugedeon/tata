<style>
.c_path{line-height:30px;background-position:left 33px;height:65px;line-height:75px;}
.arealist{margin:0 0 20px 0;}
.arealist a{padding:0 10px;}
.arealist a.current{color:#000;font-weight:bold;}
</style>
<div class="case_frames">
	<?php  $aa=$_GET["ty"];
	if($aa=='fhzc')
		include_once("inc/way/fhzc.php");
	elseif($aa=='fhzc_x')
		include_once("inc/way/fhzc_x.php");
	elseif($aa=='wllx')
		include_once("inc/way/wllx.php");
	elseif($aa=='fhzc_y')
		include_once("inc/way/fhzc_y.php");
	else
		include_once("inc/way/way.php");
	
	
	
	?>

</div>

	
<script type="text/javascript">



</script>


