<?php
	session_start();
	if(isset($_SESSION["admin"])=="")
	{
		alertUrl("╥г╥╗╡ывВ","login.html");
	}
?>