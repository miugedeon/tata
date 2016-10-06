function login_check()
{
	//用户名
	var _p_username=form1.p_username.value;
	if(_p_username=="")
	{
		alert("请输入用户名");
		form1.p_username.focus();
		return false;
	}
	//密码
	var _p_userpwd=form1.p_userpwd.value;
	if(_p_userpwd=="")
	{
		alert("请输入密码");	
		form1.p_userpwd.focus();
		return false;
	}
}
function reset_click()
{
	location.href="login.html";
}