<style>
.pathlink{}
.pathlink:hover{text-decoration:underline;}
.nolink{color:#000;}
</style>
<div>Location：<a href="index.html" target="_self" class="pathlink">Home</a>
	<?php
	//print_r($path);
	$pathNum=count($path);
	$i=0;
	foreach($path as $pv=>$l){
		$i++;
		if($i<$pathNum)
		echo "&nbsp;&gt;&nbsp;"."<a href='".$l."' target='_self' class='pathlink'>".$pv."</a>";
		else
		echo "&nbsp;&gt;&nbsp;<span class='nolink'>".$pv."</span>";
	}
	unset($pv,$l);
	?>
</div>