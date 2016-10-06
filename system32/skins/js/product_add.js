function check()
{
	//产品一级目录
	var _p_bigtype=form.p_bigtype.value;
	if(_p_bigtype==0)
	{
		alert("请选择产品一级目录");
		form.p_bigtype.focus();
		return false;
	}
	//产品排序 判断为数字
	var _p_sort=form.p_sort.value;
	if(_p_sort=="")
	{
		alert("请输入排序");
		form.p_sort.focus();
		return false;
	}
	else
	{
		if(isNaN(_p_sort))
		{
			alert("排序只能是数字");
			form.p_sort.focus();
			return false;	
		}
	}
	//产品名称
	var _p_productname=form.p_productname.value;
	if(_p_productname=="")
	{
		alert("请输入产品名称");
		form.p_productname.focus();
		return false;
	}
}