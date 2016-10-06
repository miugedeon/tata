function regCheck(){
	var p_userName=$("#p_userName").val();
	var p_userPwd=$("#p_userPwd").val();
	var p_confirmPwd=$("#p_confirmPwd").val();	
	var p_RealName=$("#p_RealName").val();
	var p_email=$("#p_email").val();
	
	if(trim(p_userName)==""){alert("用户名不能为空");$("#p_userName").focus();return false;}
	if(trim(p_userPwd)==""){alert("密码不能为空");$("#p_userPwd").focus();return false;}
	if(trim(p_confirmPwd)==""){alert("请再次输入密码");$("#p_confirmPwd").focus();return false;}
	if(trim(p_confirmPwd)!=trim(p_userPwd)){alert("两次输入密码不一样，请重新输入");$("#p_confirmPwd").focus();return false;}
	if(trim(p_RealName)==""){alert("请输入真实姓名");$("#p_RealName").focus();return false;}
	if(trim(p_email)==""){alert("请输入邮件地址");$("#p_email").focus();return false;}
}
function onFocusUserName(){
	var html="<img src='images/1_lang.jpg'>&nbsp;请输入用户名";
	$("#userNameDiv").html(html);	
}
function onBlurUserName(){
	var user=trim($("#p_userName").val());
	if(user==''){
		var html="<img src='images/2_hong.jpg'><span style='color:#f00'>&nbsp;用户名不能为空，请重新输入</span>";
		$("#userNameDiv").html(html);
	}else{
		var html="<img src='images/27.gif'>";
		$("#userNameDiv").html(html);
		$.post("inc/member/regAjax.php",{user:user},function(data){
		$("#userNameDiv").html(data);
		});
	}
}

function onFocusUserPwd(){
	var html="<img src='images/1_lang.jpg'>&nbsp;请输入您的密码";	
	$("#userPwdDiv").html(html);
}
function onBlurUserPwd(){
	var val1,val2,html
	val1=trim($("#p_userPwd").val());
	val2=trim($("#p_confirmPwd").val());
	if(val1=='') html="<img src='images/2_hong.jpg'><span style='color:#f00'>&nbsp;密码不能为空，请重新输入</span>";
	else        html="<img src='images/3_rv.jpg'><span style='color:#258300'>&nbsp;正确</span>"
	$("#userPwdDiv").html(html);
	
	if((val1 != val2) && (val2 != '')){
		html="<img src='images/2_hong.jpg'><span style='color:#f00'>&nbsp;两次输入的密码不相同，请重新输入</span>";
		$("#confirmPwdDiv").html(html);
	}
}

function onFocusConfirmPwd(){
	var html="<img src='images/1_lang.jpg'>&nbsp;请再次输入您的密码";
	$("#confirmPwdDiv").html(html);
}
function onBlurConfirmPwd(){
	var val1,val2,html
	val1=trim($("#p_userPwd").val());
	val2=trim($("#p_confirmPwd").val());
	if(val2==''){
		html="<img src='images/2_hong.jpg'><span style='color:#f00'>&nbsp;密码确认不能为空，请重新输入</span>";
	}else{
		if(val1 == val2) html="<img src='images/3_rv.jpg'><span style='color:#258300'>&nbsp;正确</span>";
		else             html="<img src='images/2_hong.jpg'><span style='color:#f00'>&nbsp;两次输入的密码不相同，请重新输入</span>";
	}
	$("#confirmPwdDiv").html(html);
}

function onFocusRealName(){
	var html="<img src='images/1_lang.jpg'>&nbsp;请输入您的真实姓名";
	$("#realNameDiv").html(html);
}
function onBlurRealName(){
	var html,val;
	val=trim($("#p_RealName").val());
	if(val=='') html="<img src='images/2_hong.jpg'>&nbsp;<span style='color:#f00'>真实姓名不能为空，请重新输入</span>";
	else        html="<img src='images/3_rv.jpg'><span style='color:#258300'>&nbsp;正确</span>";
	$("#realNameDiv").html(html);
}

function onFourcEmail(){
	var html="<img src='images/1_lang.jpg'>&nbsp;请输入您的E-mail地址";
	$("#emailDiv").html(html);
}
function onBlurEmail(){
	var html,val;
	val=trim($("#p_email").val());
	if(val=='') html="<img src='images/2_hong.jpg'>&nbsp;<span style='color:#f00'>E-mail地址不能为空，请重新输入</span>";
	else        html="<img src='images/3_rv.jpg'><span style='color:#258300'>&nbsp;正确</span>";
	$("#emailDiv").html(html);
}