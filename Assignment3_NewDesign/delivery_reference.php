<html>
<head>
<title>Yes I Do Delivery Reference</title>
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

</script>

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
						<td style="width: 100px; padding-left: 400px;"><a href="login.php" style="text-decoration: none;">Login</a></td>
						<td style="width: 100px;"><a href="registration.php"style="text-decoration: none;">Register</a></td>
					</tr>
				</table>
			</div>
			<div class="logobg">
			<div class="logo">
				<a href="index.php"><img src="image/logo.png" width="130" height="100" alt=""/></a>
			</div>			
			<div class="menu_nav">
				<ul>
				  <li><a href="index.php"><span><strong>Home</strong></span></a>
				  <ul>
						<li><a href="weddingD.php"><strong>Wedding Dresses</strong></a></li>
						<li><a href="#"><strong>Shoes</strong></a></li>
						<li><a href="#"><strong>Accessories</strong></a></li>

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
				<form action="#">
                <label> No Product has been added</label>
                <p>-------------------------------------------------</p>
               Shipping &nbsp; &nbsp;&nbsp;&nbsp; <input type="text" name="Shipping" size="10" placeholder="S$0.00" readonly /><br/>
              Total Cost &nbsp; &nbsp; <input type="text" name="Total" size="10" placeholder="S$0.00" readonly /><br /><br />
             <a href="#"> <input type="submit" value="" name="Submit" class="btncheckout" /></a>
                </form>
			</div>
			<div class="main_text">
             <div class="faq">	
             <p>DELIVERY INFORMATION </p>
			<p><b>Normal Mail (No Tracking ID & No Insurance)</b> - Package will be delivered to the mailbox directly if the parcel is too big singpost postman will send to your doorstep. In case of unsuccessful delivery, the postman will leave a collection slip on your door or mailbox for collection at the nearest post office. No tracking number is available for normal mail.<br>
            
 
100g - 249g $1.20<br> 

250g - 499g $1.70 <br>
500g - 999g $2.75 <br>
1000g or above please refer to Courier Service</p>
	
<p><b>Registered Mail (Tracking ID + Insurance)</b> - Package will be delivered directly to the doorstep of the address issued. Tracking number is available. In case of unsuccessful delivery, the postman will leave a collection slip on your door or mailbox for collection at the nearest post office.<br>



100g - 249g $3.44 (Registered Mail)<br>

250g - 499g $3.94 (Registered Mail)<br>
500g - 999g $4.99 (Registered Mail)<br>
1000g or above please refer to Courier Service<br></p>
<p><b>Courier Service (Door to Door Delivery with Tracking ID + Insurance)</b> - Package will be delivered directly to the doorstep of the address issued. Tracking number is available. In case of unsuccessful delivery, you may also request free redelivery<br>
$5.50 under 1kg <br>
$6.00 under 2kg <br>
$8.00 under 4kg <br></p>
<p><i> We recommend you to use registered mail. Any loss suffered, Yes I Do is not responsible.
We also offer cash on delivery ONLY within singapore.<br>Local delivery will take atleast 2 to 3 days.International delivery will take a maximum of 1 week. </i></p>
		 
         
				</div>
				<div class="clr"></div>
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
<!-- <script>
	$('.testimonials-slider').bxSlider({
		slideWidth: 296,
		minSlides: 1,
		maxSlides: 1,
		slideMargin: 32,
		auto: true,	
		autoControls: true
	  });
</script> -->
</body>

</html>