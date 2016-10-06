<?php

		include_once("config.php");
		$p_id=$_POST["p_id"];
		
		$sql="delete from p_user where p_id in(".$p_id.")";
		$d->AdminBack($_SESSION["admin"],"É¾³ý³É¹¦",$sql);
		$d->Close();

?>