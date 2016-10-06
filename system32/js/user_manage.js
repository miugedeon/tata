//用户添加(A)
function user_check()
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
		form1.p_userpwd.focus()
		return false;
	}
	//用户权限
	var _p_lv=form1.p_lv.value;
	if(_p_lv==0)
	{
		alert("请选择用户权限");
		form1.p_lv.focus();
		return false;
	}
}

//用户名更新
function user_check_update()
{
		//用户名
	var _p_username=form1.p_username.value;
	if(_p_username=="")
	{
		alert("请输入用户名");
		form1.p_username.focus();
		return false;
	}

	//用户权限
	var _p_lv=form1.p_lv.value;
	if(_p_lv==0)
	{
		alert("请选择用户权限");
		form1.p_lv.focus();
		return false;
	}
}