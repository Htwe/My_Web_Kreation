<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<title>About us</title>
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
				  <li class="active"><a href="index.php"><span><strong>Home</strong></span></a>
                 <ul>
						<li><a href="weddingD.php"><strong>Wedding Dresses</strong></a>
						<ul>
							<li><a href="weddingD.php"><strong>Wedding Dresses</strong></a></li>
							<li><a href="#"><strong>Informal Dresses</strong></a></li>
							<li><a href="#"><strong>Bridesmaid Dresses</strong></a></li>
							<li><a href="#"><strong>Prom Dresses</strong></a></li>
						</ul>
						</li>
						<li><a href="#"><strong>Shoes</strong></a>
						<ul>
							<li><a href="#"><strong>Evening Shoes</strong></a></li>
							<li><a href="#"><strong>Day Shoes</strong></a></li>
							<li><a href="#"><strong>Bridal Shoes</strong></a></li>
						</ul>
						</li>
						<li><a href="#"><strong>Accessories</strong></a>
						<ul>
							<li><a href="#"><strong>Veils</strong></a></li>
							<li><a href="#"><strong>Headpieces</strong></a></li>
							<li><a href="#"><strong>Jewellery</strong></a></li>
							<li><a href="#"><strong>Gloves</strong></a></li>
							<li><a href="#"><strong>Garter</strong></a></li>
						</ul>
						</li>

					</ul>
					</li>				  
				  <li><a href="#"><span><strong>Knowledge</strong></span></a>
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
				  <li class="active"><a href="#"><span><strong>About</strong></span></a>
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
			<div class="AboutSidebar">
            <H3 align="center">Yes I Do Creators</H3>
            <H4 align="center">Htwe</h4>
           <P align="center"><img src="image/About/htwe.jpg" width="150" height="100"/></P> 
           <H4 align="center">Ivory</h4>
           <P align="center"><img src="image/About/ivory.jpg" width="150" height="100"/></P> 
           <H4 align="center">Sam</h4>
           <P align="center"><img src="image/About/Sam.jpg" width="150" height="100"/></P> 
            <H4 align="center">Sanmathi</h4>
           <P align="center"><img src="image/About/sanmathi.jpg" width="150" height="100"/></P> </div>
			<div class="main_text">	
				<div class="aboutUs">
                <h3>Wanna Know about<font color="#980000"> Yes I Do</font>?</h3>
                <h3>Here it is!</h3>
                <p>
                Weddings are bright and colourful, reverberating with laughter and celebrations.</p>
               <P> In 2014, a group of energetic girls, Htwe, Ivory, Sam and Sanmathi brought wedding dress shopping to a new horizon. Our trustworthy reputation is known worldwide for the quality of wedding dress.</P>
              <P>    Your dream of perfect wedding dress will come true with ‘Yes I Do’ Website.</P>
              <P>    Be it a passion or a hobby, shopping has always fascinated millions of people across the globe.“ Yes I Do” is the perfect destination for your wedding Dress shopping. Our website also features designer wedding dresses, bridesmaid dresses, bridal shoes and wedding accessories. It seamlessly brings all of them to your desktop.</P>
                <p>  We also offer convenient online payment and postal delivery.</p>
                 <p><font size="+2" color="#980000"> Here’s a wish for your dreams to come true, from the moment u first <P> say Yes I Do!</P></font>     </p>
                            
                </div>
		  
				
				<div class="clr"></div>
			</div></div>
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