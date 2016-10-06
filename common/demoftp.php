<?php
if($_POST['submit']){
	
include_once('ftp.php');


$ftp = new Ftp();

$ftp->connect($config);
//$ftp->upload($file['tmp_name'],$oldfilename);
//$ftp->rename("/yinyong/sirui/upload/videos/temp/123.txt","/yinyong/sirui/upload/videos/temp/456.txt",true);
$ftp->delete_file("/yinyong/sirui/upload/videos/temp/123.txt");
}
?>

<form method="post" action="" enctype="multipart/form-data">
<input type="file" name="file" id="file"/>
<input type="submit" name="submit" value="submit" />
</form>