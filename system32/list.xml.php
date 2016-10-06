<?php
include_once("config.php");
if($language == 'cn'){
	$f_xmlpath="../list.xml";
	$sqlxml="select * from p_indexpic where language='".$language."' order by p_ordering asc,p_id desc limit 10";
	$query=$d->Query($sqlxml);
	$xml=""; 
	$xml.="<?xml version=\"1.0\" encoding=\"utf-8\"?>";
	$xml.="<list>";
	$xml.="<kvs>";
	while($rowxml=@mysql_fetch_array($query)){
		if($rowxml['p_link'] == "http://" or $rowxml['p_link'] == ""){
			$xml.="<kv title=\"".$rowxml['p_title']."\" description=\"".$rowxml['p_description']."\" img=\"".substr($rowxml['p_pic1'],3)."\" url=\"".substr($rowxml['p_pic2'],3)."\" link=\"\" delay=\"".$rowxml['p_timer']."\" />";
		}else{
			$xml.="<kv title=\"".$rowxml['p_title']."\" description=\"".$rowxml['p_description']."\" img=\"".substr($rowxml['p_pic1'],3)."\" url=\"".substr($rowxml['p_pic2'],3)."\" link=\"".$rowxml['p_link']."\" delay=\"".$rowxml['p_timer']."\" />";
		}
	}
	$xml.="</kvs>";
	$xml.="</list>";
	
	$xmlutf8=iconv("gb2312","utf-8",$xml);
	$f=fopen($f_xmlpath,"w+");
	fwrite($f,$xmlutf8);
	fclose($f);
}elseif($language == 'en'){
	$f_xmlpath="../en/list.xml";
	$sqlxml="select * from p_indexpic where language='".$language."' order by p_ordering asc,p_id desc limit 10";
	$query=$d->Query($sqlxml);
	$xml=""; 
	$xml.="<?xml version=\"1.0\" encoding=\"utf-8\"?>";
	$xml.="<list>";
	$xml.="<kvs>";
	while($rowxml=@mysql_fetch_array($query)){
		if($rowxml['p_link'] == "http://" or $rowxml['p_link'] == ""){
			$xml.="<kv title=\"".$rowxml['p_title']."\" description=\"".$rowxml['p_description']."\" img=\"".substr($rowxml['p_pic1'],0)."\" url=\"".substr($rowxml['p_pic2'],0)."\" link=\"\" delay=\"".$rowxml['p_timer']."\" />";
		}else{
			$xml.="<kv title=\"".$rowxml['p_title']."\" description=\"".$rowxml['p_description']."\" img=\"".substr($rowxml['p_pic1'],0)."\" url=\"".substr($rowxml['p_pic2'],0)."\" link=\"".$rowxml['p_link']."\" delay=\"".$rowxml['p_timer']."\" />";
		}
	}
	$xml.="</kvs>";
	$xml.="</list>";
	
	$xmlutf8=iconv("gb2312","utf-8",$xml);
	$f=fopen($f_xmlpath,"w+");
	fwrite($f,$xmlutf8);
	fclose($f);
}
?>