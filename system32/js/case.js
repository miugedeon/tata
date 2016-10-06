function check()
{
	//类别案例类别
	var _p_type=form.p_type.value;
	alert(_p_type);
	if(_p_type==0)
	{
		alert("请选择类别");
		form.p_type.focus();
		return false;
	}
	var _p_title=form.p_title.value;
	if(_p_title=="")
	{
		alert("请输入名称");
		form.p_title.focus();
		return false;
	}
}