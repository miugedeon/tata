
<style type="text/css" media="screen">
img{border:none;}
.hot_slider{width:1680px;overflow:hidden;position:relative;left:50%;margin-left:-840px;}
.slider_wrap{position:relative;width:1680px;height:426px;}

.mask{position:absolute;width:1020px;bottom:110px;left:50%;FILTER:alpha(opacity=50);opacity:0.5;margin-left:-500px;height:30px;line-height:30px;background:#000;text-align:center;color:#fff;font-size:12px;}

#iipp{position:absolute;width:1000px;bottom:5px;left:50%;margin-left:-500px;height:10px;overflow:hidden;padding:10px;text-align:center;}

#slider_box{position:relative;width:1680px;height:426px;overflow:hidden}

#contentList li{position:relative;width:1680px;height:426px;overflow:hidden;}
#contentList li img{width:1680px;height:426px;}


#previewList{zoom:1;display:inline-block;*display:inline;text-align:center;}

#previewList li{float:left;width:55px;height:5px;cursor:pointer;margin-left:13px;padding-top:0px;overflow:hidden;background:#fff;}

#previewList li:hover,#previewList li.active{background:#ffc600;}

.blankimg{position:absolute;bottom:-20px;width:100%;text-align:center;}
.blankimg img{width:100%;}
</style>
<div class="hot_slider"> 
	<div class="slider_wrap"> 
		<div id="slider_box"> 
			<ul id="contentList"> 
										<?
							$sql="select * from p_banner where p_mark='index' order by p_sort desc limit 5";
							$query2=$d->Query($sql);
							while($row2=mysql_fetch_array($query2))
							{
								$i++;
								if(empty($row2["p_url"]))
								{
									$p_url = "javascript:void(0)";
								}
								else
								{
									$p_url = $row2["p_url"];
								}
							?>
								<li>
									<a href="<?php echo $p_url;?>" target="_blank"><img src="system32/<?echo $row2[p_pic]?>" alt="" /></a>
								</li>
							<?
							}
						?>						
			</ul>
		</div>	
					
					<div id="iipp">
						<ul id="previewList"> 
							<?
							$query2=$d->Query($sql);
							while($row2=mysql_fetch_array($query2))
							{
							$i++;
							?>
							<li>
							</li>																
							<?
							}
							?>
						</ul>							
					</div>
		
	</div>
</div>

<div class="blankimg"></div>
	
<script type="text/javascript">
new Marquee(
{
	MSClass	  : ["slider_box","contentList","previewList"],
	Direction : 2,
	Step	  : 0.3,
	Width	  : 1680,
	Height	  : 426,
	Timer	  : 50,
	SwitchType: 0,
	DelayTime : 2500,
	AutoStart : true
});
</script>
