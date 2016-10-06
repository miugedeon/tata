<table width="100%" height="355" border="0" cellpadding="0" cellspacing="0">
			<form name="submitform" method="post" action="inc/join/joinSave.php" onSubmit="return check();">
              <tr>
                <td width="21%" ><div align="right">物流公司名称：</div></td>
                <td width="79%" >
				<input name="company" type="text" class="input" id="company" size="40" maxlength="100">&nbsp;<font color="#CC0000">*</font></td>
              </tr>
            
              
              <tr>
                <td><div align="right">联系人：</div></td>
                <td><input name="Linkman" id="Linkman" type="text" class="input"  size="40" maxlength="100">&nbsp;<font color="#CC0000">*</font></td>
              </tr>
               <!--   
			   <tr>
                <td><div align="right">物流公司线路：</div></td>
                <td><input name="waylist" id="waylist" type="text" class="input" size="40" maxlength="100">&nbsp;<font color="#CC0000">*</font></td>
              </tr>
			  -->
              <tr>
                <td><div align="right">物流公司电话：</div></td>
                <td><input name="tel" id="tel" type="text" class="input" size="40" maxlength="100">&nbsp;<font color="#CC0000">*</font></td>
              </tr>
              <tr>
                <td><div align="right">物流公司地址：</div></td>
                <td><input name="Address" type="text" class="input"  size="40" maxlength="100">
                          &nbsp;</td>
              </tr>
         
        
              <tr>
                <td><div align="right">物流公司email：</div></td>
                <td><input name="Email" type="text" class="input" id="Email"  size="40" maxlength="100"> &nbsp;</td>
              </tr>
                <tr>
                <td height="87"><div align="right">备&nbsp;注：</div></td>
                <td>
				<textarea name="Content" cols="50" rows="6" class="input"></textarea>&nbsp;</td>
              </tr>
              <tr>
                <td height="40"><div align="right"></div></td>
                <td>
				<input type="image" name="imageField" id="imageField" src="images/save.jpg" />
				&nbsp;
				<input type="image" name="re" id="re"  src='images/re.jpg' border='0' onClick="return resetBtn(this.form);"/>				</td>
              </tr>
			</form>
 </table>
 <SCRIPT language=JavaScript>   
	//验证电子邮件.

		
  
function isEmail(vEMail)     
{     
    var regInvalid=/(@.*@)|(\.\.)|(@\.)|(\.@)|(^\.)/;     
    var regValid=/^.+\@(\[?)[a-zA-Z0-9\-\.]+\.([a-zA-Z]{2,3}|[0-9]{1,3})(\]?)$/;     
    return (!regInvalid.test(vEMail)&&regValid.test(vEMail));     
}     
function check()     
{  

  if (document.submitform.company.value == "")     
  {     
    alert("物流公司不能为空.");     
    document.submitform.company.focus();     
    return (false);     
  }    
    
  if (document.submitform.Linkman.value == "")     
  {     
    alert("联系人不能为空.");     
    document.submitform.Linkman.focus();     
    return (false);     
  }     


   if (document.submitform.tel.value == "")     
  {     
    alert("电话不能为空.");     
    document.submitform.tel.focus();     
    return (false);     
  }    
  

}     

</SCRIPT> 