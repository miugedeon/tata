<?php
if($_SESSION['logined']) $vip=""; else $vip=" and p_vip=0";

function needVip(){
	if(!$_SESSION['logined']){
		echo "<script type='text/javascript'>window.location.href='login.html'</script>";	
	}
}