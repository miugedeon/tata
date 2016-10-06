<?php
	function runJs($s){
		echo "<script type='text/javascript'>$s</script>";	
	}
	function alert($s)
	{
		echo "<script language='javascript'>alert('".$s."')</script>";
	}
	function alertUrl($s,$url)
	{
		echo "<script language='javascript'>alert('".$s."');location.href='".$url."'</script>";
	}
	function url($url)
	{
		echo "<script language='javascript'>location.href='".$url."'</script>";
	}
	function alertBack($s)
	{
		echo "<script language='javascript'>alert('".$s."');history.go(-1);</script>";
	}
	function alertBack2($s)
	{
		echo "<script language='javascript'>alert('".$s."');history.go(-2);</script>";
	}
	function closeWin(){
		echo "<script language='javascript'>window.close()</script>";	
	}
	
	function utf8_strlen($string) {
		// 将字符串分解为单元
		preg_match_all("/./us", $string, $match);
		 // 返回单元个数
		return count($match[0]);
	}
	
	function utfsubstr($str,$start,$length){
		//alert(strlen($str));
		if(utf8_strlen($str)>$length){
			$string=mb_substr($str,$start,$length,'utf-8');
			return $string."...";	
		}else{
			return $str;
		}
	}
	
	function GBsubstr($string, $start, $length) {
		if(strlen($string)>$length){
		   $str=null;
		   $len=$start+$length;
		   for($i=$start;$i<$len;$i++){
				if(ord(substr($string,$i,1))>0xa0){
					$str.=substr($string,$i,2);
					$i++;
				}else{
					$str.=substr($string,$i,1);
				}
		   }
		   return $str.'...';
		}else{
		   return $string;
		}
	}
	function imgpath($url){
		global $language;
		if($language=='cn')        return substr($url,3);
		elseif($language=='en')    return $url;
	}
	
	function c($text){   //清除sql防注入
		$preg="/select|update|delete|drop table|insert into|where|\*|=|#/i";	
		$text=preg_replace($preg,'',$text);
		return $text;
	}
	
	function get($data){
		$tmpdata=$_GET[$data];
		return c($tmpdata);	
	}
	function post($data){
		$tmpdata=$_POST[$data];
		return c($tmpdata);	
	}
	
	
	//获得推荐产品封装函数
function getNP($limit,$overNum,$height){
	global $d;
	$sql="select * from p_product where language='cn' and p_index=1 order by p_sort desc,p_id desc limit $limit";
	$query=$d->Query($sql);
	$num=mysql_num_rows($query);
	$html='';
	$width=$overNum*80;
	
	$html.='<div align="center" style="width:'.($width+80).'px;height:'.$height.'px;overflow:hidden;line-height:120%;text-align:left;">';
	$html.='<table border="0" align="left" cellpadding="0" cellspacing="0">';
   	$html.='<tr>';
	if($num>$overNum){
		//$html.='<td><a href="javascript:void(0);" id="LeftButton2"><img src="images/left.gif" border="0"></a></td>';
     }
	//$html.='<td width="10" style="padding-left:10px;"></td>';
    $html.='<td valign="top" width="'.$width.'">';
    $html.='<div ID="MarqueeDiv2" style="width:'.$width.'px;">';
    $html.='<TABLE style="WIDTH:'.(80*$num).'px; BORDER-COLLAPSE: collapse;display:inline;" cellSpacing=0 cellPadding=0 align=left border=0>';
    $html.='<TBODY>';
    $html.='<TR>';
    while($row=mysql_fetch_array($query)){
		$html.='<TD width="80" height="75" align="left" class="paddtd">';
        $html.='<A href="productshow-'.$row[p_bigtype].'-'.$row[p_id].'.html" target="_self"><IMG src="'.imgpath($row[p_pic_s1]).'" border=0 width="101" height="75" title="'.$row[p_productname].'"></A>';
        //$html.='<br/><A href="javascript:void(0)">'.utfsubstr($row[p_productname],0,10).'<br>PRICE:'.$row[p_file4].'</A>';
        $html.='</TD>';
    }
	$html.='</TR>';
    $html.='</TBODY>';
    $html.='</TABLE></div>';
    $html.='</td>';
    //$html.='<td width="10" style="padding-left:10px;"></td>';
    if($num>$overNum){
        //$html.='<td><a href="javascript:void(0);" id="RightButton2"><img src="images/right.gif" border="0"></a></td>';
	}
    $html.='</tr>';
    $html.='</table>';
	
	if($num>$overNum){
	/*********箭头控制滚动方向、加速及鼠标拖动***************/
	/*********箭头控制滚动方向、加速及鼠标拖动***************/
	$html.='<script type="text/javascript">';
	$html.='var MarqueeDiv2Control=new Marquee("MarqueeDiv2");';		
	$html.='MarqueeDiv2Control.Direction="left";';           //箭头控制滚动方向、加速及鼠标拖动实例
	$html.='MarqueeDiv2Control.Step=1;';
	$html.='MarqueeDiv2Control.Width='.$width.';';
	$html.='MarqueeDiv2Control.Height='.$height.';';
	$html.='MarqueeDiv2Control.Timer=30;';
	$html.='MarqueeDiv2Control.ScrollStep=1;';			//若为-1则禁止鼠标控制实例
	$html.='MarqueeDiv2Control.Start();';
	$html.='MarqueeDiv2Control.BakStep=MarqueeDiv2Control.Step;';
	$html.='$("#LeftButton2").hover(function(){MarqueeDiv2Control.Direction=2,function(){MarqueeDiv2Control.Step=MarqueeDiv2Control.BakStep}});';
	$html.='$("#RightButton2").hover(function(){MarqueeDiv2Control.Direction=3,function(){MarqueeDiv2Control.Step=MarqueeDiv2Control.BakStep}});';
	$html.='$("#LeftButton2").mousedown(function(){MarqueeDiv2Control.Step=MarqueeDiv2Control.BakStep+3});';
	$html.='$("#RightButton2").mousedown(function(){MarqueeDiv2Control.Step=MarqueeDiv2Control.BakStep+3});';
	$html.='$("#LeftButton2").mouseup(function(){MarqueeDiv2Control.Step=MarqueeDiv2Control.BakStep=1});';
	$html.='$("#RightButton2").mouseup(function(){MarqueeDiv2Control.Step=MarqueeDiv2Control.BakStep=1});';
	$html.='</script>';
	}
	return $html;
}
/* 
Utf-8、gb2312都支持的汉字截取函数 
cut_str(字符串, 截取长度, 开始长度, 编码); 
编码默认为 utf-8 
开始长度默认为 0 
*/function left($string, $sublen, $start = 0, $code = 'UTF-8') 
{ 
if($code == 'UTF-8') 
{ 
$pa ="/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|\xe0[\xa0-\xbf][\x80-\xbf]|[\xe1-\xef][\x80-\xbf][\x80-\xbf]|\xf0[\x90-\xbf][\x80-\xbf][\x80-\xbf]|[\xf1-\xf7][\x80-\xbf][\x80-\xbf][\x80-\xbf]/"; 
preg_match_all($pa, $string, $t_string); if(count($t_string[0]) - $start > $sublen) return join('', array_slice($t_string[0], $start, $sublen))."..."; 
return join('', array_slice($t_string[0], $start, $sublen)); 
} 
else 
{ 
$start = $start*2; 
$sublen = $sublen*2; 
$strlen = strlen($string); 
$tmpstr = ''; for($i=0; $i<$strlen; $i++) 
{ 
if($i>=$start && $i<($start+$sublen)) 
{ 
if(ord(substr($string, $i, 1))>129) 
{ 
$tmpstr.= substr($string, $i, 2); 
} 
else 
{ 
$tmpstr.= substr($string, $i, 1); 
} 
} 
if(ord(substr($string, $i, 1))>129) $i++; 
} 
if(strlen($tmpstr)<$strlen ) $tmpstr.= "..."; 
return $tmpstr; 
} 
}
function replaceHtmlAndJs($document)
{
	$document = trim($document);
	if (strlen($document) <= 0)
	{
		return $document;
	}
	$search = array ("'<script[^>]*?>.*?</script>'si", // 去掉 javascript
	"'<[/!]*?[^<>]*?>'si", // 去掉 HTML 标记
	"'([rn])[s]+'", // 去掉空白字符
	"'&(quot|#34);'i", // 替换 HTML 实体
	"'&(amp|#38);'i",
	"'&(lt|#60);'i",
	"'&(gt|#62);'i",
	"'&(nbsp|#160);'i"
	); // 作为 PHP 代码运行

	$replace = array ("",
	"",
	"\1",
	"&",
	"<",
	">",
	" "
	);

	return @preg_replace ($search, $replace, $document);
}

function getSummary($string, $sublen, $start = 0, $code = 'UTF-8')
{
	$string = replaceHtmlAndJs($string);
	return left($string, $sublen, $start, $code);
}
?>
