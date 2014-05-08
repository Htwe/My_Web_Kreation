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
	
	mysql_select_db("$db_name") or die("connot connect to db");
	
	session_start();
	if(isset($_SESSION['Username'])){
	
	$myusername = $_SESSION['Username'];
	
	$sql = "DELETE FROM $tbl_name WHERE Username ='$myusername'";
	$result = mysql_query($sql);
	
	if(!$result){
			die('Could not delete the data:'.  mysql_error());	
		}else{
			header ("location: index.php");
		}	
	}
?>