function check()
{
	//��������
	var _p_type=form.p_type.value;
	if(_p_type==0)
	{
		alert("��ѡ�����");
		form.p_type.focus();
		return false;
	}
	var _p_title=form.p_title.value;
	if(_p_title=="")
	{
		alert("����������");
		form.p_title.focus();
		return false;
	}
}