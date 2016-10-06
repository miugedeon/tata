<?php 
include_once("common/conn.php");
include("common/language.php");
$nav="main";
$p='main';
$sql="select * from p_title where language='".$language."'";
$query=$d->Query($sql);
$rowtt=mysql_fetch_array($query);
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php echo $rowtt["p_keyword"]?>" />
<meta name="description" content="<?php echo $rowtt["p_description"]?>" />
<meta name="author" content="<?php echo $_SESSION["author"]?>" />
<meta name="birthday" content="<?php echo $_SESSION["birthday"]?>" />
<title>木林森股份有限公司</title>
<link href="css/main.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="middle" class="back_left"><table border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="981" height="464">
          <param name="movie" value="main.swf" />
          <param name="quality" value="high" />
          
          <embed src="main.swf" width="981" height="464" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash"></embed>
        </object></td>
      </tr>
    </table>
    </td>
  </tr>
</table>
</body>
</html>
