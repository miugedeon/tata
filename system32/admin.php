<?php
	session_start();
	
		$langauge="";
		$title="";
		if(isset($_GET["language"]))
		{
			$langauge=$_GET["language"];
		}
		else
		{
			$langauge="cn";
		}
		
		$_SESSION["language"]=$langauge;
		if($_SESSION["language"]=="cn")
		{
			$title="中文版";
		}
		if($_SESSION["language"]=="en")
		{
			$title="英文版";
		}
	
?>

<HTML>
<HEAD>
<TITLE>中国品牌网后台管理系统 PHP 5.0【<?php echo $title?>】</TITLE>
<META http-equiv=Content-Type content="text/html; charset=utf-8">
<META http-equiv=Pragma content=no-cache>
<META http-equiv=Cache-Control content=no-cache>
<META http-equiv=Expires content=-1000>
<LINK href="css/admin.css" type="text/css" rel="stylesheet">
<style type="text/css">
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
</style>
</HEAD>



<FRAMESET border=0 frameSpacing=0 rows="60, *" frameBorder=0>
<FRAME name=header src="header.php" frameBorder=0 noResize scrolling=no>
<FRAMESET cols="170, *">



<frame src="left.php"  name="leftFrame" noresize="noresize" marginwidth="0" marginheight="0" frameborder="0" scrolling="no" target="main" />
	<frame src="right.html" name="main" marginwidth="0" marginheight="0" frameborder="0" scrolling="auto" target="_self" />



</FRAMESET>
</FRAMESET>
<noframes>
</noframes>
</HTML>

