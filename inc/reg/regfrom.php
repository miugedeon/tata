<table width="630" height="473" border="0" cellpadding="1" cellspacing="0" style="margin-top:10px">
      <form name="formReg" method="post" action="inc/reg/membersavereg.php" onSubmit="return checkreg();">
      <tbody><tr>
                <td width="90" align="right">注册类别：</td>
                <td width="436">
					<select name="sort" style="width:123px;">
					<option value="司机信息">司机信息</option>
					<option value="车辆会员">车辆会员</option>
					<option value="货运公司">货运公司</option>
					<option value="企业会员">企业会员</option>
					</select>
				</td>
              </tr>
              <tr>
                <td width="90" align="right">登录名：</td>
                <td width="436"><input name="MemName" type="text" class="input" id="MemName" size="20" maxlength="16">
                &nbsp;<font color="#CC0000">*</font>&nbsp;使用3位到13位的数字0-9或字母a-z、A-Z字符组合</td>
              </tr>
              <tr>
                <td align="right">注册人姓名：</td>
                <td><input name="RealName" type="text" class="input" id="RealName" size="20" maxlength="50">
                &nbsp;<font color="#CC0000">*</font>为了更好的为您服务，请正确输入您的姓名</td>
              </tr>
              <tr>
                <td align="right">性别：</td>
                <td><input name="Sex" type="radio" value="先生" checked="">先生
                    <input type="radio" name="Sex" value="女士">女士</td>
              </tr>
              <tr>
                <td align="right">设置密码：</td>
                <td><input name="Password" type="password" class="input" id="Password" size="20" maxlength="16">
                &nbsp;<font color="#CC0000">*</font>&nbsp;请选用易记但又不容易被别人猜到的字符</td>
              </tr>
              <tr>
                <td align="right">确定密码：</td>
                <td><input name="vPassword" type="password" class="input" id="vPassword" size="20" maxlength="16">
                &nbsp;<font color="#CC0000">*</font>&nbsp;为了确保您输入的密码正确，请再次输入密码</td>
              </tr>

                <tr><td align="right">公司名称：</td>
                <td><input name="Company" type="text" class="input" id="Company" size="40" maxlength="100"></td>
              </tr>
              <tr>
                <td align="right">注册人地址：</td>
                <td><input name="Address" type="text" class="input" id="Address" size="40" maxlength="100"></td>
              </tr>
              <tr>
                <td align="right">注册人邮编：</td>
                <td><input name="ZipCode" type="text" class="input" id="ZipCode" size="20" maxlength="20"></td>
              </tr>
              <tr>
                <td align="right">注册人电话：</td>
                <td><input name="Telephone" type="text" class="input" id="Telephone" size="20" maxlength="50">
                
                 &nbsp;<font color="#CC0000">*</font>&nbsp;请正确输入您的电话号码, 例如：0760-22635318
                </td>
              </tr>
              <tr>
                <td align="right">公司传真：</td>
                <td><input name="Fax" type="text" class="input" id="Fax" size="20" maxlength="50"></td>
              </tr>
              <tr>
                <td align="right">营业执照号码：</td>
                <td><input name="yy" type="text" class="input" id="yy" size="20" maxlength="50"></td>
              </tr>
              <tr>
                <td align="right">公司电子邮件：</td>
                <td><input name="Email" type="text" class="input" id="Email" size="30" maxlength="50"></td>
              </tr>
              <tr>
                <td align="right">密码答案：</td>
                <td><input name="HomePage" type="text" class="input" id="HomePage" size="30" maxlength="50">&nbsp;<font color="#CC0000">*</font>&nbsp;请务必填写，忘记密码时候要用到此项。</td>
              </tr>
              <tr>
                <td height="30" align="right">&nbsp;</td>
                <td valign="bottom">
				<input type="submit" name="imageField" id="imageField" style="background:url(images/save.jpg);width:50px;" value=""  />
				&nbsp;
				<input type="reset"  name="re" id="re" style="background:url(images/re.jpg);width:50px;" value="" border="0" />				</td>
              </tr>
			
            <script type="text/javascript">
            function checkreg(){
					if (document.formReg.MemName.value == "")     
					  {     
						alert("注册名不能为空.");     
						document.formReg.MemName.focus();     
						return (false);     
					  }    
					  
					if (document.formReg.RealName.value == "")     
					  {     
						alert("注册人姓名不能为空.");     
						document.formReg.RealName.focus();     
						return (false);     
					  }  
					if (document.formReg.Password.value == "")     
					  {     
						alert("密码不能为空.");     
						document.formReg.Password.focus();     
						return (false);     
					  }   
					if (document.formReg.vPassword.value == "")     
					  {     
						alert("确认密码不能为空.");     
						document.formReg.vPassword.focus();     
						return (false);     
					  }   
					if(document.formReg.Password.value != document.formReg.vPassword.value)
					{     
						alert("两次密码不一样");     
						document.formReg.Telephone.focus();     
						return (false);     
					  } 
					if (document.formReg.Telephone.value == "")     
					  {     
						alert("电话不能为空.");     
						document.formReg.Telephone.focus();     
						return (false);     
					  }   					  
					if (document.formReg.HomePage.value == "")     
					  {     
						alert("密保答案不能为空.");     
						document.formReg.HomePage.focus();     
						return (false);     
					  }
			　　
			}
			</script>
            </tbody>
			</form>
			</table>