<?php
include ('getConnection.php');
Class Functions
{

     public function Insert_User($Uname,$Fname,$Lname,$Email,$Occ,$Contact,$Address,$Country,$Zip,$Psw)
{
	mysql_query("INSERT INTO user ('$Uname','$Fname','$Lname','$Email','$Occ','$Contact','$Address','$Country','$Zip','$Psw')");
	}
	
	
public function SelectMembersByUserNameAndPassword($User_name, $Psw)
{
     $result = mysql_query("SELECT * FROM user Where email='$User_name' AND password_confirm='$Psw'");
     return $result;
}

public function SelectMembersByUserName($User_name)
{
     $result = mysql_query("SELECT * FROM user Where email='$user_name'");
     return $result;
}
}
?>