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
$sql = "CREATE TABLE user(
		Username CHAR(15) NOT NULL,
		FName CHAR(15) NOT NULL,
		LName CHAR(15) NOT NULL,
		Email CHAR(30) CHARACTER SET utf8 NOT NULL,
		Occupation CHAR(30) NULL,
		Contact CHAR(10) NULL,
		Address CHAR(200) NULL,
		Country CHAR(30) NULL,
		Postal CHAR(6) NULL,
		Pass CHAR(15) CHARACTER SET utf8 NOT NULL,
		PRIMARY KEY(Username))";
		
// Check Table Creation is successful or not
if(mysql_query($sql,$link)){
	echo "User Table Creation is Successful!!\r\n";
}else{
	echo "User Table is Fail!! Error:".mysql_error($link)."\r\n";
}
// Hash the Password
//$sql = "UPDATE User SET `Pass` = PASSWORD (`Pass`) ";
// Check hash password is successful or not
//if (mysql_query($sql,$link)){
//	echo "User Table Password hide successful!!\r\n";
//}else{
//	echo "User Table Password hide Fail!!! Error: ".mysql_error($link)."\r\n";
//}

// Create Product Table
$sql = "CREATE TABLE product(
		ProCode CHAR(10) NOT NULL,
		ProType CHAR(15) NOT NULL,
		ProDescription TINYTEXT NOT NULL,
		ProPrice DECIMAL(7,2) NOT NULL,
		ProImgName VARCHAR(60) NOT NULL,
		PRIMARY KEY(ProCode))";
		
// Check Product Table Creation is successful or not
if(mysql_query($sql,$link)){
	echo "Product Table Creation is Successful!!\r\n";
}else{
	echo "Product Table is Fail!! Error:".mysql_error($link)."\r\n";
}

//Inserting dump data into register table
$sql = "INSERT INTO Product (`ProCode`, `ProType`, `ProDescription`, `ProPrice`,`ProImgName`) VALUES
('P0001', 'Wedding Dress', 'Wedding dress style1', '1122','dress_1.jpg'),
('P0002', 'Wedding Dress', 'Wedding dress style2', '1085','dress_2.jpg'),
('P0003', 'Wedding Dress', 'Wedding dress style3', '1085','dress_3.jpg'),
('P0004', 'Wedding Dress', 'Wedding dress style4', '1010','dress_4.jpg'),
('P0005', 'Wedding Dress', 'Wedding dress style5', '1085','dress_5.jpg'),
('P0006', 'Wedding Dress', 'Wedding dress style6', '935','dress_6.jpg')";

/*
('P0049', 'Veils', 'Wedding Veil Fingertip Length', '44','veil_1.jpg'),
('P0050', 'Veils', 'Wedding Veil, White Ivory Veil', '30','veil_2.jpg'),
('P0051', 'Veils', 'Bridal Veil, Traditional Veil, Illusion Veil', '130','veil_3.jpg'),
('P0052', 'Veils', 'Bridal Veil Wedding Long Lace edge Mantilla', '58','veil_4.jpg'),
('P0053', 'Veils', 'Wedding Veil, Ivory Cathedral length Lace Mantilla Bridal Veil', '340','veil_5.jpg'),
('P0054', 'Veils', 'Wedding Veil with Sky blue flower edge', '49','veil_6.jpg'),
('P0055', 'Headpieces', 'Pearl Flower Bridal Comb, Bridal hair comb, Wedding Hair Accessories', '50','headpiece_1.jpg'),
('P0056', 'Headpieces', 'Vintage Style Bridal Hair Comb, Crystal Wedding Hair Comb', '110','headpiece_2.jpg'),
('P0057', 'Headpieces', 'Rhinestone Crystal Headband, Bridal Headpiece', '75','headpiece_3.jpg'),
('P0058', 'Headpieces', 'Traditional Flower Headpiece, Wedding Headpiece', '176','headpiece_4.jpg'),
('P0059', 'Headpieces', 'Wedding Headband, Porcelain Flowers', '76','headpiece_5.jpg'),
('P0060', 'Headpieces', 'Bohemian Bridal Halo, Boho Bridal Headpiece', '235','headpiece_6.jpg'),
('P0061', 'Jewellery', 'Lovely Ribbon with Perl jewellery set', '560','jewellery_1.jpg'),
('P0062', 'Jewellery', 'Crystal Shinny Flower Pattern Jewellery Set', '670','jewellery_2.jpg'),
('P0063', 'Jewellery', 'While Flower Jewellery Set', '780','jewellery_3.jpg'),
('P0064', 'Jewellery', 'Ivory Pearl Jewellery Set', '880','jewellery_4.jpg'),
('P0065', 'Jewellery', 'White Diamond Jewellery Set', '980','jewellery_5.jpg'),
('P0066', 'Jewellery', 'Crystal White Rhinestone Jewellery Set', '600','jewellery_6.jpg'),
('P0067', 'Gloves', 'Bridal Rhinestone Gloves, Formal Lace Gloves', '58','glove_1.jpg'),
('P0068', 'Gloves', 'Bridal Gloves, Long Traditional Wedding Gloves', '65','glove_2.jpg'),
('P0069', 'Gloves', 'Ivory Lace Bridal gloves', '45','glove_3.jpg'),
('P0070', 'Gloves', 'Bridal Victorian lace cuffs bridal cuffs wedding gloves', '45','glove_4.jpg'),
('P0071', 'Gloves', 'Wedding Gloves, Ivory Ribbon Gloves', '88','glove_5.jpg'),
('P0072', 'Gloves', 'Bridal Gloves Lace Gloves', '43','glove_6.jpg'),
('P0073', 'Garter', 'Wedding Garter, Ivory Ribbon Garter', '44','garter_1.jpg'),
('P0074', 'Garter', 'Wedding Garter Set, Ivory Flower Garter Set', '50','garter_2.jpg'),
('P0075', 'Garter', 'Wedding Garter-Bridal Garder-Crystal Rhinestone and Pearl Garter', '30','garter_3.jpg'),
('P0076', 'Garter', 'Wedding Garter, Personalize Wedding Garter Set', '30','garter_4.jpg'),
('P0077', 'Garter', 'Wedding Garter Set in Classical Garter Set', '51','garter_5.jpg'),
('P0078', 'Garter', 'Wedding Garter Set, White Stretch Lace Bridal Garter Set with Classic Style', '37','garter_6.jpg')";
*/

if (mysql_query($sql,$link)){
echo "Dump Data Inserted  Into Register Table Successfully\r\n";
}else{
echo "Inserting Data Error: " . mysql_error($link)."\r\n";
}

// Create Shopping Cart Table
 $sql = "CREATE TABLE sc(
		ShoppingID INT(20) NOT NULL AUTO_INCREMENT,
		Username CHAR(15) NOT NULL,
		ProCode CHAR(10) NOT NULL,
		ProDescription TINYTEXT NOT NULL,
		ProImgName VARCHAR(60) NOT NULL,
		ProPrice DECIMAL(7,2) NOT NULL,
		ProQty INT(3) NOT NULL,
		PRIMARY KEY(ShoppingID,Username,ProCode),
		FOREIGN KEY(Username) REFERENCES user(Username),
		FOREIGN KEY(ProCode) REFERENCES product(ProCode))";
		
// Check Shopping Cart Table Creation is successful or not
if(mysql_query($sql,$link)){
	echo "Shopping Cart Table Creation is Successful!!\r\n";
}else{
	echo "Shopping Cart Table is Fail!! Error:".mysql_error($link)."\r\n";
}

// Create Delivery Table
$sql = "CREATE TABLE Delivery(
		DeliveryID INT(11) NOT NULL AUTO_INCREMENT,
		Username CHAR(15) NOT NULL,			
		PhNo INT(15) NOT NULL,
		Email CHAR(50) CHARACTER SET utf8 NOT NULL,
		StreetNo VARCHAR(15) NOT NULL,
		Building VARCHAR(15) NOT NULL,
		City CHAR(15) NOT NULL,
		Postal INT(6) NOT NULL,
		DeliveryDate DATE NOT NULL,
		DeliveryTime TIME NOT NULL,
		PRIMARY KEY(DeliveryID),
		FOREIGN KEY(Username) REFERENCES user(Username))";
		
		
// Check Delivery Table Creation is successful or not
if(mysql_query($sql,$link)){
	echo "Delivery Table Creation is Successful!!\r\n";
}else{
	echo "Delivery Table is Fail!! Error:".mysql_error($link)."\r\n";
}

// Coming Up Next..... 
// Dump Data!!!!

// Dump Data for the Table!!!

// Insert User Dump Data
$sql = "INSERT INTO user (`Username`,`FName`,`LName`,`Email`,`Occupation`,`Contact`,`Address`,`Country`,`Postal`,`Pass`)
		VALUES ('samyao','Sam','Yao','samyao@gmail.com','Student','82111111','105 Ang Mo Kio Ave4','SG','560105','samyao123'),
				('ivoryhae','Ivory','Hae','ivoryhae@gmail.com','Manager','82222222','106 Ang Mo Kio Ave4','SG','560106','ivoryhae123'),
				('kwhtwe','Khine','Win Htwe','kwhtwe@gmail.com','Programmer','82333333','107 Toa Payoh','SG','780107','kwhtwe123'),
				('a.sanmathi','Sanmathi','Anbumani','a.sanmathi@gmail.com','Teacher','82444444','233 Bayfront','SG','880233','a.sanmathi123')";

// Check insert dump data successful or not				
if(mysql_query($sql,$link)){
	echo "Insert User Dump Data Successful!!\r\n";
}else{
	echo "Insert User Dump Data Error:".mysql_error($link)."\r\n";
}				
mysql_close($link);
?>