<div id="top1">
<p><img src="images/logo.jpg" /></p>
<p><img src="images/tel.jpg" /></p>
<p style="margin-left:0px;margin-top:25px;"><a href="../index.html" target='_self'>中文版</a> | <a href="#" target='_self'>ENGLISH</a></p>
<div class="searchBg">
<form action="search.html" name="searchForm" id="searchForm" method="post">
	<input type="text" name="keyname" id="keyword" value="Keyword." onfocus="textBox(event,this,'Keyword.')" onblur="textBox(event,this,'Keyword.')" /><input type="submit" name="search" id="search" value="" onclick="return check('#keyword','Keyword.','Enter a keyword.')" />
</form>
</div>
</div>
<div id="top2">
<ul>
	<li class="bg1 menus1"><a <?php if($nav=='index') echo 'class="hover"' ?> href="index.html" target="_self">Home</a></li>
    <li class="bg2 menus1"><a <?php if($nav=='about') echo 'class="hover"' ?> href="about.html" target="_self">About</a>
		
		<? get_about(2,'about','about','Learn more about MLS'); ?>
	</li>
	
    <li class="bg3 menus1"><a <?php if($nav=='product') echo 'class="hover"' ?> href="product.html" target="_self">Products</a>
		<? get_about(3,'about','product',"MLS's professional products and services"); ?>
	</li>
    <li class="bg4 menus1"><a <?php if($nav=='news') echo 'class="hover"' ?> href="news.html" target="_self">News</a>
		<? get_about(4,$p_mark,'news','Latest news about MLS'); ?>
	</li>
    <li class="bg5 menus1"><a <?php if($nav=='case') echo 'class="hover"' ?> href="case.html" target="_self">Project</a>
		<? get_about(5,$p_mark,'case','MLS Project before'); ?>
	</li>
    <li class="bg6 menus1"><a <?php if($nav=='tech') echo 'class="hover"' ?> href="tech.html" target="_self">Technology</a>
        	<div class="menus2">
			<div class="mmm1">
				<p class="ppp1">Provide you with professional technical support</p>
				<p class="ppp2"></p>
				<ul>
					<li><a href="tech-1.html">Specifications</a></li>
					<li><a href="tech-2.html">Share</a></li>
				</ul>
			</div>
			<div class="mmm2"></div>
		</div>

	</li>
	<li class="bg6 menus1"><a <?php if($nav=='contact') echo 'class="hover"' ?> href="contact.html" target="_self">Contact</a>
	</li>
	<li class="bg6 menus1"><a href="#weibo.html" target="_self">Weibo</a></li>
</ul>
</div>
<script type="text/javascript">
$(document).ready(function(){
  $("#top2 .menus1").mouseenter(function(){
  $("#top2 .menus1").not(this).children(".menus2").hide();
  $("#top2 .menus1").not(this).children("a").removeClass('okoks');
    $(this).children(".menus2").stop(true,true).slideDown();
	$(this).children("a").addClass('okoks');
  });
  
    $(".menus2").mouseleave(function(){
    $(".menus2").hide();
  });
});
</script>
<?

function get_about($nn,$p_mark,$files,$title)
{	
global	$d;
?>
			<div class="menus2">
			<div class="mmm1">
				<p class="ppp1"><? echo $title?></p>
				<p class="ppp2"></p>
				<ul>
			<?		
		switch($nn)
		{		
			case 2:
				$sqlt="select * from p_type where p_mark='".$p_mark."' and p_bigtype>0 and p_deep=1 and  language='cn'";
			break;
			
			case 3:
				$p_mark='you';
				$sqlt="select * from p_product_type where p_bigtype=-0 and  language='cn' ";
			break;
			
			case 4:
				$p_mark='zhao';
				$sqlt="select * from p_list where p_typelist='news' and  language='cn'";
			break;
			
			case 5:
				$sqlt="select * from p_list where p_typelist='case' and  language='cn'";
			break;
			
			case 6:
				$sqlt="select * from p_type where p_mark='".$p_mark."' and p_bigtype>0 and  language='cn'";
			break;
			
			case 7:
				$sqlt="select * from p_type where p_mark='".$p_mark."' and p_bigtype>0 and  language='cn'";
			break;


			default:

			break;
		}
		$query=$d->Query($sqlt);
	$i=0;
	$ii=0+$_GET["ii"];
	while($row=mysql_fetch_array($query))
	{
		$i++;
	?>
					<li><a href="<? echo $files?>-<? echo $row[p_id]?>.html"><? echo $row[p_title_en]?></a></li>
	<?
	}
	?>
			</ul>
			</div>
			<div class="mmm2"></div>
		</div>
<?
}
?>



