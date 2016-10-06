<?php
	include_once("common/str.php");
	session_start();
	unset($_SESSION['mylogin']);
	echo $_SESSION['mylogin'];
	alertUrl("退出成功","index.html");
	
	?>