<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	$host = "localhost";
	$un = "root";
	$Psw = "";
	$db_name = "yesido_db";
	$tbl_name = "user";
	
	mysql_connect("$host","$un","$Psw") or die("connot connect");
	mysql_select_db("$db_name") or die("connot connect to db");

	$myusername = $_POST['Username'];
	$mypassword = $_POST['Pass'];
	
	$myusername = stripslashes($myusername);
	$mypassword = stripslashes($mypassword);
	$myusername = mysql_real_escape_string($myusername);
	$mypassword = mysql_real_escape_string($mypassword);
	$sql = "SELECT * FROM $tbl_name WHERE Username = '$myusername' AND Pass = '$mypassword'";
	$result = mysql_query($sql);
	$count = mysql_num_rows($result);
	if($count == 1){

		header("location: index.php");
	}else{
		echo "Wrong";
	}

?>
</body>
</html>