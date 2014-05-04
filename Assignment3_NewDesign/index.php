<html>
<head>
<title>Yes I Do</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />

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

var minW = 1200;

$(function (){
CheckSizeZoom()
$('#divWrap').css('visibility', 'visible');
});
$(window).resize(CheckSizeZoom)

function CheckSizeZoom() {
	if ($(window).width() < minW) {
	var zoomLev = $(window).width() / minW;

	if (typeof (document.body.style.zoom) != "undefined") {
	$(document.body).css('zoom', zoomLev);
	}
	else {

	$('#divWrap').css('-moz-transform', "scale(" + zoomLev + ")");
	$('#divWrap').width($(window).width() / zoomLev + 10);
	$('#divWrap').css('position', 'relative');
	$('#divWrap').css('left', (($(window).width() - minW - 16) / 2) + "px");
	$('#divWrap').css('top', "-19px");
	$('#divWrap').css('position', 'relative');
	}
	}
	else {
	$(document.body).css('zoom', '');
	$('#divWrap').css('position', '');
	$('#divWrap').css('left', "");
	$('#divWrap').css('top', "");
	$('#divWrap').css('-moz-transform', "");
	$('#divWrap').width("");
	}
}
</script>

</head>

<body onLoad="Slider();">
<div id="divWrap" style="visibility: hidden">
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
						<td style="width: 100px;"><a href="registration.php" style="text-decoration: none;">Register</a></td>
					</tr>
				</table>
			</div>
			<div class="logo">
				<a href="index.php"><img src="image/logo.png" width="130" height="100" alt=""/></a>
			</div>			
			<div class="menu_nav">
				<ul>
				  <li class="active"><a href="index.php"><span><strong>Home</strong></span></a></li>				  
				  <li><a href="#"><span><strong>Knowledge</strong></span></a>
					<ul>
						<li><a href="#"><strong>Size Chart</strong></a></li>
						<li><a href="#"><strong>Color Chart</strong></a></li>
						<li><a href="#"><strong>FAQ</strong></a></li>
						<li><a href="#"><strong>Delivery Time</strong></a></li>
					</ul>
				  </li>					
				  <li><a href="#"><span><strong>Service</strong></span></a>
					<ul>
						<li><a href="delivery.php"><strong>Delivery</strong></a></li>
						<li><a href="#"><strong>Credit Cart Payment</strong></a></li>						
					</ul>
				  </li>
				  <li><a href="#"><span><strong>About</strong></span></a>
					<ul>
						<li><a href="#"><strong>About Us</strong></a></li>
						<li><a href="#"><strong>Contact Us</strong></a></li>						
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
			<div class="shopping_card">
				<p>Shopping Cart</p>
			</div>
			<div class="sidebar">
				<div class="gadget">
				  <h2><span>Dresses & Accessories</span></h2>
				  <div class="clr"></div>
				  <ul class="sidebar_menu">
					<li><h4>Dresses</h4>
						<ul class="slidebar_submenu">
							<li><a href="weddingD.php">Wedding Dresses</a></li>
							<li><a href="#">Bridesmaid Dresses</a></li>
							<li><a href="#">Quinceanera Dresses</a></li>
							<li><a href="#">Prom Gowns</a></li>
							<li><a href="#">Informal Gowns</a></li>
						</ul>
					</li>						
					<li><h4>Shoes</h4>
						<ul class="slidebar_submenu">
							<li><a href="#">Evening Shoes</a></li>
							<li><a href="#">Day Shoes</a></li>
							<li><a href="#">Bridal Shoes</a></li>							
						</ul>
					</li>
					<li><h4>Accessories</h4>
						<ul class="slidebar_submenu">
							<li><a href="#">Veils</a></li>
							<li><a href="#">Headpieces</a></li>
							<li><a href="#">Jewellery</a></li>	
							<li><a href="#">Gloves</a></li>
							<li><a href="#">Garter</a></li>							
						</ul>
					</li>					
				  </ul>
				</div>
			</div>
			<div class="main_text">	
				<div class="slider">				 
					<img id="1"  src="image/slider/slide1.jpg" width="960" height="360" border="3"/>
					<img id="2"  src="image/slider/slide2.jpg" width="960" height="360" border="3"/>
					<img id="3"  src="image/slider/slide3.jpg" width="960" height="360" border="3"/>
					<img id="4"  src="image/slider/slide4.jpg" width="960" height="360" border="3"/>
					<img id="5"  src="image/slider/slide5.jpg" width="960" height="360" border="3"/>
				</div>
				<div class="clr"></div>
				<div class="product">
					<table class="product_lists" style="margin-top:-110px;">
						<tr>
							<td style="height: 450px; text-align:center;">							
								<p>
									<a class="image_text" href="#" title="Price = S$600">
									<img src="image/wedding dress/dress1.jpg" width="280px" height="400px" border="3"/>
									</a>
								</p>								
							</td>
							<td style="height: 450px; text-align:center;">
								<p>
									<a class="image_text" href="#" title="Price = S$400">
									<img src="image/wedding dress/dress2.jpeg" width="280px" height="400px" border="3"/>
									</a>
								</p>
							</td>
						</tr>
						<tr>
							<td class="product_details">
								<input id="detailsBtn" type="button" value="Details">
								<input id="addChartBtn" type="button" value="Add Chart">
							</td>
							<td class="product_details">
								<input id="detailsBtn" type="button" value="Details">
								<input id="addChartBtn" type="button" value="Add Chart">
							</td>
						</tr>						
					</table>
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
</div>
</body>

</html>