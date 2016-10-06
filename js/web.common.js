function trim(str) { 
	return str.replace(/(^\s*)|(\s*$)/g, ""); 
} 
function textBox(event,obj,con){
	var o,c,t;
	o=$(obj);
	c=con;
	t=event.type
	if(t=="focus"){if(o.val()==c) o.val("");}
	if(t=="blur"){if(o.val()=="") o.val(c);}
}
function check(obj,con,msg){
	var o=$(obj);
	if(o.val()=="" || o.val()==con){
		alert(msg);
		o.focus();
		return false;
	}
}
$(document).ready(function(){
	///*positionX=new Array(0,-120,-65,-85,-38,-150,-150);
//	$(".menuli").each(function(i){
//		$(this).children("ul").css("left",positionX[i]+"px");
//	});*/
//	$(".menuli").hover(function(){
//		//var l=$(this).children(".smenu").children("li").length;
//		//var w=l*138+158;
//		//$(this).children(".smenu").width(w);
//		$(this).children("a:first").css('color','#ddb56a');
//		$(this).children("a:first").css('background','#003057');
//		$(this).children(".smenu").stop().slideDown(200);	
//	},function(){
//		$(this).children("a:first").css('color','#fff');
//		$(this).children("a:first").css('background','none');
//		$(this).children(".smenu").stop().slideUp(200);
//	});

	if($('#c_nav').length>0){
		var c_nav_height=$('#c_nav').parent().height();
		$('#c_nav').height(c_nav_height);
	}
});