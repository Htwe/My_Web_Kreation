<?php
	//Connect to database
	$link = mysql_connect("localhost","root","");
	if (!$link){
		echo "Yes I Do! Database connection fail! Error: ".mysql_error()."\r\n"; //Error Message
	}
	// Create yesido Database
	$mysql = "CREATE DATABASE yesido_db";
	
	//Find Error!
	if (mysql_query($mysql,$link)){
		echo "Database Creation Successful!!!\r\n";
	}else{
		echo "Database Creation Fail!! Error: ".mysql_error()."\r\n";
	}
	
	//Select the existing database
	$mysql = mysql_select_db("yesido_db");
	
	//Create Customer Table
	$mysql = "CREATE TABLE user(
			Username CHAR(10) NOT NULL,
			FName CHAR(50) NOT NULL,
			LName CHAR(50) NOT NULL,
			Email CHAR(50) CHARACTER SET utf8 NOT NULL,
			Occupation CHAR(30) NOT NULL,
			Addr CHAR(70) NOT NULL, 
			Pass CHARCTER SET utf8 NOT NULL,
			PRIMARY KEY(Username))";
			
	//Check table creation is successful or not
	if(mysql_query($mysql,$link)){
		echo "User Table Creation Successful!! \r\n";
	}else{
		echo "User Table Creation Fail!! Error:".mysql_error($link)."\r\n";
	}
	
	//Hash the password for User Table
	$mysql = "UPDATE user
			`Pass` = PASSWORD (`Pass`)";
			
	//Hashing Successful or not
	if(mysql_query($mysql,$link)){
		echo "Password Hashing Successful!! \r\n";
	}else{
		echo "Password Hashing Fail!!".mysql_error($link)."\r\n";
			
	//Create Product Table
	$mysql = "CREATE TABLE product(
			ProID INT NOT NULL AUTO_INCREMENT,
			ProCode CHAR(10) NOT NULL,
			ProType CHAR(10) NOT NULL,
			ProDescritpion CHAR(150) NOT NULL,
			ProPrice DECIMAL(5,2) NOT NULL,
			ProImg BOLB NOT NULL, 
			PRIMARY KEY (ProID))";
	
	//Check table creation is successful or not	
	if (mysql_query ($mysql,$link)){
		echo "Product Table Creation Successful!! \r\n";
	}else{
		echo "Product Table Creation Failure!!".mysql_error($link)."\r\n";
	}
	
	//Create Shopping Cart
	$mysql = "CREATE TABLE ShoppingCart(
			SCID INT NOT NULL AUTO_INCREMENT,
			Username CHAR(10) NOT NULL,
			Addr CHAR(70) NOT NULL,
			ProCode CHAR(10) NOT NULL,
			ProPrice DECIMAL(5,2) NOT NULL,
			PRIMARY KEY (SCID),
			PRIMARY KEY (Username),
			PRIMARY KEY (ProCode),
			FOREGIN KEY (Username) REFERENCES user(Username),
			FOREGIN KEY (ProCode) REFERENCES Product(ProCode)
			)";
	
	//Check table creation is successful or not		
	if (mysql_query ($mysql,$link)){
		echo "Shopping Cart Table Creation Successful!! \r\n";
	}else{
		echo "Shopping Cart Table Creation Failure!!".mysql_error($link)."\r\n";
	}
	
	//Create Favorite Table 
	$mysql = "CREATE TABLE Favorite(
			UserID CHAR(10) NOT NULL, 
			ProID CHAR(10) NOT NULL,
			PRIMARY KEY(UserID),
			PRIMARY KEY(ProID),
			FOREIGN KEY(UserID) REFERENCES User(UserID),
			FOREIGN KEY(ProID) REFERENCES Product(ProID))";
	
	//Check table creation is successful or not		
	if (mysql_query ($mysql,$link)){
		echo "Favorite Table Creation Successful!! \r\n";
	}else{
		echo "Favorite Table Creation Failure!!".mysql_error($link)."\r\n";
	}
	
	//Create Delivery Table
	$mysql = "CREATE TABLE Delivery(
			DelID CHAR(10) NOT NULL,
			SCID CHAR(10) NOT NULL,
			DelTime time NOT NULL,
			DelDate date NOT NULL,
			Location CHAR(70) NOT NULL,
			PRIMARY KEY(DelID),
			FOREIGN KEY(SCID) PEFERENCES Delivery(SCID))";
	
	//Check table creation is successful or not	
	if (mysql_query ($mysql,$link)){
		echo "Delivery Table Creation Successful!! \r\n";
	}else{
		echo "Delivery Table Creation Failure!!".mysql_error($link)."\r\n";
	}
	
mysql_close($link);
?>