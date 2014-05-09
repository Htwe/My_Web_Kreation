<html>
<head>
<title>Yes I Do | Wedding Dress</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<?php
	session_start();
?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
<script type="text/javascript">
function Slider(){
	$(".slider #1").show("fade",500);
	$(".slider #1").delay(5500).hide("slide",{direction:"left"},500);
			var sc = $(".slider img").size();
			var count=2;
			setInterval(function(){
				$(".slider #"+count).show("slide",{direction:"right"},500); 
				$(".slider #"+count).delay(5500).hide("slide",{direction:"left"},500);
				if(count == sc){
					count = 1;
				}else{
					count = count+1;
				}
			},6500);
}
function validForm(form) {	
	 if(form.Username.value==""){
		alert("Error: User Name cannot be blank!");
		form.Username.focus();
		return false;
	  }
	  
	  if(form.SteetNo.value==""){
		alert("Error: Address cannot be blank!");
		form.StreetNo.focus();
		return false;
	  }
	  
	   if(form.Building.value==""){
		alert("Error: Address cannot be blank!");
		form.Building.focus();
		return false;
	  }
	   if(form.City.value==""){
		alert("Error: Address cannot be blank!");
		form.City.focus();
		return false;
	  }
	  
	   if(form.PostalCode.value==""){
		alert("Error: Address cannot be blank!");
		form.PostalCode.focus();
		return false;
	  }


	  if (form.Email.value == "") {
		 alert("Enter your Email Address");
		 form.Email.focus();
		 return false;
	  }
	  
	  var email = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	  if(!email.test(form.Email.value))
		{
			alert('Enter the correct Email type!');
			form.Email.focus();
			return false;
		}
	  if (form.PhNo.value == "") {
		 alert("Enter your Ph Number.");
		 form.PhNo.focus();
		 return false;
	  }
		var phoneno = /^[0-9]/;  
		if(!phoneno.test(form.PhNo.value))  
			{  
			alert('Enter the correct Ph No!');
			form.PhNo.focus();  
			return false;  
			}  
	  return true
}
</script>
<script>
    function submitForm(id, action)
    {
		if (id == '6' ) 
		{
			document.getElementById('product6').action = action;
			document.getElementById('product6').submit();
		} else if (id == '5' ) 
		{
			document.getElementById('product5').action = action;
			document.getElementById('product5').submit();
		}
		else if (id == '4' ) 
		{
			document.getElementById('product4').action = action;
			document.getElementById('product4').submit();
		}
		else if (id == '3' ) 
		{
			document.getElementById('product3').action = action;
			document.getElementById('product3').submit();
		}
		else if (id == '2' ) 
		{
			document.getElementById('product2').action = action;
			document.getElementById('product2').submit();
		}
		else if (id == '1' ) 
		{
			document.getElementById('product').action = action;
			document.getElementById('product').submit();
		}		
    }
</script>
<script>
    function btnSubmitForm(action)
    {
        document.getElementById('btnSubmit').action = action;
        document.getElementById('btnSubmit').submit();
    }
</script>
<?php
require("order_class.php");
//$con = mysql_connect("localhost","root","");//connecting to server
	
	//mysql_select_db('op_db',$con); //selecting database
	

if(isset($_POST['UPDATE']))
{
	$updateUserObj = new Update();
	$myusername=$_POST['Username'];
	$ProQty = $_POST['ProQty'];

	$updateUserObj->updateItems($myusername,$ProQty);

	
	if ($updateUserObj->updateItems($myusername,$ProQty)) //UPDATING ORDER INFORMATION
	{
	echo "<script type='text/javascript'>	
	alert('Your Order information has been updated..');
	
	</script>";
	
	//header('location:index.php');
	}
}
?>
<?php

	$deleteObj = new Delete();
	if(isset($_POST['deletingItems']))
	{	
		
		$ShoppingID = $_POST['ShoppingID'];
		$deleteObj->deleteItems($ShoppingID);
				
		header('location:delivery.php');
	}
?>
</head>
<?php	
	if (isset($_REQUEST['Submit']) ){
						$link = mysql_connect("localhost","root","");
						if(!$link){
							die('Cannot connect to the localhost!');
						}
						$db = mysql_select_db('yesido_db',$link);
						if(!$db){
							die('Could not find the database!');}
	$query="INSERT INTO yesido_db.Delivery(Username, PhNo, Email, StreetNo, Building, City, Postal, DeliveryDate, DeliveryTime) VALUES ('" . $_REQUEST['Username'] ."','" . $_REQUEST['PhNo'] ."','" . $_REQUEST['Email'] ."','" . $_REQUEST['StreetNo'] ."','" . $_REQUEST['Building'] ."','" . $_REQUEST['City'] ."','" . $_REQUEST['Postal'] ."','" . $_REQUEST['DeliveryDate'] ."','" . $_REQUEST['DeliveryTime'] ."')";
	
	$result = mysql_query($query, $link);
	if(!$result)
	{
		die('Could not enter data:'.  mysql_error());
	
	}
	header("Location: CCpayment.php");
					}
?>


</head>

<body onLoad="Slider();">
<div class="main">
	<!---Header--->
	<div class="header">
		<div class="header_resize">
			<div class="customer_connect">
				<table>
					<tr>
						<td style="width: 100px; padding-left: 300px; "><a href="#" style="text-decoration: none;">Facebook</a></td>
						<td style="width: 100px; text-align:center;"><a href="#" style="text-decoration: none;">Twitter</a></td>
						<td style="width: 100px; text-align:center;"><a href="#" style="text-decoration: none;">Google+</a></td>
						<td style="width: 100px; padding-left:400px;"><?php 
								if(isset($_SESSION['Username'])){
								echo($_SESSION['Username']."</a>&nbsp; <a href = 'logout.php' style='text-decoration: none'>Log Out</a>");
								}else {
								echo ("<a href='login_sam.php' style='text-decoration: none;'>Login</a>");
								}
						?></td>
						<td style="width: 100px;"><a href="registration.php" style="text-decoration: none;">Register</a></td>
					</tr>
				</table>
			</div>
            <div class="logobg">
			<div class="logo">
				<a href="index.php"><img src="image/logo.png" width="130" height="100" alt=""/></a>
			</div>			
			<div class="menu_nav">
				<ul>
				  <li class="active"><a href="index.php"><span><strong>Home</strong></span></a>
                 <ul>
						<li><a href="weddingdress.php"><strong>Wedding Dresses</strong></a>
						<ul>
							<li><a href="weddingdress.php"><strong>Wedding Dresses</strong></a></li>
							<li><a href="informaldress.php"><strong>Informal Dresses</strong></a></li>
							<li><a href="bridesmaiddress.php"><strong>Bridesmaid Dresses</strong></a></li>
							<li><a href="quinceaneradress.php"><strong>Quinceanera Dresses</strong></a></li>                            
							<li><a href="promdress.php"><strong>Prom Dresses</strong></a></li>
						</ul>
						</li>
						<li><a href="#"><strong>Shoes</strong></a>
						<ul>
							<li><a href="eveningshoes.php"><strong>Evening Shoes</strong></a></li>
							<li><a href="dayshoes.php"><strong>Day Shoes</strong></a></li>
							<li><a href="bridalshoes.php"><strong>Bridal Shoes</strong></a></li>
						</ul>
						</li>
						<li><a href="#"><strong>Accessories</strong></a>
						<ul>
							<li><a href="veils.php"><strong>Veils</strong></a></li>
							<li><a href="headpieces.php"><strong>Headpieces</strong></a></li>
							<li><a href="jewellery.php"><strong>Jewellery</strong></a></li>
							<li><a href="gloves.php"><strong>Gloves</strong></a></li>
							<li><a href="garter.php"><strong>Garter</strong></a></li>
						</ul>
						</li>

					</ul>
					</li>				  			  
				  <li class="active"><a href="#"><span><strong>Knowledge</strong></span></a>
					<ul>
						<li><a href="sizeChart.php"><strong>Size Chart</strong></a></li>
						<li><a href="colorChart.php"><strong>Color Chart</strong></a></li>
						<li><a href="faq.php"><strong>FAQ</strong></a></li>
						<li><a href="terms.php"><strong>Terms&Conditions</strong></a></li>
					</ul>
				  </li>					
				  <li><a href="#"><span><strong>Service</strong></span></a>
					<ul>
						<li><a href="delivery_reference.php"><strong>Delivery</strong></a></li>
						<li><a href="payment_reference.php"><strong>Credit Cart Payment</strong></a></li>						
					</ul>
				  </li>
				  <li><a href="#"><span><strong>About</strong></span></a>
					<ul>
						<li><a href="About_us.php"><strong>About Us</strong></a></li>
						<li><a href="Contact_us.php"><strong>Contact Us</strong></a></li>						
					</ul>
				  </li>
				</ul>
			</div>
			<div class="clr"></div>
            </div>
		</div>
	</div>
	
	<!---Content--->
	<div class="content">
		<div class="content_resize">
			<div class="shopping_card">
				<form id="btnSubmit" action="#">				
				<?php 
				if(isset($_SESSION['Username'])){
					$connect = mysql_connect("localhost","root","");
					mysql_select_db("yesido_db");
					$myusername = $_SESSION['Username'];
					$query = mysql_query("SELECT * FROM yesido_db.sc WHERE Username = '$myusername' ");
					$totalCost = 0;
					//fetch the results 
					WHILE($rows = mysql_fetch_array($query)):
					$proCode = $rows['ProCode'];
					$proQty = $rows['ProQty'];
					$proPrice = $rows['ProPrice'];
					$totalCost += $proQty * $proPrice;
					endwhile;
					if ($totalCost > 0) 
					{
						$query = mysql_query("SELECT * FROM yesido_db.sc WHERE Username = '$myusername' ");
						WHILE($rows = mysql_fetch_array($query)):
						$proCode = $rows['ProCode'];
						$proQty = $rows['ProQty'];
						$proPrice = $rows['ProPrice'];
						echo "
						<h3>P Code: $proCode<h3> 
						<h3>P Qty: $proQty</h3>
						<h3>Price: $proPrice</h3>
						<p>--------------------</p>
						";
						endwhile;
					
					echo "						
						Total Cost &nbsp; &nbsp; <input type='text' name='Total' size='10' value='$totalCost' placeholder='S$0.00' readonly /><br /><br />
							 <input type='button' value='CHECK OUT' name='Submit' class='btncheckout' onclick=\"btnSubmitForm('delivery.php')\" />
							 <input type='button' value='Empty' name='Submit' class='btnEmpty' onclick=\"btnSubmitForm('delete.php')\" />
						";					
					}
					else {				
						echo "
							<label> No Product has been added</label>
								<p>-------------------------------------------------</p>							   
							  Total Cost &nbsp; &nbsp; <input type='text' name='Total' size='10' placeholder='S$0.00' readonly /><br /><br />
							 <input type='button' value='CHECK OUT' name='Submit' class='btncheckout' onclick=\"btnSubmitForm('delivery.php')\" />
							 <input type='button' value='Empty' name='Submit' class='btnEmpty' onclick=\"btnSubmitForm('delete.php')\" />
						";
					}									
				}
				else {				
						echo "
							<label> No Product has been added</label>
								<p>-------------------------------------------------</p>							   
							  Total Cost &nbsp; &nbsp; <input type='text' name='Total' size='10' placeholder='S$0.00' readonly /><br /><br />
							 <input type='button' value='CHECK OUT' name='Submit' class='btncheckout' onclick=\"btnSubmitForm('delivery.php')\" />
							 <input type='button' value='Empty' name='Submit' class='btnEmpty' onclick=\"btnSubmitForm('delete.php')\" />
						";
					}
				?>
                
                </form>
			</div>
			
			<div class="main_text">
				<div class="delivery">
					<form action="delivery.php" method="get" name="deliveryForm" onSubmit="return validForm(this)">
					<table height="auto">
					<tr>
						<td colspan="4"><h1><img src="image/deliver/Delivery.png" width="300" height="60"></h1></td>
					  </tr>
                    <tr>
						<td><img src="image/deliver/username.png"/></td><td><input type="text" name="Username" placeholder="User name" required="required" /></td> 
                        <td><img src="image/deliver/phone.png" />
						</td>
						<td><input type="tel"name="PhNo" placeholder="Contact No." required="required" /></td>      
					</tr>
					<tr>
                    	<td><img src="image/deliver/email.png"></td>
						<td><input type="email" name="Email" placeholder="Email Address" required="required" /></td> 
						
						
					</tr>
                    <tr>
                     	<td> <img src="image/deliver/street.png" width="150" height="40" /> </td> <td><input type="text" name="StreetNo" placeholder="Street 11"/> </td>    
                        <td><img src="image/deliver/building.png" width="150" height="40" /> </td> <td><input type="text" name="Building" placeholder="#08-200" /> </td>    
                        
                     </tr>	
                      <tr>
                     	
                        <td><img src="image/deliver/city.png" width="150" height="40" /></td> <td><input type="text" name="City" placeholder="Singapore" /></td>    
                        <td><img src="image/deliver/posta.png" width="150" height="40" /></td><td><input type="text" name="Postal" placeholder="560105" /></td>    
                     </tr>				
					 <tr>
						<td><img src="image/deliver/date.png"></td>
						<td><input type="date" name="DeliveryDate" /></td>  
                        <td><img src="image/deliver/time.png"></td>
						<td><input type="time" name="DeliveryTime" /></td>  
					</tr>
					
					</table>
                
					<div style="margin-left: 10px; margin-bottom:50px; margin-top:20px;	padding:10 10 10 10 ; background:#8D070B; border-radius:15px; float:left;	width:850px; height:auto;position: relative;">
				
					<?php
					if (!isset($_SESSION))
						{ 
							session_start();
						}
					if(isset($_SESSION['Username']))
					{
						
						$getItemsInfoObj = new Select();
						
						if ($result = $getItemsInfoObj->getItemsInfo($_SESSION['Username'])) { 
									
						echo "
						<form action='delivery.php' method='post'>
						<table align = 'center' cellspacing = '2' widht='100%' cellpadding = '2' border = '0' style='border-radius:15px;'>
									
									<tr>
									<th>User Name</th>
									<th>Product Code</th>

									<th>Product Image</th>																
									<th>Product Price</th>				
									<th>Product Quantity</th>
									<th>Action</th>
											
									</tr>
									<tr>
									<td></td>
									<td></td>

									<td></td>
									<td></td>
									<td></td>
									<td></td>
																			
									</tr>";
							while($obj = $result->fetch_object()){
							 $ShoppingID=$obj->ShoppingID; 
							 $myusername=$obj->Username;
							 $ProCode=$obj->ProCode; 
							 $ProDescription=$obj->ProDescription;
							 $ProImgName=$obj->ProImgName;
							 $ProPrice=$obj->ProPrice;
							 $ProQty=$obj->ProQty;
					
							 
							 echo "
							 	<tr>
										<td>$myusername</td>
										<td>$ProCode</td>					

										<td>$ProImgName</td>
										<td>$ProPrice</td>
										<td><input type='text' size='5' name='ProQty' placeholder='Enter Qty' value= $ProQty /></td>
									
										<td>
											<div id='deletingItems'>
													<form action='delivery.php' method='post'>
															<input type='hidden' name='ShoppingID' value='$ShoppingID'/>
															<input type='submit' name='deletingItems' value='Delete' class='btndelete'/>
													</form>
											</div>
										</td>
									
									</tr>";
							}
									echo "<tr align='right'>
									<td></td>
									<td></td>
									<td></td>																											
									<td align='right'>
										<input type='hidden' name='Username' value='$myusername'/>
										<input type = 'submit' name = 'UPDATE' value = 'UPDATE' class='btnupdate'/></td>
									<td align='right'><input type='submit' value='Order' name='Submit' class='btnorder' /></td>
									<td><a href='index.php'><input type='button' name='Back' value='Back' class='btnback'/></a></td>
									</tr>
									
									";

						} 
						echo "</table></form>";
						$result->close(); 
				}
			?>			
			</div>
			</form>	
				<div class="clr"></div>
						
			
			</div>
			</div>
			</div>
			<div class="clr"></div>				
			</div>
			<div class="clr"></div>
		</div>
	</div>
	
	<!---FooterBg--->
	<div class="footerBg">
		<div class="footerBg_resize">
			<div class="column c1">
				<h2><span>Photo Gallery</span></h2>
				<a href="photo_gallery.php"><img src="image/gallery/gallery1.jpg" width="75" height="75" alt="" class="gal" /></a> 
				<a href="photo_gallery.php"><img src="image/gallery/gallery2.jpg" width="75" height="75" alt="" class="gal" /></a> 
				<a href="photo_gallery.php"><img src="image/gallery/gallery3.jpg" width="75" height="75" alt="" class="gal" /></a> 
				<a href="photo_gallery.php"><img src="image/gallery/gallery4.jpg" width="75" height="75" alt="" class="gal" /></a> 
				<a href="photo_gallery.php"><img src="image/gallery/gallery5.jpg" width="75" height="75" alt="" class="gal" /></a> 
				<a href="photo_gallery.php"><img src="image/gallery/gallery6.jpg" width="75" height="75" alt="" class="gal" /></a> 
			</div>
			<div class="column c2">
				<h2><span>Feedback</span></h2>
					<form method="post" name="feedbackFrom" action="">						
						<input name="name" type="text" placeholder="Name" class="name-bg" required>	<p></p>				
						<input name="email" type="text" placeholder="E-mail" class="email-bg" required>	<p></p>
						<!---
						<textarea cols="42" rows="42" placeholder="comments" class="comment-bg">Leave your comments here.</textarea>
						--->
						<input name="comment" type="text" placeholder="Leave your comments here." class="comment-bg" required> <p></p>
						<input class="submitBtn" type="submit" value="Submit">						
					</form>
			</div>
			<div class="column c3">				
				<h2><span>Testimonials</span></h2>
					<div class="testimonials-slider">
						<div class="slide">							
								<div class="testimonials-carousel-context">
                                <div class="testimonials-name">Ivory</div>
                                <div class="testimonials-carousel-content"><p>This is the most useful website for me.</p></div>
                            </div>
						</div>
                      
						<div class="slide">							
								<div class="testimonials-carousel-context">
								<div class="testimonials-name">Janet</div>
								<div class="testimonials-carousel-content"><p>I have found this website help me a lot in finding my suitable wedding dress and accessories.</p></div>
							</div>
						</div>
                      
						<div class="slide">							
								<div class="testimonials-carousel-context">
                                <div class="testimonials-name">Kathy</div>
                                <div class="testimonials-carousel-content"><p>I like this website design and the products production.</p></div>
                            </div>
						</div>
					</div>				
			</div>
			<div class="clr"></div>
		</div>
	</div>
	
	<!--Footer--->
	<div class="footer">
		<div class="footer_resize">
			<p class="lf">Copyright &copy; MyWebKreation. All Rights Reserved.</p>
		</div>
	</div>
</div>
<!--jQuery plug-in code-->
<!---<script>
	$('.testimonials-slider').bxSlider({
		slideWidth: 296,
		minSlides: 1,
		maxSlides: 1,
		slideMargin: 32,
		auto: true,	
		autoControls: true
	  });
</script> --->
</body>

</html>