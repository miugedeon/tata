<table width="70%" cellpadding="0" cellspacing="1" border="0" class="alltable" style="margin-top:20px;">
            <tr style="height:35px; line-height:35px;">
            	<td width="100" style="text-align:center; color:#666;">ͼƬ����:</td>
                <td>
                    
                    <select name="p_type" id="p_type">
                    	<option value="0">��ѡ�����</option>
                        <option value="about">��˾���</option>
                        <option value="product">��Ʒչʾ</option>
                        <option value="news">��������</option>
                        <option value="feedback">��������</option>
                        <option value="service">����֧��</option>
                        <option value="join">���̼���</option>
                        <option value="contact">��ϵ����</option>
                    </select>
                    
                </td>
            </tr>
            <tr style="height:35px; line-height:35px;">
            	<td style="text-align:center; color:#666;">ͼƬ�ϴ�:</td>
                <td>
                	<input type="file" name="p_pic" id="p_pic" style="width:270px;">
                </td>
            </tr>
            <tr style="height:35px; line-height:35px;">
            	<td style="text-align:center; color:#666;">��ز���:</td>
                <td><input type="submit" name="" id="" value="���(A)" class="but_60" onClick="return check()"></td>
            </tr>
        </table>
        <script language="javascript">
	function check()
	{
		var _p_type=form.p_type.value;
		if(_p_type==0)
		{
			alert("��ѡ�����");
			form.p_type.focus();
			return false;
		}
		var _p_pic=form.p_pic.value;
		if(_p_pic=="")
		{
			alert("��ѡ��ͼƬ");
			form.p_pic.focus();
			return false;
		}
	}
</script>