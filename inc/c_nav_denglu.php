		<?php if($_SESSION['mylogin']!='') 				{				echo "<div class='logined'>欢迎&nbsp;<span>".$_SESSION['mylogin']."</span>&nbsp;登录网站";				echo "<a href='loginout.php' style='margin:30px 10px 0px 10px;color:#f08519;'>退出</a></div>";				}							  else{		?><form name='formLong' method='post' action='inc/reg/mlogin.php'>			<div class='f_leibie'>				类别：				<select name="sort" style="">				<option value="司机信息">司机信息</option>				<option value="车辆会员">车辆会员</option>				<option value="货运公司">货运公司</option>				<option value="企业会员">企业会员</option>				</select>			</div>			<div class='f_yonghu'>用户：<input name="LoginName" type="text" class=""  style=""> </div>			<div class='f_mima'>密码：<input name="LoginPassword" type="password" class=""  style=""></div>			<div class='f_login'><input name="login" type="image" src="images/login.gif"></div>			<div class='f_zhuce'><a href="reg-33.html"><img src="images/reg.gif" border="0"></a></div>			<div style="clear:both;"></div>			<div class='f_wangji'><a href="reg-34.html">忘记密码了吗？</a></div>			<div style="clear:both;"></div></form><?php }?>