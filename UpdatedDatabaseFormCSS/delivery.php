<html>
<head>
<title>Yes I Do</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
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
  
  if(form.Addr.value==""){
  	alert("Error: Address cannot be blank!");
	form.Addr.focus();
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

</head>
<?php
	
	if( isset($_REQUEST['Submit']))
	{
		$con=mysql_connect("localhost","root","");
		if(!$con){
			die('Could not connect to localhost.');
		}
		$database=mysql_select_db('yesido_db', $con);
		if(!$database){
			die('Could not find database.');
		}
	$insert_query="INSERT INTO yesido_db.Delivery(Username, DeliveryDate, DeliveryTime, Addr, Email, PhNo) VALUES ('" . $_REQUEST['Username'] ."',
	'" . $_REQUEST['Date'] ."','" . $_REQUEST['Time'] ."','" . $_REQUEST['Addr'] ."','" . $_REQUEST['Email'] ."','" .$_REQUEST['PhNo'] ."')";
	$result = mysql_query($insert_query, $con);
	if(!$result)
	{
		die('Could not enter data:'.  mysql_error());
	
	}
//		$redirectUrl = "http://localhost/ProdiigyKids/parentssession.php?frame=thankyou";
        /*print "<script type=\"text/javascript\">";

    alert("The email address <?php echo $_POST['email']; ?> is already registered."); 
        print "</script>";*/
		echo '<script>alert("Your Order Process is Complete! /n Your order will deliver in 7 days!");</script>';
 
//	echo "Entered data successfully\n";
	mysql_close($con);	
	}
?>

<body onLoad="Slider();">
<div class="main">
	<!---Header--->
	<div class="header">
		<div class="header_resize">
			<div class="logo">
				<h1><a href="index.html"><img src="image/logo.png" width="100" height="90" alt=""/></a></h1>
			</div>
			<div class="shopping_cart">
				<table>
					<tr>
						<td>
							<a href="#"><img src="image/fb-icon.png" width="40" height="40" alt=""/></a>
							<a href="#"><img src="image/twitter-icon.png" width="40" height="40" alt=""/></a>
							<a href="#"><img src="image/googlePlus-icon.png" width="40" height="40" alt=""/></a>
						</td>
					</tr>
					<tr>
						<td><a href="#"><img src="image/shoppingCart-icon.png" width="40" height="40" alt=""/></a><b>Shopping Cart</b></td>						
					</tr>
				</table>				
			</div>
			<div class="clr"></div>
			<div class="slider">				 
					<img id="1"  src="image/slide1.jpg" width="960" height="360" border="0"/>
					<img id="2"  src="image/slide1.jpg" width="960" height="360" border="0"/>
					<img id="3"  src="image/slide1.jpg" width="960" height="360" border="0"/>
					<img id="4"  src="image/slide4.jpg" width="960" height="360" border="0"/>
					<img id="5"  src="image/slide5.jpg" width="960" height="360" border="0"/>
					<!---
					<a href="#"><img src="image/slide1.jpg" width="960" height="360" alt="" /></a> 
					<a href="#"><img src="image/slide2.jpg" width="960" height="360" alt="" /></a> 
					<a href="#"><img src="image/slide3.jpg" width="960" height="360" alt="" /></a> 
					--->				
				<div class="clr"></div>
			</div>
			<div class="clr"></div>
			<div class="menu_nav">
				<ul>
				  <li class="active"><a href="index.html"><span>Home</span></a></li>
				  <li><a href="#"><span>Login/Register</span></a></li>
				  <li><a href="#"><span>Knowledge</span></a>
					<ul>
						<li><a href="#">Size Chart</a></li>
						<li><a href="#">Color Chart</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">Delivery Time</a></li>
					</ul>
				  </li>					
				  <li><a href="#"><span>Service</span></a>
					<ul>
						<li><a href="#">Delivery</a></li>
						<li><a href="#">Credit Cart Payment</a></li>						
					</ul>
				  </li>
				  <li><a href="#"><span>About</span></a>
					<ul>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Contact Us</a></li>						
					</ul>
				  </li>
				</ul>
			</div>
			<div class="clr"></div>
		</div>
	</div>
	
	<!---Content--->
	<div class="content">
		<div class="content_resize">
			<div class="content_bg" align="center">
            	<form action="delivery.php" method="get" name="deliveryForm" onsubmit="return validForm(this)">
                <table height="300px">
                <tr>
                	<td><img src="image/deliver/username.png"/></td>
                	<td><input type="text" name="Username" /></td>    
                </tr>
                <tr>
                	<td><img src="image/deliver/address.png"></td>
                	<td><textarea type="text" name="Addr" ></textarea></td>    
                </tr>
                <tr>
                	<td><img src="image/deliver/phone.png"></td>
                	<td><input type="tel"name="PhNo"  /></td>    
                </tr>
                <tr>
                	<td><img src="image/deliver/email.png"></td>
                	<td><input type="email" name="Email" /></td>    
                </tr>
                 <tr>
                	<td><img src="image/deliver/date.png"></td>
                	<td><input type="date" name="Date" /></td>    
                </tr>
                <tr>
                	<td><img src="image/deliver/time.png"></td>
                	<td><input type="time" name="Time" /></td>    
                </tr>
                <tr>
                	<td></td>
                	<td><input type="submit" name="Submit" value="Order Items" />
                    <a href="index.html"><input type="submit" name="Back" value="Back" /></a></td>    
                </tr>
                </table>
                </form>
			</div>
			
			<div class="clr"></div>
		</div>
	</div>
	
	<!---FooterBg--->
	<div class="footerBg">
		<div class="footerBg_resize">
			<div class="column c1">
				<h2><span>Photo Gallery</span></h2>
				<a href="#"><img src="image/gallery1.jpg" width="75" height="75" alt="" class="gal" /></a> 
				<a href="#"><img src="image/gallery2.jpg" width="75" height="75" alt="" class="gal" /></a> 
				<a href="#"><img src="image/gallery3.jpg" width="75" height="75" alt="" class="gal" /></a> 
				<a href="#"><img src="image/gallery4.jpg" width="75" height="75" alt="" class="gal" /></a> 
				<a href="#"><img src="image/gallery5.jpg" width="75" height="75" alt="" class="gal" /></a> 
				<a href="#"><img src="image/gallery6.jpg" width="75" height="75" alt="" class="gal" /></a> 
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
				<p>Ivory said:</p>
				<p>"This is the most useful website I have ever seen."</p>
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
</body>

</html>