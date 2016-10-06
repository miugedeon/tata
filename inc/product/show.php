<?php
if($productID>0){
?>
<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
<style>
#slider_box{width:338px;height:252px;overflow:hidden;border:#dcdcdc 1px solid;}
#contentList li{float:left;}
#contentList li img{width:338px;height:252px;}
#previewList{width:345px;clear:both;}
#previewList li{width:115px;float:left;height:83px;padding-top:10px;}
#previewList li img{width:108px;height:81px;border:#dcdcdc 1px solid;}
</style>
<div class="c_frames">
	<div class="c_nav"><?php include_once("c_nav.php"); ?></div>
    <div class="c_right">
    	<div class="c_path"><?php include_once("inc/c_path.php"); ?></div>
        <div class="db_content">
			<div class="productShow">
                <div class="pics">
                    <div id="slider_box"> 
                        <ul id="contentList"> 
                            <?php
							$sql="select * from p_product where language='cn' and p_id=".$productID;
							$query=$d->Query($sql);
							$row=mysql_fetch_array($query);
							$pics=array();
							if($row[p_pic_s1]!="") $pics[p_pic1]=$row[p_pic_s1];
							if($row[p_pic_s2]!="") $pics[p_pic2]=$row[p_pic_s2];
							if($row[p_pic_s3]!="") $pics[p_pic3]=$row[p_pic_s3];
                            foreach($pics as $v=>$p){
                            ?> 
                            <li><a href="<?php echo imgpath($row[$v]) ?>" title="<?php echo $row[p_productname]; ?>" rel="lightbox[product]"><img src="<?php echo imgpath($p); ?>" /></a></li>
                            <?php
                            }
                            ?>
                        </ul> 
                    </div>
                    <ul id="previewList"> 
                        <?php if($row[p_pic_s1] != ""){ ?><li><img src="<?php echo imgpath($row[p_pic_s1]) ?>" /></li><?php } ?>
                        <?php if($row[p_pic_s2] != ""){ ?><li><img src="<?php echo imgpath($row[p_pic_s2]) ?>" /></li><?php } ?>
                        <?php if($row[p_pic_s3] != ""){ ?><li><img src="<?php echo imgpath($row[p_pic_s3]) ?>" /></li><?php } ?>
                    </ul> 
                </div>
                <div class="parameters"><?php echo $row[p_content]; ?></div>
                <div class="fixMarTop">&nbsp;</div> 
                <div class="instruction">
                    <p class="title">产品说明</p>
                    <?php echo $row[p_content2]; ?>
                </div>
            </div>
		</div>
    </div>
</div>
<?php
if(count($pics)>1){
?>
<script type="text/javascript">
new Marquee(
{
	MSClass	  : ["slider_box","contentList","previewList"],
	Direction : 2,
	Step	  : 0.3,
	Width	  : 338,
	Height	  : 252,
	Timer	  : 20,
	DelayTime : 5000,
	WaitTime  : 5000,
	ScrollStep: 0,
	SwitchType: 0,
	AutoStart : true
});
</script>
<?php
}
?>
<script type="text/javascript" src="js/lightbox.js"></script>
<script type="text/javascript">
$('a').smoothScroll({
speed: 1000,
easing: 'easeInOutCubic'
});

$('.showOlderChanges').on('click', function(e){
$('.changelog .old').slideDown('slow');
$(this).fadeOut();
e.preventDefault();
})
</script>
<?php
if($num>$pagesize){
?>
<div align="center" style="clear:both;"><?php echo $pages;?></div>
<?php
}
?>
<?php
}
?>