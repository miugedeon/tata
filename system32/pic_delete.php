<?php
	ini_set('max_execution_time', '3600');
	include_once("config.php");
	$p_id=$_GET["p_id"];
	$atction=$_GET["atction"];
	$language=$_GET["language"];
	switch($atction)
	{
		case "product":
			$pic=$_GET["pic"];
			if($pic==1)
			{
				$state=$d->Admin1($_SESSION["admin"]);
				if($state==1)
				{
					$sql="select * from p_product where p_id=".$p_id;
					$query=$d->Query($sql);
					$row=mysql_fetch_array($query);
					if(!empty($row["p_pic1"]))
					{
						if(file_exists($row["p_pic1"]))
						{
							unlink($row["p_pic1"]);
						}
					}
					$sql="update p_product set p_pic1='' where p_id=".$p_id;
					$d->Query($sql);
					url("product_update.php?p_id=".$p_id."&language=".$language."");
				}
				else
				{
					alertBack("权限不够");
				}
			}
			if($pic==2)
			{
				$state=$d->Admin1($_SESSION["admin"]);
				if($state==1)
				{
					$sql="select * from p_product where p_id=".$p_id;
					$query=$d->Query($sql);
					$row=mysql_fetch_array($query);
					if(!empty($row["p_pic2"]))
					{
						if(file_exists($row["p_pic2"]))
						{
							unlink($row["p_pic2"]);
						}
					}
					$sql="update p_product set p_pic2='' where p_id=".$p_id;
					$d->Query($sql);
					url("product_update.php?p_id=".$p_id."&language=".$language."");
				}
				else
				{
					alertBack("权限不够");
				}
			}
			if($pic==3)
			{
				$state=$d->Admin1($_SESSION["admin"]);
				if($state==1)
				{
					$sql="select * from p_product where p_id=".$p_id;
					$query=$d->Query($sql);
					$row=mysql_fetch_array($query);
					if(!empty($row["p_pic3"]))
					{
						if(file_exists($row["p_pic3"]))
						{
							unlink($row["p_pic3"]);
						}
					}
					$sql="update p_product set p_pic3='' where p_id=".$p_id;
					$d->Query($sql);
					url("product_update.php?p_id=".$p_id."&language=".$language."");
				}
				else
				{
					alertBack("权限不够");
				}
			}
			
			if($pic==4)
			{
				$state=$d->Admin1($_SESSION["admin"]);
				if($state==1)
				{
					$sql="select * from p_product where p_id=".$p_id;
					$query=$d->Query($sql);
					$row=mysql_fetch_array($query);
					if(!empty($row["p_pic4"]))
					{
						if(file_exists($row["p_pic4"]))
						{
							unlink($row["p_pic4"]);
						}
					}
					$sql="update p_product set p_pic4='' where p_id=".$p_id;
					$d->Query($sql);
					url("product_update.php?p_id=".$p_id."&language=".$language."");
				}
				else
				{
					alertBack("权限不够");
				}
			}
			
			
		break;
		
		
		case "indexPic":
			$pic=$_GET["pic"];
			
			if($pic==2)
			{
				$state=$d->Admin1($_SESSION["admin"]);
				if($state==1)
				{
					$sql="select * from p_indexpic where p_id=".$p_id;
					$query=$d->Query($sql);
					$row=mysql_fetch_array($query);
					if(!empty($row["p_pic1"]))
					{
						if(file_exists($row["p_pic1"]))
						{
							unlink($row["p_pic1"]);
						}
					}
					if(!empty($row["p_pic2"]))
					{
						if(file_exists($row["p_pic2"]))
						{
							unlink($row["p_pic2"]);
						}
					}
					$sql="update p_indexpic set p_pic1='',p_pic2='' where p_id=".$p_id;
					$d->Query($sql);
					url("indexPic_update.php?p_id=".$p_id."&language=".$language."");
				}
				else
				{
					alertBack("权限不够");
				}
			}
			if($pic==3)
			{
				$state=$d->Admin1($_SESSION["admin"]);
				if($state==1)
				{
					$sql="select * from p_product where p_id=".$p_id;
					$query=$d->Query($sql);
					$row=mysql_fetch_array($query);
					if(!empty($row["p_pic3"]))
					{
						if(file_exists($row["p_pic3"]))
						{
							unlink($row["p_pic3"]);
						}
					}
					$sql="update p_indexpic set p_pic3='' where p_id=".$p_id;
					$d->Query($sql);
					url("indexPic_update.php?p_id=".$p_id."&language=".$language."");
				}
				else
				{
					alertBack("权限不够");
				}
			}
						
			
		break;
		
		
		case "news":
			$state=$d->Admin1($_SESSION["admin"]);
			if($state==1)
			{
				$sql="select * from p_news where p_id=".$p_id;
				$query=$d->Query($sql);
				$row=mysql_fetch_array($query);
				if(!empty($row["p_pic"]))
				{
					if(file_exists($row["p_pic"]))
					{
						unlink($row["p_pic"]);
					}
				}
				$sql="update p_news set p_pic='' where p_id=".$p_id;
				$d->Query($sql);
				url("news_update.php?p_id=".$p_id."&language=".$language."");
			}
			else
			{
				alertBack("权限不够");
			}
		break;
		
		
		case "club":
			$state=$d->Admin1($_SESSION["admin"]);
			if($state==1)
			{
				$sql="select * from p_club where p_id=".$p_id;
				$query=$d->Query($sql);
				$row=mysql_fetch_array($query);
				if(!empty($row["p_smallpic"]))
				{
					if(file_exists($row["p_smallpic"]))
					{
						unlink($row["p_smallpic"]);
					}
				}
				$sql="update p_club set p_smallpic='' where p_id=".$p_id;
				$d->Query($sql);
				echo "<script language='javascript'>location.href='club_update.php?p_id=".$p_id."&language=".$language."&p_typelist=club'</script>";
			}
			else
			{
				alertBack("权限不够");
			}
		break;
		
		case "case":
			$pic=$_GET["pic"];
			if($pic==1)
			{
				$state=$d->Admin1($_SESSION["admin"]);
				if($state==1)
				{
					$sql="select * from p_case where p_id=".$p_id;
					$query=$d->Query($sql);
					$row=mysql_fetch_array($query);
					if(!empty($row["p_smallpic"]))
					{
						if(file_exists($row["p_smallpic"]))
						{
							unlink($row["p_smallpic"]);
						}
					}
					$sql="update p_case set p_smallpic='' where p_id=".$p_id;
					$d->Query($sql);
					echo "<script language='javascript'>location.href='case_update.php?p_id=".$p_id."&language=".$language."&p_typelist=case'</script>";
				}
				else
				{
					alertBack("权限不够");
				}
			}
			if($pic==2)
			{
				$state=$d->Admin1($_SESSION["admin"]);
				if($state==1)
				{
					$sql="select * from p_case where p_id=".$p_id;
					$query=$d->Query($sql);
					$row=mysql_fetch_array($query);
					if(!empty($row["p_bigpic"]))
					{
						if(file_exists($row["p_bigpic"]))
						{
							unlink($row["p_bigpic"]);
						}
					}
					$sql="update p_case set p_bigpic='' where p_id=".$p_id;
					$d->Query($sql);
					echo "<script language='javascript'>location.href='case_update.php?p_id=".$p_id."&language=".$language."&p_typelist=case'</script>";
				}
				else
				{
					alertBack("权限不够");
				}
			}
			
			if($pic==3)
			{
				$state=$d->Admin1($_SESSION["admin"]);
				if($state==1)
				{
					$sql="select * from p_case where p_id=".$p_id;
					$query=$d->Query($sql);
					$row=mysql_fetch_array($query);
					if(!empty($row["p_pic1"]))
					{
						if(file_exists($row["p_pic1"]))
						{
							unlink($row["p_pic1"]);
						}
					}
					$sql="update p_case set p_pic1='' where p_id=".$p_id;
					$d->Query($sql);
					echo "<script language='javascript'>location.href='case_update.php?p_id=".$p_id."&language=".$language."&p_typelist=case'</script>";
				}
				else
				{
					alertBack("权限不够");
				}
			}
			
			
			if($pic==4)
			{
				$state=$d->Admin1($_SESSION["admin"]);
				if($state==1)
				{
					$sql="select * from p_case where p_id=".$p_id;
					$query=$d->Query($sql);
					$row=mysql_fetch_array($query);
					if(!empty($row["p_pic2"]))
					{
						if(file_exists($row["p_pic2"]))
						{
							unlink($row["p_pic2"]);
						}
					}
					$sql="update p_case set p_pic2='' where p_id=".$p_id;
					$d->Query($sql);
					echo "<script language='javascript'>location.href='case_update.php?p_id=".$p_id."&language=".$language."&p_typelist=case'</script>";
				}
				else
				{
					alertBack("权限不够");
				}
			}
			
			
			if($pic==5)
			{
				$state=$d->Admin1($_SESSION["admin"]);
				if($state==1)
				{
					$sql="select * from p_case where p_id=".$p_id;
					$query=$d->Query($sql);
					$row=mysql_fetch_array($query);
					if(!empty($row["p_pic3"]))
					{
						if(file_exists($row["p_pic3"]))
						{
							unlink($row["p_pic3"]);
						}
					}
					$sql="update p_case set p_pic3='' where p_id=".$p_id;
					$d->Query($sql);
					echo "<script language='javascript'>location.href='case_update.php?p_id=".$p_id."&language=".$language."&p_typelist=case'</script>";
				}
				else
				{
					alertBack("权限不够");
				}
			}
			
			
			
			if($pic==6)
			{
				$state=$d->Admin1($_SESSION["admin"]);
				if($state==1)
				{
					$sql="select * from p_case where p_id=".$p_id;
					$query=$d->Query($sql);
					$row=mysql_fetch_array($query);
					if(!empty($row["p_pic4"]))
					{
						if(file_exists($row["p_pic4"]))
						{
							unlink($row["p_pic4"]);
						}
					}
					$sql="update p_case set p_pic4='' where p_id=".$p_id;
					$d->Query($sql);
					//url("case_update.php?p_id=".$p_id."&language=".$language."&p_typelist='case'");
					echo "<script language='javascript'>location.href='case_update.php?p_id=".$p_id."&language=".$language."&p_typelist=case'</script>";
				}
				else
				{
					alertBack("权限不够");
				}
			}
			
			
		break;
		
		case "fitting":
			$pic=$_GET["pic"];
			if($pic==1)
			{
				$state=$d->Admin1($_SESSION["admin"]);
				if($state==1)
				{
					$sql="select * from p_fitting where p_id=".$p_id;
					$query=$d->Query($sql);
					$row=mysql_fetch_array($query);
					if(!empty($row["p_pic1"]))
					{
						if(file_exists($row["p_pic1"]))
						{
							unlink($row["p_pic1"]);
						}
					}
					$sql="update p_fitting set p_pic1='' where p_id=".$p_id;
					$d->Query($sql);
					url("fitting_update.php?p_id=".$p_id."&language=".$language."");
				}
				else
				{
					alertBack("权限不够");
				}
			}
			if($pic==2)
			{
				$state=$d->Admin1($_SESSION["admin"]);
				if($state==1)
				{
					$sql="select * from p_fitting where p_id=".$p_id;
					$query=$d->Query($sql);
					$row=mysql_fetch_array($query);
					if(!empty($row["p_pic2"]))
					{
						if(file_exists($row["p_pic2"]))
						{
							unlink($row["p_pic2"]);
						}
					}
					$sql="update p_fitting set p_pic2='' where p_id=".$p_id;
					$d->Query($sql);
					url("fitting_update.php?p_id=".$p_id."&language=".$language."");
				}
				else
				{
					alertBack("权限不够");
				}
			}
			
		break;
		
		case "contry":
			$pic=$_GET["pic"];
			if($pic==1)
			{
				$state=$d->Admin1($_SESSION["admin"]);
				if($state==1)
				{
					$sql="select * from p_contry where p_id=".$p_id;
					$query=$d->Query($sql);
					$row=mysql_fetch_array($query);
					if(!empty($row["p_pic1"]))
					{
						if(file_exists($row["p_pic1"]))
						{
							unlink($row["p_pic1"]);
						}
					}
					$sql="update p_contry set p_pic1='' where p_id=".$p_id;
					$d->Query($sql);
					url("contry_update.php?p_id=".$p_id."&language=".$language."");
				}
				else
				{
					alertBack("权限不够");
				}
			}
			if($pic==2)
			{
				$state=$d->Admin1($_SESSION["admin"]);
				if($state==1)
				{
					$sql="select * from p_contry where p_id=".$p_id;
					$query=$d->Query($sql);
					$row=mysql_fetch_array($query);
					if(!empty($row["p_pic2"]))
					{
						if(file_exists($row["p_pic2"]))
						{
							unlink($row["p_pic2"]);
						}
					}
					$sql="update p_contry set p_pic2='' where p_id=".$p_id;
					$d->Query($sql);
					url("contry_update.php?p_id=".$p_id."&language=".$language."");
				}
				else
				{
					alertBack("权限不够");
				}
			}
			
		break;
		
		
		case "flink":
			$pic=$_GET["pic"];
			if($pic==1)
			{
				$state=$d->Admin1($_SESSION["admin"]);
				if($state==1)
				{
					$sql="select * from p_flink where p_id=".$p_id;
					$query=$d->Query($sql);
					$row=mysql_fetch_array($query);
					if(!empty($row["p_pic1"]))
					{
						if(file_exists($row["p_pic1"]))
						{
							unlink($row["p_pic1"]);
						}
					}
					$sql="update p_flink set p_pic1='' where p_id=".$p_id;
					$d->Query($sql);
					url("flink_update.php?p_id=".$p_id."&language=".$language."");
				}
				else
				{
					alertBack("权限不够");
				}
			}
						
		break;
		
		
		
		case "shop":
			$pic=$_GET["pic"];
			if($pic==1)
			{
				$state=$d->Admin1($_SESSION["admin"]);
				if($state==1)
				{
					$sql="select * from p_shop where p_id=".$p_id;
					$query=$d->Query($sql);
					$row=mysql_fetch_array($query);
					if(!empty($row["p_piclink"]))
					{
						if(file_exists($row["p_piclink"]))
						{
							unlink($row["p_piclink"]);
						}
					}
					$sql="update p_shop set p_piclink='' where p_id=".$p_id;
					$d->Query($sql);
					url("shop_update.php?p_id=".$p_id."&language=".$language."");
				}
				else
				{
					alertBack("权限不够");
				}
			}
						
		break;
		
		
		case "video":
			$pic=$_GET["pic"];
			if($pic==1)
			{
				$state=$d->Admin1($_SESSION["admin"]);
				if($state==1)
				{
					$sql="select * from p_video where p_id=".$p_id;
					$query=$d->Query($sql);
					$row=mysql_fetch_array($query);
					if(!empty($row["p_pic"]))
					{
						if(file_exists($row["p_pic"]))
						{
							unlink($row["p_pic"]);
						}
					}
					$sql="update p_video set p_pic='' where p_id=".$p_id;
					$d->Query($sql);
					url("video_update.php?p_id=".$p_id."&language=".$language."");
				}
				else
				{
					alertBack("权限不够");
				}
			}
			if($pic==2)
			{
				$state=$d->Admin1($_SESSION["admin"]);
				if($state==1)
				{
					$sql="select * from p_video where p_id=".$p_id;
					$query=$d->Query($sql);
					$row=mysql_fetch_array($query);
					if(!empty($row["p_filepath"]))
					{
						//视频HTTP方式上传
						if(file_exists($row["p_filepath"]))
						{
							unlink($row["p_filepath"]);
						}
						
						//视频FTP方式上传
						/*
						include_once("../common/ftp.php");
						$ftp=new Ftp();
						$ftp->connect($config);
						$delfilename="/yinyong/sirui/".substr($row['p_filepath'],3);
						$ftp->delete_file($delfilename);
						$ftp->close();
						*/
					}
					$sql="update p_video set p_filepath='' where p_id=".$p_id;
					$d->Query($sql);
					url("video_update.php?p_id=".$p_id."&language=".$language."");
				}
				else
				{
					alertBack("权限不够");
				}
			}
			
		break;
		
		
		
		
		default:
		break;
	}
	
?>