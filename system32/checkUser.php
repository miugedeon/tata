<?php
	session_start();
	if(isset($_SESSION["admin"])=="")
	{
		alertUrl("�Ƿ�����","login.html");
	}
?>