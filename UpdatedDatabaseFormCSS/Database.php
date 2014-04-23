<?php
// Connect to the Localhost
$link = mysql_connect("localhost","root","");

// Check it's connect to the Localhost or not
if(!$link){
	echo "Database Connection Fail! Error: ".mysql_error()."\r\n";
}

// Creating Database
$sql = "CREATE DATABASE yesido_db";

//Check the Database Creation is successful or not
if(mysql_query($sql,$link)){
	echo "Database Creation is Successful!!\r\n";
}else{
	echo "Database Creation is Fail!! Error:".mysql_error()."\r\n";
}

// Select the Database
$sql = mysql_select_db("yesido_db");

// Create User Table
$sql = "CREATE TABLE User(
		Username CHAR(80) NOT NULL,
		FName CHAR(15) NOT NULL,
		LName CHAR(15) NOT NULL,
		Email CHAR(80) CHARACTER SET utf8 NOT NULL,
		Occupation CHAR(30) NOT NULL,
		Contact CHAR(10),
		Address CHAR(200),
		Country CHAR(30),
		Zip CHAR(10),
		Pass CHAR(20) CHARACTER SET utf8 NOT NULL,
		PRIMARY KEY(Username))";
		
// Check Table Creation is successful or not
if(mysql_query($sql,$link)){
	echo "User Table Creation is Successful!!\r\n";
}else{
	echo "User Table is Fail!! Error:".mysql_error($link)."\r\n";
}
// Hash the Password
$sql = "UPDATE User SET `Pass` = PASSWORD (`Pass`) ";
// Check hash password is successful or not
if (mysql_query($sql,$link)){
	echo "User Table Password hide successful!!\r\n";
}else{
	echo "User Table Password hide Fail!!! Error: ".mysql_error($link)."\r\n";
}

// Create Product Table
$sql = "CREATE TABLE Product(
		ProCode CHAR(10) NOT NULL,
		ProType CHAR(15) NOT NULL,
		ProDescription CHAR(250) NOT NULL,
		ProPrice DECIMAL(5,2) NOT NULL,
		ProImg BLOB NOT NULL,
		PRIMARY KEY(ProCode))";
		
// Check Table Creation is successful or not
if(mysql_query($sql,$link)){
	echo "Product Table Creation is Successful!!\r\n";
}else{
	echo "Product Table is Fail!! Error:".mysql_error($link)."\r\n";
}

// Create Delivery Table
$sql = "CREATE TABLE Delivery(
		DeliveryID CHAR(10) NOT NULL,
		Username CHAR(10) NOT NULL,
		DeliveryDate DATE NOT NULL,
		DeliveryTime TIME NOT NULL,
		Addr CHAR(250) NOT NULL,
		PRIMARY KEY(DeliveryID),
		FOREIGN KEY(Username) REFERENCES User(Username))";
		
// Check Table Creation is successful or not
if(mysql_query($sql,$link)){
	echo "Delivery Table Creation is Successful!!\r\n";
}else{
	echo "Delivery Table is Fail!! Error:".mysql_error($link)."\r\n";
}

// Create Delivery Detail Table
$sql = "CREATE TABLE DeliveryDetail(
		DeliveryID CHAR(10) NOT NULL,
		ProCode CHAR(10) NOT NULL,
		TotalPrice DECIMAL(9,2) NOT NULL,
		PRIMARY KEY(DeliveryID,ProCode),
		FOREIGN KEY(DeliveryID) REFERENCES Delivery(DeliveryID),
		FOREIGN KEY(ProCode) REFERENCES Product(ProCode))";
		
// Check Table Creation is successful or not
if(mysql_query($sql,$link)){
	echo "Delivery  Detail Table Creation is Successful!!\r\n";
}else{
	echo "Delivery Detail Table is Fail!! Error:".mysql_error($link)."\r\n";
}

mysql_close($link);
?>