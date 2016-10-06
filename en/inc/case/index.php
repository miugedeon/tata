<style>
.c_path{line-height:30px;background-position:left 33px;height:75px;line-height:75px;}
.arealist{margin:0 0 20px 0;}
.arealist a{padding:0 10px;}
.arealist a.current{color:#000;font-weight:bold;}
</style>
<div class="case_frames">
	<div class="case_nav"><?php include_once("inc/case/c_nav.php"); ?></div>
    <div class="cases">
    	<div class="c_path"><?php include_once("inc/c_path.php"); ?></div>
        <div class="db_content">
        	<?php
			if($typeID==2){
			?>
        	<div class="arealist">
            Province:
            <?php
			$sql="select * from p_list where language='cn' and p_typelist='area' order by p_id asc";
			$query=$d->Query($sql);
			$i=0;
			while($row=mysql_fetch_array($query)){
				if(get(areaID)>0) $areaID=get(areaID);
				else              if(!$i) $areaID=$row[p_id];   
			?>
            	<a class="aArea<?php if($areaID==$row[p_id]) echo ' current' ?>" href="case-<?php echo $typeID; ?>-<?php echo $row[p_id]; ?>.html"><?php echo $row[p_title_en]; ?></a>	
            <?php
				$i++;
			}
			?>
            </div>
            <?php
			}
			?>
			<div class="caselist">
            	<ul>
                	<?php
					if($typeID==2){
						$sql="select * from p_case where language='cn' and p_type=$typeID and p_area=$areaID and p_title_en<>'' order by p_id desc";
						$pages=page_sam($sql,9,"case-$typeID-$areaID.html?page=",2);
					}else{
						$sql="select * from p_case where language='cn' and p_type=$typeID and p_title_en<>'' order by p_id desc";	
						$pages=page_sam($sql,9,"case-$typeID.html?page=",2);
					}
					$query=$d->Query($sql.$limits);
					$i=0;
					while($row=mysql_fetch_array($query)){
						$i++;
					?>
                	<li<?php if($i%3==0) echo " class='last'"; ?>><a href="javascript:;" onClick="sam_case(<? echo 	$row["p_id"] ?>)" title="<?php echo $row[p_title_en]; ?>"><p><img src="<?php echo imgpath($row[p_pic_s1]); ?>" width="255" height="135" /></p><p class="txt"><?php echo $row[p_title_en]; ?></p></a></li>
                    <?php
					}
					?>
                </ul>
                <div class="clear" style="margin-top:20px;"></div>
				<?php if($num>$pagesize){ ?><div align="center"><?php echo $pages; ?></div><?php } ?>
            </div>
        </div>
    </div>
</div>

	
<script type="text/javascript">
function sam_case(p_id)       
{ 

$("#pppp").load("ajax_case.php?p_id="+p_id+"&rr=<? echo time();?>",function(){
$("#pppp").show(500);

});


$("#ssss").show();

}



	$(document).ready(function(){
  $("#ssss").click(function(){
    $("#pppp").hide();
	$("#ssss").hide();
  });
      $(window).scroll(function() {	  
	  $("#ssss").height($(document).height());
  
});


});


</script>


