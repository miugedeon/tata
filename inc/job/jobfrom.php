<?php
if($_GET['areaID']!='')
	$sid=$_GET['areaID'];
echo $sid;
?>

<table width="720" border="0" cellspacing="0" cellpadding="1">
			<form name="formWrite" method="post" action="inc/job/jobSave.php">
              <tr>
                <td width="184" align="right">职位名称：</td>
                <td width="400">
                	<select name="TalentsName">
				<?php
            	$sql="select * from p_job";
				$query=$d->Query($sql);
				while($row2=mysql_fetch_array($query))
				{
				?>
				<option value="<? echo $row2[p_file2]?>" <?php if($row2["p_id"]==$sid){?>selected="selected"<?php }?>><? echo $row2[p_file2]?></option>
				<?
				}
			    ?>
                	</select>&nbsp;<font color="#CC0000">*</font></td>
              </tr>
              <tr>
                <td align="right">姓　　名：</td>
                <td><input name="Linkman" type="text" class="input" value="" size="20" maxlength="50">
                &nbsp;<font color="#CC0000">*</font></td>
              </tr>
              <tr>
                <td align="right">性　　别：</td>
                <td><input name="Sex" type="radio" value="先生" >先生
                    <input type="radio" name="Sex" value="女士" >女士</td>              </tr>
              <tr>
                <td align="right">出生日期：</td>
                <td><input name="BirthDate" type="text" class="input" id="BirthDate" size="20" maxlength="10">
                  &nbsp;<font color="#CC0000">*</font>&nbsp;格式 1978-08-18</td>
              </tr>
              <tr>
                <td align="right">婚姻状况：</td>
                <td><input name="Marriage" type="radio" value="未婚" checked>未婚
                    <input type="radio" name="Marriage" value="已婚">已婚</td>
              </tr>
              <tr>
                <td align="right">身　　高：</td>
                <td><input name="Stature" type="text" class="input" id="Stature" size="20" maxlength="10">
                &nbsp;<font color="#CC0000">*</font>&nbsp;cm</td>
              </tr>
              <tr>
                <td align="right">户口所在地：</td>
                <td><input name="RegResidence" type="text" class="input" id="RegResidence" size="40" maxlength="100">
                &nbsp;<font color="#CC0000">*</font></td>
              </tr>
              <tr>
                <td align="right">教育经历：</td>
                <td bgcolor="#DDDDDD"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="15%" align="center" bgcolor="#E1EAEE">学历</td>
                    <td width="23%" align="center" bgcolor="#E1EAEE">起止日期</td>
                    <td width="20%" align="center" bgcolor="#E1EAEE">专业名称</td>
                    <td width="20%" align="center" bgcolor="#E1EAEE">证书</td>
                    <td width="22%" align="center" bgcolor="#E1EAEE">就读学校</td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td align="right">&nbsp;</td>
                <td><textarea name="EduResume" rows="6" class="input" style="width:540px;"></textarea></td>
              </tr>
              <tr>
                <td align="right">工作经历：</td>
                <td bgcolor="#DDDDDD"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="25%" align="center" bgcolor="#E1EAEE">起止日期</td>
                      <td width="25%" align="center" bgcolor="#E1EAEE">职位名称</td>
                      <td width="25%" align="center" bgcolor="#E1EAEE">工作内容</td>
                      <td width="25%" align="center" bgcolor="#E1EAEE">就职单位</td>
                      </tr>
                </table></td>
              </tr>
              <tr>
                <td align="right">&nbsp;</td>
                <td><textarea name="JobResume" rows="6" class="input" id="JobResume" style="width:540px;"></textarea></td>
              </tr>
              <tr>
                <td align="right">地　　址：</td>
                <td><input name="Address" type="text" class="input" value="" size="40" maxlength="100">
                &nbsp;<font color="#CC0000">*</font></td>
              </tr>

              <tr>
                <td align="right">电　　话：</td>
                <td><input name="Telephone" type="text" class="input" id="Telephone" value="" size="20" maxlength="50">&nbsp;<font color="#CC0000">*</font></td>
              </tr>

              <tr>
                <td align="right">电子邮箱：</td>
                <td><input name="Email" type="text" class="input" id="Email" value="" size="30" maxlength="50">
                </td>
              </tr>
              <tr>
                <td height="30" align="right">&nbsp;</td>
                <td valign="bottom">
					<input type="image" name="imageField" id="imageField" src="images/save.jpg" />
				&nbsp;
				<input type="image" name="re" id="re"  src='images/re.jpg' border='0' onClick="return resetBtn(this.form);"/>		</td>
              </tr>
			</form>
            <script type="text/javascript">
            function resetBtn(fm){
		   　　 fm.reset();
			　　return false;
			}
			</script>
            </table>