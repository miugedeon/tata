<?php
include_once("config.php");
include_once("../common/myfile.php");

/*  数据准备 */
$qnum=$_POST['qnum'];      //期数
$bgcolor=$_POST['bgcolor']; 
$weburl=$_POST['weburl'].'/';
$l1focustit=$_POST['l1focustit'];
$l1focuslink=$_POST['l1focuslink'];
$l1focuscon=$_POST['l1focuscon'];
$l1list1=$_POST['l1list1'];
$l1link1=$_POST['l1link1'];
$l1list2=$_POST['l1list2'];
$l1link2=$_POST['l1link2'];
$l1list3=$_POST['l1list3'];
$l1link3=$_POST['l1link3'];
$l1list4=$_POST['l1list4'];
$l1link4=$_POST['l1link4'];
$l1list5=$_POST['l1list5'];
$l1link5=$_POST['l1link5'];
$l1rec1=$_POST['l1rec1'];
$l1reclink1=$_POST['l1reclink1'];
$l1rec2=$_POST['l1rec2'];
$l1reclink2=$_POST['l1reclink2'];
$l1rec3=$_POST['l1rec3'];
$l1reclink3=$_POST['l1reclink3'];
$l2focustit=$_POST['l2focustit'];
$l2focuslink=$_POST['l2focuslink'];
$l2focuscon=$_POST['l2focuscon'];
$l2list1=$_POST['l2list1'];
$l2link1=$_POST['l2link1'];
$l2list2=$_POST['l2list2'];
$l2link2=$_POST['l2link2'];
$l2list3=$_POST['l2list3'];
$l2link3=$_POST['l2link3'];
$l2list4=$_POST['l2list4'];
$l2link4=$_POST['l2link4'];
$footeratctit=$_POST['footeratctit'];
$footeratclink=$_POST['footeratclink'];
$footeratccon=$_POST['footeratccon'];

$sqlemail="select * from p_emil where p_id=1 limit 1";
$queryemail=$d->Query($sqlemail);
$rowemail=mysql_fetch_array($queryemail);
//$toppic=$_FILES['toppic'];
//$l1titpic=$_FILES['l1titpic'];
//$l2titpic=$_FILES['l2titpic'];
//$l1focuspic=$_FILES['l1focuspic'];
//$l2focuspic=$_FILES['l2focuspic'];
//$adpic=$_FILES['adpic'];

$picpath="../upload/magazine/$qnum/";
//顶部图片
$toppic=$_FILES["toppic"];
if($toppic["size"]!=0)
{
	$fileName='toppic';
	$f=new myfile($fileName,$toppic,$picpath);
	if($f->type())
	{
		$f->upload();
		$toppicpath=$f->fileName();
	}
}else{
	$toppicpath="magazine/images/toppic.jpg";	
}

//栏目一标题图片
$l1titpic=$_FILES["l1titpic"];
if($l1titpic["size"]!=0)
{
	$fileName='l1titpic';
	$f=new myfile($fileName,$l1titpic,$picpath);
	if($f->type())
	{
		$f->upload();
		$l1titpicpath=$f->fileName();
	}
}else{
	$l1titpicpath="magazine/images/m_top.jpg";	
}

//栏目二标题图片
$l2titpic=$_FILES['l2titpic'];
if($l2titpic["size"]!=0)
{
	$fileName='l2titpic';
	$f=new myfile($fileName,$l2titpic,$picpath);
	if($f->type())
	{
		$f->upload();
		$l2titpicpath=$f->fileName();
	}
}else{
	$l2titpicpath="magazine/images/m_tese.jpg";	
}

//栏目一焦点新闻图片
$l1focuspic=$_FILES['l1focuspic'];
if($l1focuspic["size"]!=0)
{
	$fileName='l1focuspic';
	$f=new myfile($fileName,$l1focuspic,$picpath);
	if($f->type())
	{
		$f->upload();
		$l1focuspicpath=$f->fileName();
	}
}

//栏目二焦点新闻图片
$l2focuspic=$_FILES['l2focuspic'];
if($l2focuspic["size"]!=0)
{
	$fileName='l2focuspic';
	$f=new myfile($fileName,$l2focuspic,$picpath);
	if($f->type())
	{
		$f->upload();
		$l2focuspicpath=$f->fileName();
	}
}

//底部广告图片
$adpic=$_FILES['adpic'];
if($adpic["size"]!=0)
{
	$fileName='adpic';
	$f=new myfile($fileName,$adpic,$picpath);
	if($f->type())
	{
		$f->upload();
		$adpicpath=$f->fileName();
	}
}else{
	$adpicpath="magazine/images/demotupian.jpg";	
}

function http($url){
	$urltmp=$url;
	$suburl=substr($urltmp,0,7);
	$url=$suburl=='http://' || $url=='' ? $url : 'http://'.$url;
	return $url;
}


$sql="select * from p_emil limit 1";
$query=$d->Query($sql);
$row=mysql_fetch_array($query);
$email=$row['p_from'];


/*    数据准备完毕   */
$html='';

$html.='<table width="1000" align="center"  style="MARGIN: 0px auto; FONT-FAMILY: 宋体; FONT-SIZE: 14px;" border="0" cellspacing="0" cellpadding="0" bgcolor="#'.$bgcolor.'">
	<tr>
    	<td>
   	    <table width="760" cellspacing="0" cellpadding="0" border="0" align="center">
            <tr>
                <td align="right" valign="top" width="760" height="105" style="background:url('.$weburl.$toppicpath.') no-repeat;overflow:hidden;font-size:20px;color:#fff;"><br><strong>Num:'.$qnum.'</strong></td>
            </tr>
            <tr>
            	<td width="730" style="background:#fff;width:730px;padding:25px 15px;">
                	<table width="100%" border="0" cellspacing="0" cellpadding="0">
                    	<tr>
                        	<td colspan="3"><img src='.$weburl.$l1titpicpath.' width=730/></td>
                        </tr>
                        <tr><td colspan="3" height="15">&nbsp;</td></tr>
                        <tr>
                        	<td width="370">
                            	<a href="'.http($l1focuslink).'" target="_blank"><img src='.$weburl.$l1focuspicpath.' width=370 height=240 border="0" /></a>
                                <p style="font-size:18px;color:#ff6600;margin:0;padding:0;line-height:45px;" align="center"><a style="color:#ff6600;text-decoration:none;" href="'.http($l1focuslink).'"><strong>'.$l1focustit.'</strong></a></p>
                                <p style="font-size:12px;line-height:200%;text-indent:2em;margin:0;padding:0;">'.$l1focuscon.'</p>
                            </td>
                            <td width="10">&nbsp;</td>
                            <td width="350" valign="top">
                            	<table width="100%" border="0" cellspacing="0" cellpadding="0">
                                  <tr>
                                    <td valign="middle" style="height:40px;border-bottom:1px dashed #999;"><a href="'.$l1link1.'" target="_blank" style="color:#094579;text-decoration:none;"><span style="font-size:18px;">•</span>'.$l1list1.'</a></td>
                                  </tr>
                                  <tr>
                                    <td valign="middle" style="height:40px;border-bottom:1px dashed #999;"><a href="'.$l1link2.'" target="_blank" style="color:#094579;text-decoration:none;"><span style="font-size:18px;">•</span>'.$l1list2.'</a></td>
                                  </tr>
                                  <tr>
                                    <td valign="middle" style="height:40px;border-bottom:1px dashed #999;"><a href="'.$l1link3.'" target="_blank" style="color:#094579;text-decoration:none;"><span style="font-size:18px;">•</span>'.$l1list3.'</a></td>
                                  </tr>
                                  <tr>
                                    <td valign="middle" style="height:40px;border-bottom:1px dashed #999;"><a href="'.$l1link4.'" target="_blank" style="color:#094579;text-decoration:none;"><span style="font-size:18px;">•</span>'.$l1list4.'</a></td>
                                  </tr>
                                  <tr>
                                    <td valign="middle" style="height:40px;"><a href="'.$l1link5.'" target="_blank" style="color:#094579;text-decoration:none;"><span style="font-size:18px;">•</span>'.$l1list5.'</a></td>
                                  </tr>
                                </table>
                                
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:10px;">
                                  <tr>
                                    <td valign="middle" bgcolor="#d6d6d6" style="height:28px;border:1px solid #999;padding-left:20px;"><strong>精彩推荐</strong></td>
                                  </tr>
                                  <tr>
                                    <td valign="middle" style="height:33px;border-left:1px solid #999;border-right:1px solid #999;"><a href="'.$l1reclink1.'" target="_blank" style="color:#094579;text-decoration:none;"><span style="font-size:18px;">&nbsp;• </span>'.$l1rec1.'</a></td>
                                  </tr>
                                  <tr>
                                    <td valign="middle" style="height:33px;border-left:1px solid #999;border-right:1px solid #999;"><a href="'.$l1reclink2.'" target="_blank" style="color:#094579;text-decoration:none;"><span style="font-size:18px;">&nbsp;• </span>'.$l1rec2.'</a></td>
                                  </tr>
                                  <tr>
                                    <td valign="middle" style="height:33px;border-left:1px solid #999;border-right:1px solid #999;border-bottom:1px solid #999;"><a href="'.$l1reclink3.'" target="_blank" style="color:#094579;text-decoration:none;"><span style="font-size:18px;">&nbsp;• </span>'.$l1rec3.'</a></td>
                                  </tr>
                                </table>
                            </td>
                        </tr>
                        <tr><td colspan="3" height="15">&nbsp;</td></tr>
                        <tr>
                        	<td colspan="3"><img src='.$weburl.$l2titpicpath.' width=730/></td>
                        </tr>
                        <tr><td colspan="3" height="15">&nbsp;</td></tr>
                        <tr>
                        	<td width="300" style="padding-left:50px;">
                            	<p style="font-size:18px;line-height:45px;margin:0;padding:0;" align="center"><a style="color:#084579;text-decoration:none;" href='.$l2focuslink.' target=_blank><strong>'.$l2focustit.'</strong></a></p>
                                <p style="margin:0;padding:0;" align="center"><a href='.$l2focuslink.' target=_blank><img src='.$weburl.$l2focuspicpath.' width=280 height=180 border="0" /></a></p>
                                <p style="font-size:12px;line-height:200%;text-indent:2em;margin:0;padding:0;">'.$l2focuscon.'</p>
                            </td>
                            <td width="50">&nbsp;</td>
                            <td width="378" valign="top" align="center" style="border:1px solid #999;padding:10px;">
                            	<table width="100%" border="0" cellspacing="0" cellpadding="0">
                                  <tr>
                                    <td valign="middle" height="33"><a style="color:#084579;text-decoration:none;" href='.$l2link1.' target=_blank>'.$l2list1.'</a></td>
                                  </tr>
                                  <tr>
                                    <td valign="middle" height="33"><a style="color:#084579;text-decoration:none;" href='.$l2link2.' target=_blank>'.$l2list2.'</a></td>
                                  </tr>
                                  <tr>
                                    <td valign="middle" height="33"><a style="color:#084579;text-decoration:none;" href='.$l2link3.' target=_blank>'.$l2list3.'</a></td>
                                  </tr>
                                  <tr>
                                    <td valign="middle" height="33"><a style="color:#084579;text-decoration:none;" href='.$l2link4.' target=_blank>'.$l2list4.'</a></td>
                                  </tr>
                                </table>
								
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                  <tr>
                                    <td><img src='.$weburl.'magazine/images/wsztpic.jpg height=19 /></td>
                                  </tr>
                                  <tr>
                                    <td>
                                    	<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:10px;">
                                          <tr>';
										  $sql="select * from p_product where language='cn' order by p_id desc limit 3 ";
										  $query=$d->Query($sql);
										  while($row=mysql_fetch_array($query)){
                                            $html.='<td><a href='.$weburl.'productshow-'.$row['p_id'].'.html target=_blank><img src='.$weburl.imgpath($row['p_pic1']).' title='.$row['p_productname'].' width=100 height=100 style="border:#999 1px solid;"></a></td>';
										  }
                                          $html.='</tr>
                                        </table>
                                    </td>
                                  </tr>
                                </table>
                            </td>
                        </tr>
                        <tr><td colspan="3" height="15">&nbsp;</td></tr>
                        <tr>
                        	<td colspan="3">
                        		<img src='.$weburl.$adpicpath.' width=730 />
                            </td>
                        </tr>
                        <tr>
                        	<td bgcolor="#efefef" colspan="3">
                            	<table width="100%" border="0" cellspacing="0" cellpadding="0">
                                  <tr>
                                    <td><p><a style="font-size:18px;color:#0a77ba;line-height:45px;text-indent:25px; text-decoration:none;" href='.$footeratclink.'>'.$footeratctit.'</a></p></td>
                                  </tr>
                                  <tr>
                                  	<td><p style="text-indent:2em;font-size:12px;color:#999;line-height:150%;padding:0 10px;margin:0;">'.$footeratccon.'</p>
									</td>
                                  </tr>
                                  <tr>
                                  	<td height="30">&nbsp;</td>
                                  </tr>
                                  <tr>
                                  	<td style="font-size:12px;color:#b4b4b4;text-indent:2em;line-height:20px;">· 为确保简报及时传递到您邮箱，请把<span style="color:red"><strong>'.$email.'</strong></span>添加为您的联系人。</td>
                                  </tr>
                                  <tr>
                                  	<td style="font-size:12px;color:#b4b4b4;text-indent:2em;line-height:20px;">· 如有需要或建议，欢迎及时与我们联络 服务热线：+86-760-87858888</td>
                                  </tr>
                                </table>
                            </td>
                        </tr>
                        
                        <tr>
                        	<td colspan="3" align="center" style="font-size:12px;color:#313131;">
                            	<p style="font-size:12px;padding:0;margin:0;"><br>木林森股份有限公司 版权所有</p>
                                <p style="font-size:12px;padding:0;margin:0;"><br>地址：中国广东省中山市小榄镇木林森大道1号 </p>
                            </td>
                        </tr>
                    </table>

                </td>
            </tr>
        </table>
      </td>
    </tr>
</table>';



if($_GET['action'] != 'sc'){
	$_SESSION['pphtml']=$html;
	echo $_SESSION['pphtml'];
}elseif($_GET['action']=='sc'){
	$file=@fopen('../magazine/'.$_POST['scqnum'].'.html','w+');
	@fwrite($file,$_SESSION['pphtml']);
	@fclose($file);
	unset($_SESSION['pphtml']);
	$sql="insert into p_qikan (p_num) values ('".$_POST['scqnum']."')";
	$d->AdminThenClose($_SESSION["admin"],"第".$_POST['scqnum']."期刊已成功生成",$sql);
}
?>
<form action="qikansc.php?action=sc" method="post">
<div align="center">
        <input type="submit" value="确定生成" style="width:120px;height:30px;">
        <input type="hidden" name="scqnum" value="<?php echo $qnum; ?>">
</div>
</form>