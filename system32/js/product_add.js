function check()
{
	//��Ʒһ��Ŀ¼
	var _p_bigtype=form.p_bigtype.value;
	if(_p_bigtype==0)
	{
		alert("��ѡ���Ʒһ��Ŀ¼");
		form.p_bigtype.focus();
		return false;
	}
	//��Ʒ���� �ж�Ϊ����
	var _p_sort=form.p_sort.value;
	if(_p_sort=="")
	{
		alert("����������");
		form.p_sort.focus();
		return false;
	}
	else
	{
		if(isNaN(_p_sort))
		{
			alert("����ֻ��������");
			form.p_sort.focus();
			return false;	
		}
	}
	//��Ʒ����
	var _p_productname=form.p_productname.value;
	if(_p_productname=="")
	{
		alert("�������Ʒ����");
		form.p_productname.focus();
		return false;
	}
}