<?php include_once("common/conn.php")?>
<?php include_once("common/str.php")?>
<?php
$down=0;
if(isset($_POST["next"]))
	{
		$sql="select * from p_members where MemName='".$_POST["MemName"]."' and Email='".$_POST["Email"]."' and HomePage='".$_POST["mibao"]."'";
		
		$num=$d->Execute($sql);
	
		if($num>=1)
		{
			$newpw=rand(100000,999999);
			$sql="update p_members set Password=".$newpw." where MemName='".$_POST["MemName"]."'";
			$num=$d->Execute($sql);
			$down=1;
		}
		
		
		
		
	}
	else
	{
		$down=0;
	}
?>
<table width="630" border="0" cellspacing="0" cellpadding="0">
<?php 
if($down==1){
	echo "您的新密码为<span style='color:#f00'>".$newpw."</span>,请牢记！<br>";
	echo "左侧可以尝试登录，请注意选好登录类别。";
}
else
{
?>
			  <form name="form" method="post" action="">
			  
              <tbody><tr>
                <td width="220" height="24" align="right">                
                登&nbsp;录&nbsp;名：       				</td>
                <td width="384"><input name="MemName" type="text" class="input" id="MemName" size="30" maxlength="16"></td>
              </tr>
              <tr>
                <td height="23" align="right">                
                电子邮箱：       				</td>
                <td><input name="Email" type="text" class="input" id="Email" size="30" maxlength="50"></td>
              </tr>
			   <tr>
                <td height="23" align="right">                
                密保答案：       				</td>
                <td><input name="mibao" type="text" class="input" id="mibao" size="30" maxlength="50"></td>
              </tr>
			  <tr>
                <td height="60" colspan="2" align="center"><input name="next" type="submit" class="input" value=" 下一步 " style="background-color:#BCD927; color: #ffffff"></td>
              </tr>
			  </form>
           </tbody>
<?php } ?>
</table>