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
		ProDescription CHAR(250) NOT NULL,
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
('P0001', 'Wedding Dress', 'Lace and tulle sweetheart mermaid bridal gown with chapel train. Features embroider embellished with sequin, tiered skirt, and detachable belt tjat has same color as dress and an optional mauve belt. Short sleeve and illusion lace bolero included.', '1085','dress_1.jpg'),
('P0002', 'Wedding Dress', 'Drop-waist, trumpet style tulle gown with beads, sequins, and rhinestones.', '1085','dress_2.jpg'),
('P0003', 'Wedding Dress', 'Satin strapless Mermaid gown , Sweetheart neckline, with Natural waistline , Plus size and large size available, Rhinestone/Embroidery and flower accents. Lace-up back, Sweep train, Bolero', '1122','dress_3.jpg'),
('P0004', 'Wedding Dress', 'Lace, mermaid gown with illusion V-neck and chapel train. Embellished with beads, pearls, sequins, and re-embroidered lace. Zipper with buttons on back.', '935','dress_4.jpg'),
('P0005', 'Wedding Dress', 'Strapless sweetheart tulle mermaid gown with semi-cathedral train. Includes embroidery, beads, sequins, rhinestones, pearls, lace-up back. Bolero included.', '1085','dress_5.jpg'),
('P0006', 'Wedding Dress', 'Tulle strapless sweetheart mermaid gown with chapel train, featuring beads, sequins, re-embroidered lace, and lace-up back. Bolero included.', '1010','dress_6.jpg'),
('P0007', 'Informal Dress', 'Taffeta, sleeveless sweetheart sheath informal bridal gown. Dress features ruching bodice detail, button up back, and short sleeve bolero included.', '372','dress_7.jpg'),
('P0008', 'Informal Dress', 'Satin, strapless mermaid informal bridal gown with lace-up back, embellished with beads at empire waistline.', '485','dress_8.jpg'),
('P0009', 'Informal Dress', 'Chantilly lace, sleeveless sweetheart sheath informal wedding bridal gown with sweep train, shirring bodice detail to ruching waistline.', '522','dress_9.jpg'),
('P0010', 'Informal Dress', 'Taffeta, strapless A-line informal bridal gown embellished with beads at neckline, a natural waistline belt and includes a short fitted sleeve bolero.', '372','dress_10.jpg'),
('P0011', 'Informal Dress', 'Chantilly lace, sleeveless sweetheart sheath informal wedding bridal gown with sweep train, shirring bodice detail to ruching waistline.', '411','dress_11.jpg'),
('P0012', 'Informal Dress', 'Chiffon and crystal sleeveless sweetheart A-line informal bridal gown. Dress features ruching bodice detail and single pannier skirt detail. Long fitted sleeve jacket included.', '485','dress_12.jpg'),
('P0013', 'Bridesmaids Dress', 'Taffeta, strapless sheath bridesmaid gown. Pleated bodice detail to asymmetrical waist with rose/flower detail.', '260','dress_13.jpg'),
('P0014', 'Bridesmaids Dress', 'Chiffon, sleeveless sweetheart sheath bridesmaid gown. Wrapped pleated bodice detail with beaded accent at waist. Jacket included.', '260','dress_14.jpg'),
('P0015', 'Bridesmaids Dress', 'Satin, sleeveless sweetheart sheath bridesmaid gown. Wrapped pleated bodice detail with beaded accent at waist. Jacket included.', '260','dress_15.jpg'),
('P0016', 'Bridesmaids Dress', 'Chiffon, one-shoulder short A-line bridesmaid gown. Ruched detail to pleated waist, accented with beaded embellishement.', '260','dress_16.jpg'),
('P0017', 'Bridesmaids Dress', 'Strapless, satin sheath with knee-length, tulip skirt, sweetheart neckline, pleated bodice, bow detail at waist with beads and sequins, lace-up back and bolero.', '297','dress_17.jpg'),
('P0018', 'Bridesmaids Dress', 'A-line, chiffon gown with sweetheart neckline, spaghetti staps, empire wasitline, pleated bust , lace-up back and bolero.', '297','dress_18.jpg'),
('P0019', 'Quinceanera Dress', 'Organza strapless quinceanera ball gown with lace-up back, embroidery embellished with beaded bodice detail, pleated waistline and two toned tiered skirt. Short sleeve bolero included.', '1272','dress_19.jpg'),
('P0020', 'Quinceanera Dress', 'A strapless Quinceanera ball gown made of iridescent satin and organza. It has a sweetheart neckline, a corset bodice with beads and embroidery, a ruffled skirt with an embroidered panel to the left, and a lace-up back. Bolero included.', '1347','dress_20.jpg'),
('P0021', 'Quinceanera Dress', 'A strapless Quinceanera ball gown made of organza with sweetheart neckline, stripes and beads on bodice, and two-toned ruffled skirt. Bolero included.', '1272','dress_21.jpg'),
('P0022', 'Quinceanera Dress', 'A strapless Quinceanera ball gown made of organza and sequined tulle. It has sweetheart neckline, lace-up back, chapel train, and a bodice with beads, rhinestones, and pearls. Short sleeve bolero included.', '1347','dress_22.jpg'),
('P0023', 'Quinceanera Dress', 'A strapless Quinceanera ball gown made of organza and sequined tulle. It has sweetheart neckline, lace-up back, chapel train, and a bodice with beads, rhinestones, and pearls. Short sleeve bolero included.', '1122','dress_23.jpg'),
('P0024', 'Quinceanera Dress', 'Sparkling tulle, strapless sweetheart Quinceanera ball gown with lace-up back, embroidery embellished with bead bodice and waist detail, and tulip pannier skirt. Matching short sleeve illusion bolero included.', '1422','dress_24.jpg'),
('P0025', 'Prom Dress', 'A strapless sheath prom dress with high side slit and beaded detail from bodice to side slit.', '560','dress_25.jpg'),
('P0026', 'Prom Dress', 'Strapless, drop-waist sequin mermaid gown with tulle skirt. Detachable spaghetti straps included. Available in gold, white, and black.', '560','dress_26.jpg'),
('P0027', 'Prom Dress', 'Strapless, drop-waist, tulle gown with mermaid silhouette, sweetheart neckline, all-over pleated bodice, sweep train and lace-up back. Embellished with beads, sequins, and rhinestones. Available in Sunset and Turquoise.', '560','dress_27.jpg'),
('P0028', 'Prom Dress', 'Chiffon gown with sweep train over one-shoulder sheath with sweetheart neckline. Features beads, sequins, and rhinestones.', '560','dress_28.jpg'),
('P0029', 'Prom Dress', 'A chiffon sleeveless sweetheart A-line prom dress with beads and sequin bodice detail and lace-up back.', '672','dress_29.jpg'),
('P0030', 'Prom Dress', 'A sequin sleeveless sweetheart sheath prom dress with a high slit. Embellished with asymmetrical beaded detail and a multi keyhole back.', '522','dress_30.jpg'),
('P0031', 'Evening Shoe', 'Get constant compliments in the luxurious Constance sandal. This SCHUTZ silhouette boasts a buttery blue suede upper with large adjusting ankle strap and metal toe box detail. Featured is a 4 1/2 inch stiletto heel and slight 1/2 inch platform for a flawless strut.', '275','shoe_1.jpg'),
('P0032', 'Evening Shoe', 'Get wild and free in the Guta by SCHUTZ. This must have summer sandal features a tall 6 inch stiletto, crossing black vamp and white leather ankle strap. Playful tribal print envelopes the bottom, heel and 1 1/2 inch platform.', '223','shoe_2.jpg'), 
('P0033', 'Evening Shoe', 'The Lovina will be your new heartthrob. This Michael Antonio pump showcases a chic and classic shape with a red patent upper. A simple adjustable ankle strap, 4 3/4 inch heel and 3/4 inch platform completes this party look.', '62','shoe_3.jpg'),
('P0034', 'Evening Shoe', 'Shine with every step and show off! The Suzette by Ellie showcases a blinged out silver rhinestone upper and leopard 2 inch platform. ', '62','shoe_4.jpg'),
('P0035', 'Evening Shoe', 'Show off in the Syliva by Qupid. This tall sandal features triple buckles swerving into the single strap vamp. A zipper on the back, 6 1/2 inch heel and 1 1/2 inch platform perfect this sexy stiletto.', '211','shoe_5.jpg'),
('P0036', 'Evening Shoe', 'Trump the fashion world in the tantalizing Thiago. This trendy sandal features a see through vamp with white piping and synthetic upper. Gold hardware on the ankle strap deliver and edge while a 4 1/2 inch heel adds a boost.', '211','shoe_6.jpg'),
('P0037', 'Day Shoe', 'Heat up your look in this fancy floral by Guess. The Huela features a mixed print upper created with a soft leather. A slingback strap, 5 inch heel and 1 inch platform finish up this sleek sandal.', '125','shoe_7.jpg'),
('P0038', 'Day Shoe', 'Get super sexy height in the Supra. This Shoe Republic pump features a pink micro suede upper with adjustable mary jane strap and gold detailed 2 inch platform. A rounded toe and 5 1/2 inch stiletto heel creates a confident look.', '75','shoe_8.jpg'),
('P0039', 'Day Shoe', 'Meet the Monaco, a colorful everyday perfection. This Not Rated look features a multi color woven design on the 5 inch wedge and 1 inch platform. Braided detailing and straps create a earthy tone.', '62','shoe_9.jpg'),
('P0040', 'Day Shoe', 'Ooh la la! Love is in the air with the Romantique by Taylor Says. This Parisian inspired pump features a slingback strap with soft suede knot. A striped satin upper covers the silhouette, pointed toe and 4 1/2 inch heel. Last but not least is a stunning Eiffel Tower design with gorgeous floral bottom.', '187','shoe_10.jpg'),
('P0041', 'Day Shoe', 'Get super sexy height in the Supra. This Shoe Republic pump features a pink micro suede upper with adjustable mary jane strap and gold detailed 2 inch platform. A rounded toe and 5 1/2 inch stiletto heel creates a confident look.', '75','shoe_11.jpg'),
('P0042', 'Day Shoe', 'Earn your fashion credentials in this stunner from Jessica Simpson. Waleo brings you a tropical multi print upper and a picture perfect almond shaped toe. Espadrille on the 5 1/4 inch heel and 1 1/4 inch platform complete this fashionable pump.', '112','shoe_12.jpg'),
('P0043', 'Bridal Shoe', 'This amazing peep toe pump bridal shoe by Nina is the Maybell-YS. The flower decoration at the heel truly makes this shoe unique. Not only is this shoe gorgeous, it is comfortable too, with the platform under the ball of the foot. Sizes available range from 6-10. Maybell-YS is available in ivory satin only.', '95','shoe_13.jpg'),
('P0044', 'Bridal Shoe', 'ulie-A302 by Allure Bridals is the perfect peep toe wedding shoe! The beautiful lace covered bodice of the shoe will make you feel like a princess, and the adoreable bow on the heel adds a girly touch! The 4 1/4 inch heel is manageable due to the 3/4 inch platform. If you are interested in additional cushioning, we suggest you try Tip Toes or Heavenly Heelz by Foot Petals. Sizes available range from 5.5-10,11.', '135','shoe_14.jpg'),
('P0045', 'Bridal Shoe', 'This amazing peep toe pump bridal shoe by Nina is the Maybell-YS. The flower decoration at the heel truly makes this shoe unique. Not only is this shoe gorgeous, it is comfortable too, with the platform under the ball of the foot. Sizes available range from 6-10. Maybell-YS is available in ivory satin only.', '112','shoe_15.jpg'),
('P0046', 'Bridal Shoe', 'Percy-1-Ivory by Blossom is a beautiful choice for an ivory lace shoe. This style can be worn by so many women. Percy is great for a date night, or a bride who needs an ivory lace shoe to compliment her wedding gown. Your foot will be secure in this peep toe platform with closed pump heel. If you are interested in additional cushioning for the big day, we suggest Tip Toes or Heavenly Heelz by Foot Petals. Sizes available range from 7-11.', '75','shoe_16.jpg'),
('P0047', 'Bridal Shoe', 'Vice-93 white lace is a unique shoe by Blossom that you can wear again and again after the big event! The shimmery platform style features a rhinstone covered ankle strap. Vice is sure to stand out on the dance floor and keep you secure. Vice is adorned with glitter fabric on the toe bed, the heel and the ankle strap. The fabric over the toe is an off white laces and features rhinestone coverd straps around the edges. This subtle white could compliment a white or light ivory gown. Be sure to check out our selection of Foot Petal products in the Shoe Cushion section of the website.', '73','shoe_17.jpg'),
('P0048', 'Bridal Shoe', 'This stylish and embellished bridal shoe by Dyeables is Rosa. The elegant peep toe pump style is sure to compliment nearly any wedding gown. Even better, the platform adds the perfect height while maintaining stabilty. Rosa is available in dyeable white satin or ivory satin. This bridal shoe looks fantastic in a variety of colors and can be customized before or after your wedding! If you are interested in additional cushioning for the big day, we suggest Tip Toes or Heavenly Heelz by Foot Petals. Sizes available range from 5-11. If you love this style but would like a higher heel, check out the Ida by Dyeables!', '125','shoe_18.jpg'),
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
		ProDescription CHAR(250) NOT NULL,
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