<?php

		$p_id=$_GET["p_id"];
		include_once("config.php");
		$sql="delete from p_baoming where p_id=".$p_id;
		$d->Admin($_SESSION["admin"],"É¾³ý³É¹¦",$sql,"netBaoming.php");
		$d->Close();


?>