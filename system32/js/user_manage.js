//�û����(A)
function user_check()
{
	//�û���
	var _p_username=form1.p_username.value;
	if(_p_username=="")
	{
		alert("�������û���");
		form1.p_username.focus();
		return false;
	}
	//����
	var _p_userpwd=form1.p_userpwd.value;
	if(_p_userpwd=="")
	{
		alert("����������");
		form1.p_userpwd.focus()
		return false;
	}
	//�û�Ȩ��
	var _p_lv=form1.p_lv.value;
	if(_p_lv==0)
	{
		alert("��ѡ���û�Ȩ��");
		form1.p_lv.focus();
		return false;
	}
}

//�û�������
function user_check_update()
{
		//�û���
	var _p_username=form1.p_username.value;
	if(_p_username=="")
	{
		alert("�������û���");
		form1.p_username.focus();
		return false;
	}

	//�û�Ȩ��
	var _p_lv=form1.p_lv.value;
	if(_p_lv==0)
	{
		alert("��ѡ���û�Ȩ��");
		form1.p_lv.focus();
		return false;
	}
}