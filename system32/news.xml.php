<?php
include_once("config.php");
$cid=97;
if($language == 'cn'){
	$f_xmlpath="../news.xml";
	$sqlxml="select * from p_area_type where p_id=$p_smalltype and language='cn'";
	$queryxml=$d->Query($sqlxml);
	$rowxml=mysql_fetch_array($queryxml);
	$key=$rowxml['p_title_en'];
	
	$sqlc="select * from p_area where p_smalltype=$p_smalltype and language='cn'";
	$queryc=$d->Query($sqlc);
	$num=mysql_num_rows($queryc);
	
	$fcontent=file_get_contents($f_xmlpath);
	$pattern="/<$key><description url=\"service-97-$key\.html\">(.*)(\d{1})(.*)<\/description><\/$key>/i";
	$replacement="<$key><description url=\"service-97-$key.html\">\\1|$num\\3</description></$key>";
	$fcontent=preg_replace($pattern,$replacement,$fcontent);
	//echo $fcontent;
	$fcontent=preg_replace("/\|/","",$fcontent);
	//echo $fcontent;
	$f=@fopen($f_xmlpath,"w+");
	$fwrite=@fwrite($f,$fcontent);
	fclose($f);
	//file_put_contents($f,$fcontent);
}
?>
