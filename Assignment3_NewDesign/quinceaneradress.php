<html>
<head>
<title>Yes I Do | Accessories</title>
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
								echo ("<a href='login.php' style='text-decoration: none;'>Login</a>");
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
				<h1>Quinceanera Dress</h1>
				<div class="product_catalog">
					<table class="product_lists">
						<tr>
							<td style="height: 450px; text-align:center;">							
								<p>
									<a class="image_text" href="product19.php" title="Price = S$1272">
									<img src="image/wedding dress/Quinceanera Dresses/dress_1.jpg" width="280px" height="400px" border="3"/>
									</a>
								</p>								
							</td>
							<td style="height: 450px; text-align:center;">
								<p>
									<a class="image_text" href="product20.php" title="Price = S$1347">
									<img src="image/wedding dress/Quinceanera Dresses/dress_2.jpg" width="280px" height="400px" border="3"/>
									</a>
								</p>
							</td>
							<td style="height: 450px; text-align:center;">
								<p>
									<a class="image_text" href="product21.php" title="Price = S$1272">
									<img src="image/wedding dress/Quinceanera Dresses/dress_3.jpg" width="280px" height="400px" border="3"/>
									</a>
								</p>
							</td>
						</tr>
						<tr>
							<td class="product_details">
								<form id="product" name="product" action="productFunction.php" method="post">
									<input type="hidden" name="ProCode" value="P0019">	
									<input type="hidden" name="ProPrice" value="1272">
									<input type="hidden" name="ProDesc" value=" Organza strapless quinceanera ball gown with lace-up back, embroidery embellished with beaded bodice detail, pleated waistline and two toned tiered skirt. Short sleeve bolero included.">
									<input type="hidden" name="ProImageName" value="dress_19.jpg">
									<input type="hidden" name="quantity" value="1">
																		
									<input type="button" id="detailsBtn" name="product" onClick="submitForm('1', 'product19.php')" value="Details" />
									<input type="button" id="addChartBtn" name="product" onClick="submitForm('1','productFunction.php')" value="Add Cart" />									
								</form>
							</td>
							<td class="product_details">
								<form  id="product2" name="product2" action="productFunction.php" method="post">
									<input type="hidden" name="ProCode" value="P0020">	
									<input type="hidden" name="ProPrice" value="1347">
									<input type="hidden" name="ProDesc" value="A strapless Quinceanera ball gown made of iridescent satin and organza. It has a sweetheart neckline, a corset bodice with beads and embroidery, a ruffled skirt with an embroidered panel to the left, and a lace-up back. Bolero included.">
									<input type="hidden" name="ProImageName" value="dress_20.jpg">
									<input type="hidden" name="quantity" value="1">
								
									<input type="button" id="detailsBtn" name="product2" onClick="submitForm('2', 'product20.php')" value="Details" />
									<input type="button" id="addChartBtn" name="product2" onClick="submitForm('2','productFunction.php')" value="Add Cart" />
								</form>
							</td>
							<td class="product_details">
								<form id="product3" name="product3" action="productFunction.php" method="post">
									<input type="hidden" name="ProCode" value="P0021">	
									<input type="hidden" name="ProPrice" value="1272">
									<input type="hidden" name="ProDesc" value="A strapless Quinceanera ball gown made of organza with sweetheart neckline, stripes and beads on bodice, and two-toned ruffled skirt. Bolero included.">
									<input type="hidden" name="ProImageName" value="dress_21.jpg">
									<input type="hidden" name="quantity" value="1">
									
									<input type="button" id="detailsBtn" name="product3" onClick="submitForm('3', 'product21.php')" value="Details" />
									<input type="button" id="addChartBtn" name="product3" onClick="submitForm('3','productFunction.php')" value="Add Cart" />
								</form>
							</td>
						</tr>
                        <tr>
							<td style="height: 450px; text-align:center;">							
								<p>
									<a class="image_text" href="product22.php" title="Price = S$1347">
									<img src="image/wedding dress/Quinceanera Dresses/dress_4.jpg" width="280px" height="400px" border="3"/>
									</a>
								</p>								
							</td>
							<td style="height: 450px; text-align:center;">
								<p>
									<a class="image_text" href="product23.php" title="Price = S$1122">
									<img src="image/wedding dress/Quinceanera Dresses/dress_5.jpg" width="280px" height="400px" border="3"/>
									</a>
								</p>
							</td>
							<td style="height: 450px; text-align:center;">
								<p>
									<a class="image_text" href="product24.php" title="Price = S$1422">
									<img src="image/wedding dress/Quinceanera Dresses/dress_6.jpg" width="280px" height="400px" border="3"/>
									</a>
								</p>
							</td>
						</tr>
						<tr>
							<td class="product_details">
								<form  id="product4" name="product4" action="productFunction.php" method="post">
									<input type="hidden" name="ProCode" value="P0022">	
									<input type="hidden" name="ProPrice" value="1347">
									<input type="hidden" name="ProDesc" value=" A strapless Quinceanera ball gown made of organza and sequined tulle. It has sweetheart neckline, lace-up back, chapel train, and a bodice with beads, rhinestones, and pearls. Short sleeve bolero.">
									<input type="hidden" name="ProImageName" value="dress_22.jpg">
									<input type="hidden" name="quantity" value="1">
								
									<input type="button" id="detailsBtn" name="product4" onClick="submitForm('4', 'product22.php')" value="Details" />
									<input type="button" id="addChartBtn" name="product4" onClick="submitForm('4','productFunction.php')" value="Add Cart" />
								</form>
							</td>
							<td class="product_details">
								<form  id="product5" name="product5" action="productFunction.php" method="post">
									<input type="hidden" name="ProCode" value="P0023">	
									<input type="hidden" name="ProPrice" value="1122">
									<input type="hidden" name="ProDesc" value="Strapless, taffeta ball gown with sweetheart neckline, basque waist, corset bodice, sequins, embroidery and ruffle-tired skirt with lace- up back and bolero.">
									<input type="hidden" name="ProImageName" value="dress_23.jpg">
									<input type="hidden" name="quantity" value="1">
								
									<input type="button" id="detailsBtn" name="product5" onClick="submitForm('5', 'product23.php')" value="Details" />
									<input type="button" id="addChartBtn" name="product5" onClick="submitForm('5','productFunction.php')" value="Add Cart" />
								</form>
							</td>
							<td class="product_details">
								<form  id="product6" name="product6" action="productFunction.php" method="post">
									<input type="hidden" name="ProCode" value="P0024">	
									<input type="hidden" name="ProPrice" value="1422">
									<input type="hidden" name="ProDesc" value="strapless sweetheart Quinceanera ball gown with lace-up back, embroidery embellished with bead bodice and waist detail, and tulip pannier skirt. Matching short sleeve illusion bolero included.">
									<input type="hidden" name="ProImageName" value="dress_24.jpg">
									<input type="hidden" name="quantity" value="1">
								
									<input type="button" id="detailsBtn" name="product6" onClick="submitForm('6', 'product24.php')" value="Details" />
									<input type="button" id="addChartBtn" name="product6" onClick="submitForm('6','productFunction.php')" value="Add Cart" />
								</form>
							</td>
						</tr>
					</table>
					<br/>
					
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
</body>

</html>