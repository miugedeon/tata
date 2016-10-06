<?php
	class db
	{
		private $server;//服务器IP
		private $userName;//用户名
		private $userPwd;//密码
		private $database;//数据库
		//初始化函数
		function __construct($server,$userName,$userPwd,$database)
		{
			$this->server=$server;
			$this->userName=$userName;
			$this->userPwd=$userPwd;
			$this->database=$database;
			$this->conn=mysql_connect($this->server,$this->userName,$this->userPwd);
			if($this->conn)
			{
				mysql_select_db($this->database) or die("DataTable Link Error");
			}
			else
			{
				echo "<script language='javascript'>alert('DataBase Link Error')</script>";
			}
		}
		//关闭数据库
		public function Close()
		{
			mysql_close($this->conn);
		}
		//返回执行结果,影响的行数
		public function Execute($sql)
		{
			mysql_query("set names utf8");
		    $query=mysql_query($sql);
			$num=@mysql_num_rows($query);
			return $num;
		}
		//执行一个SQL命令操作
		public function Query($sql)
		{
			mysql_query("set names utf8");
		    return mysql_query($sql);
		}
		//返回一条数据
		public function Row($sql)
		{
			mysql_query("set names utf8");
		    $query=mysql_query($sql);
			return $row=@mysql_fetch_array($query);
		}
		/*
			网站登录程序
			$table 数据表
			$p_username　用户名
			$p_userpwd   密码
			$mysession   前后台session
		*/
		public function login($table,$p_username,$p_userpwd,$mysession,$url)
		{
			$sql="select * from ".$table." where p_username='".$p_username."' and p_userpwd='".md5($p_userpwd)."'";
			$num=$this->Execute($sql);
			if($num==1)
			{
				session_start();
				$_SESSION[$mysession]=$p_username;
				$date=date("Y-m-d h:i:s");  
				$sql="update ".$table." set p_hist=p_hist+1,p_lastdate='".$date."' where p_username='".$p_username."'";
				mysql_query($sql);
				alertUrl("登陆成功",$url);
			}
			else
			{
				alertBack("密码错误，请重新输入");
			}
		}
		//判断用户权限
		public function Admin($p_username,$str,$sql,$url)
		{
			$mysql="select * from p_admin where p_username='".$p_username."'";
			$row=$this->Row($mysql);
			if($row["p_lv"]==1)
			{
				$this->Query($sql);
				alertUrl($str,$url);
			}
			else
			{
				alertBack("权限不够");
			}
		}
		
		public function AdminThenClose($p_username,$str,$sql)
		{
			$mysql="select * from p_admin where p_username='".$p_username."'";
			$row=$this->Row($mysql);
			if($row["p_lv"]==1)
			{
				$this->Query($sql);
				runJs("alert('".$str."')");
				runJs("window.close()");
			}
			else
			{
				alertBack("权限不够");
			}
		}
		
		
		//没有执行SQL语句判断权限
		public function Admin1($p_username)
		{
			$mysql="select * from p_admin where p_username='".$p_username."'";
			$row=$this->Row($mysql);
			if($row["p_lv"]==1)
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}
		//判断用户权限 BACK
		public function AdminBack($p_username,$str,$sql)
		{
			$mysql="select * from p_admin where p_username='".$p_username."'";
			$row=$this->Row($mysql);
			if($row["p_lv"]==1)
			{
				$this->Query($sql);
				alertBack($str);
			}
			else
			{
				alertBack("权限不够");
			}
		}
		
		//新写的类
		
		//
		private $str;
		public static function AboutQuery($table,$p_id,$language='cn')
		{
			$sql="select * from ".$table." where p_id=".$p_id."";
			mysql_query("set names utf8");
			$query=mysql_query($sql);
			$row=mysql_fetch_array($query);
			if($language=='en')            $str=$row["p_content_en"];
			elseif ($language=='cn')       $str=$row["p_content"]; 
			echo $str;
		}
	}
	//error_reporting(0);
	date_default_timezone_set('Asia/Shanghai');
	$d=new db("127.0.0.1","root","123456","trwap");
	//$d=new db("113.10.183.3","trwap_f","tr123456","trwap");  
	//$d=new db("localhost","root","","mls"); 
?>
