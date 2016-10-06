<?php
$sql2="select * from p_title where language='cn'";
$rowlist=$d->Row($sql2);
?>
<div id="top1">
<div class="top11"></div>

<div id="top2">
	<div class="top21">
		<p class="top2Logo"><a href="index.html"><img src="images/logo.png" /></a></p>
		<div class='toptime'>今天是：
<script language=javascript>
today=new Date();
function initArray(){
this.length=initArray.arguments.length
for(var i=0;i<this.length;i++)
this[i+1]=initArray.arguments[i] }
var d=new initArray(
"星期日",
"星期一",
"星期二",
"星期三",
"星期四",
"星期五",
"星期六");
document.write(
"<font color=#000000 style='font-size:12px;font-family: 宋体'> ",
today.getYear()+1900,"年",
today.getMonth()+1,"月",
today.getDate(),"日"," ",
 d[today.getDay()+1],
"</font>" ); 
</script></div>
		<ul class="h_topnav">
			<li class="menus1 nava1"><a <? okoks('about');?>"  href="index.html">首页</a>
			
			</li>
			
			<li class="menus1 nava2"><a <? okoks('pro');?>"  href="about.html">关于我们</a>
			<? get_about(1,'about','about');?>	
			</li>
			
			<li class="menus1 nava3"><a <? okoks('news');?>"  href="news.html">新闻资讯</a>
			<? get_about(3,'news','news');?>
			</li>
			
			<li class="menus1 nava4"><a <? okoks('way');?>"  href="way.html">物流路线</a>
			<? get_about(4,'ser','ser');?>
			</li>
			
			<li class="menus1 nava5"><a <? okoks('join');?>"  href="join.html">招商加盟</a>
			<? get_about(5,'join','join');?>
			</li>
			<li class="menus1 nava5"><a <? okoks('join');?>"  href="job.html">人力资源</a>
			<? get_about(5,'job','job');?>
			</li>
			<li class="menus1 nava5"><a <? okoks('join');?>"  href="contact.html">联系我们</a>
			<? //get_about(5,'contact','contact');?>
			</li>
		</ul>
	</div>

	<div class="top_shadow"></div>
</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
  $("#top2 .menus1").hover(function(){
 	$("#top2 .menus1").not(this).children(".menus2").hide();
  	$("#top2 .menus1").not(this).children("a").removeClass('okoks');
    $(this).children(".menus2").stop(true,true).slideDown(200);
    $(this).children("a").addClass('okoks');
  });
  
    $(".h_topnav").mouseleave(function(){
    $(".menus2").hide();
	$(".menus1").children("a").removeClass('okoks');
  });
  
});
</script>

<?
function okoks($ss)
{
	global	$p_mark;
	if($ss==$p_mark) echo 'okoks';
}

function get_about($nn,$p_mark,$files)
{	
global	$d;
?>
<ul class="menus2">
	<?		
		switch($nn)
		{		
			case 1:
			case 4:
			case 5:
				$sqlt="select * from p_type where p_mark='".$p_mark."' and p_bigtype>0 and  language='cn'";
			break;
			
			case 2:
				$sqlt="select * from p_product_type where p_bigtype=0 and  language='cn' ";
			break;
			
			case 3:
				$sqlt="select * from p_list where p_typelist='".$p_mark."' and language='cn'";
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
		<li><a href="<? echo $files?>-<? echo $row[p_id]?>.html"><? echo $row[p_title]?></a></li>
		<?php
	}
	
	?>
</ul>
<?
}
?>

<script type="text/javascript">
var isKeywordEdit = false;
$("#searchBox").focus(function(){
	if(isKeywordEdit)
	{
		return ;
	}
	else
	{
		document.getElementById("searchBox").value = "";
		isKeywordEdit = true;
	}
});

$("#searchBox").blur(function(){
	var _keyword = document.getElementById("searchBox").value;
	if(_keyword == "")
	{
		document.getElementById("searchBox").value = "搜索";
		isKeywordEdit = false;
	}
});

function globalSearchCheckKeyword()
{
	if(global_search.p_keyword.value == "" || isKeywordEdit == false)
	{
		alert("请输入搜索关键词");
		global_search.p_keyword.focus();
		return false;
	}
}
</script>