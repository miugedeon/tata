<table width="70%" cellpadding="0" cellspacing="1" border="0" class="alltable" style="margin-top:20px;">
            <tr style="height:35px; line-height:35px;">
            	<td width="100" style="text-align:center; color:#666;">图片隶属:</td>
                <td>
                    
                    <select name="p_type" id="p_type">
                    	<option value="0">请选择类别</option>
                        <option value="about">公司简介</option>
                        <option value="product">产品展示</option>
                        <option value="news">新闻中心</option>
                        <option value="feedback">在线留言</option>
                        <option value="service">服务支持</option>
                        <option value="join">招商加盟</option>
                        <option value="contact">联系我们</option>
                    </select>
                    
                </td>
            </tr>
            <tr style="height:35px; line-height:35px;">
            	<td style="text-align:center; color:#666;">图片上传:</td>
                <td>
                	<input type="file" name="p_pic" id="p_pic" style="width:270px;">
                </td>
            </tr>
            <tr style="height:35px; line-height:35px;">
            	<td style="text-align:center; color:#666;">相关操作:</td>
                <td><input type="submit" name="" id="" value="添加(A)" class="but_60" onClick="return check()"></td>
            </tr>
        </table>
        <script language="javascript">
	function check()
	{
		var _p_type=form.p_type.value;
		if(_p_type==0)
		{
			alert("请选择类别");
			form.p_type.focus();
			return false;
		}
		var _p_pic=form.p_pic.value;
		if(_p_pic=="")
		{
			alert("请选择图片");
			form.p_pic.focus();
			return false;
		}
	}
</script>