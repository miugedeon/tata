<?php include_once("inc/head.php")?>
<?php include_once("inc/top.php")?>

<!--------------------------------------------------->
<?php
	$p_id="";
	if(isset($_GET["p_id"]))
	{
		$p_id=$_GET["p_id"];
	}
	else
	{
		$sql="select * from p_type where p_bigtype=1 and language='cn' order by p_id asc limit 0,1";
		$query=$d->Query($sql);
		while($row=mysql_fetch_array($query))
		{
			$p_id=$row["p_id"];
		}
	}
	
?>
<!--------------------------------------------------->
<table width="1001" cellpadding="0" cellspacing="0" style="background:#fff; margin:0 auto;">
	<tr>
    	<td>
        	<div id="middle">
				<?php include_once("inc/nav.php")?>
                <div class="width_926">
                    <div class="left">
                    	<?php include_once("inc/left.php")?>
                        <?php include_once("inc/left_about.php")?>
                    </div>
                    <div class="right" id="right1">
                        <div id="right">
                            <div><img src="images/about.jpg" /></div>
                            <div style="height:66px; vertical-align:text-bottom;">
                                <div style="float:left;"><img src="images/right_about.jpg" /></div>
                                <div style="float:left; padding-top:49px; color:#C5A157; font-family:宋体; padding-left:30px;">琪朗灯饰成长于强手云集的灯饰市场中，见证了中国灯饰业的迅猛发展。</div>
                            </div>
                            <div style="height:20px;"></div>
                            <div style="font-family:'宋体'; line-height:200%; color:#5D5A55; clear:both;">
                                琪朗灯饰创建于1993年，厂房占地面积14万平方米，是集现代、水晶、欧式等各类民用灯具的研发、生产与销售的中型国际化灯饰集团企业。
            琪朗灯饰集团包括琪朗灯饰厂有限公司、珠海宝朗照明有限公司、意大利分公司、英国分公司、俄罗斯分公司、中山古镇创业孵化基地等经
            济实体。 产品远销全球70多个国家和地区，在北京、上海等国内80多个大、中城市设立了210多家专卖店。琪朗灯饰现有产品外观、实用新
            型及发明专利197项，省级企业技术中心，及市级工程技术中心各一个。琪朗设立了德国、法国、西班牙产品设计中心，聘请欧洲顶级设计师
            担任设计总监，骨干研发和技术人才200多名，员工3000多人。
               在2006年、2007年、2008年、2009年古镇国际灯饰博览会上，琪朗产品连续四届同时获得“参展精品”金奖和银奖。
               2010年1月，琪朗成为英国伯明翰国际灯饰展历史上第一次同时获得“最佳固定式灯具设计大奖”、“英国灯具设计年度大奖”两项大奖
            的灯饰企业。<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </td>
    </tr>
    <tr>
    	<td><?php include_once("inc/foot.php")?></td>
    </tr>
</table>
</body>
</html>
