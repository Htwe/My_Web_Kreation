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
	$tbl_name = "sc";
	
	$con=mysql_connect("$host","$un","$Psw");
	if(!$con){
		die('Could not connect to localhost.'.mysql_error());	
	}
	mysql_select_db("$db_name") or die("cannot connect to db");
	
	session_start();
	if(isset($_SESSION['Username'])){
		
		$myusername = $_SESSION['Username'];		
		$quantity = $_POST['quantity'];
		$proCode = $_POST['ProCode'];
		$proPrice = $_POST['ProPrice'];
		$proDesc = $_POST['ProDesc'];
		$proImageName = $_POST['ProImageName'];		
		
		$sql = "SELECT * FROM $tbl_name WHERE Username = '$myusername' AND ProCode = '$proCode'";
		$result = mysql_query($sql);
		if(!$result){
			die('Could not extract the data from sc:'.  mysql_error());	
		}else{
			header ("location: index.php");
		}	
		
		$count = mysql_num_rows($result);
		if($count == 0){
			$sql="INSERT INTO $tbl_name (Username, ProCode, ProDescription, ProImgName, ProPrice, ProQty)
					VALUES ('$myusername', '$proCode', '$proDesc', '$proImageName', '$proPrice', '$quantity')";			
		}else{
			$sql= "UPDATE $tbl_name SET ProQty = ProQty + $quantity WHERE Username = '$myusername' AND ProCode = '$proCode'";
		}		
		$result = mysql_query($sql);
		
		if(!$result){
			die('Could not insert the data:'.  mysql_error());	
		}else{
			header ("location: index.php");
		}		
	}
?>
</body>
</html>