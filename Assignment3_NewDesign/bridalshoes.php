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
				<h1>Bridal Shoes</h1>
				<div class="product_catalog">
					<table class="product_lists">
						<tr>
							<td style="height: 450px; text-align:center;">							
								<p>
									<a class="image_text" href="product43.php" title="Price = S$95">
									<img src="image/shoes/bridal shoes/shoe_1.jpg" width="280px" height="280px" border="3"/>
									</a>
								</p>								
							</td>
							
							<td style="height: 450px; text-align:center;">
								<p>
									<a class="image_text" href="product44.php" title="Price = S$135">
									<img src="image/shoes/bridal shoes/shoe_2.jpg" width="280px" height="280px" border="3"/>
									</a>
								</p>
							</td>
                            <td style="height: 450px; text-align:center;">							
								<p>
									<a class="image_text" href="product45.php" title="Price = S$112">
									<img src="image/shoes/bridal shoes/shoe_3.jpg" width="280px" height="280px" border="3"/>
									</a>
								</p>								
							</td>
						</tr>
						<tr>
							<td class="product_details">
								<form id="product" name="product" action="productFunction.php" method="post">
									<input type="hidden" name="ProCode" value="P0043">	
									<input type="hidden" name="ProPrice" value="95">
									<input type="hidden" name="ProDesc" value="This amazing peep toe pump bridal shoe by Nina is the Maybell-YS. The flower decoration at the heel truly makes this shoe unique. Not only is this shoe gorgeous, it is comfortable too, with the platform under the ball of the foot. Sizes available range from 6-10. Maybell-YS is available in ivory satin only.">
									<input type="hidden" name="ProImageName" value="shoe_13.jpg">
									<input type="hidden" name="quantity" value="1">
																		
									<input type="button" id="detailsBtn" name="product" onClick="submitForm('1', 'product43.php')" value="Details" />
									<input type="button" id="addChartBtn" name="product" onClick="submitForm('1','productFunction.php')" value="Add Cart" />									
								</form>
							</td>
							<td class="product_details">
								<form id="product2" name="product2" action="productFunction.php" method="post">
									<input type="hidden" name="ProCode" value="P0044">	
									<input type="hidden" name="ProPrice" value="135">
									<input type="hidden" name="ProDesc" value="ulie-A302 by Allure Bridals is the perfect peep toe wedding shoe! The beautiful lace covered bodice of the shoe will make you feel like a princess, and the adoreable bow on the heel adds a girly touch! The 4 1/4 inch heel is manageable due to the 3/4 inch platform. If you are interested in additional cushioning, we suggest you try Tip Toes or Heavenly Heelz by Foot Petals. Sizes available range from 5.5-10,11.">
									<input type="hidden" name="ProImageName" value="shoe_14.jpg">
									<input type="hidden" name="quantity" value="1">
																		
									<input type="button" id="detailsBtn" name="product2" onClick="submitForm('2', 'product44.php')" value="Details" />
									<input type="button" id="addChartBtn" name="product2" onClick="submitForm('2','productFunction.php')" value="Add Cart" />									
								</form>
							</td>
							<td class="product_details">
								<form id="product3" name="product3" action="productFunction.php" method="post">
									<input type="hidden" name="ProCode" value="P0045">	
									<input type="hidden" name="ProPrice" value="112">
									<input type="hidden" name="ProDesc" value="This amazing peep toe pump bridal shoe by Nina is the Maybell-YS. The flower decoration at the heel truly makes this shoe unique. Not only is this shoe gorgeous, it is comfortable too, with the platform under the ball of the foot. Sizes available range from 6-10. Maybell-YS is available in ivory satin only.">
									<input type="hidden" name="ProImageName" value="shoe_3.jpg">
									<input type="hidden" name="quantity" value="1">
																		
									<input type="button" id="detailsBtn" name="product3" onClick="submitForm('3', 'product45.php')" value="Details" />
									<input type="button" id="addChartBtn" name="product3" onClick="submitForm('3','productFunction.php')" value="Add Cart" />									
								</form>
							</td>
						</tr>
                        <tr>
							<td style="height: 450px; text-align:center;">							
								<p>
									<a class="image_text" href="product46.php" title="Price = S$75">
									<img src="image/shoes/bridal shoes/shoe_4.jpg" width="280px" height="280px" border="3"/>
									</a>
								</p>								
							</td>
							
							<td style="height: 450px; text-align:center;">
								<p>
									<a class="image_text" href="product47.php" title="Price = S$73">
									<img src="image/shoes/bridal shoes/shoe_5.jpg" width="280px" height="280px" border="3"/>
									</a>
								</p>
							</td>
                            <td style="height: 450px; text-align:center;">
								<p>
									<a class="image_text" href="product48.php" title="Price = S$125">
									<img src="image/shoes/bridal shoes/shoe_6.jpg" width="280px" height="280px" border="3"/>
									</a>
								</p>
							</td>
						</tr>
						<tr>
							<td class="product_details">
								<form id="product4" name="product4" action="productFunction.php" method="post">
									<input type="hidden" name="ProCode" value="P0046">	
									<input type="hidden" name="ProPrice" value="75">
									<input type="hidden" name="ProDesc" value="Percy-1-Ivory by Blossom is a beautiful choice for an ivory lace shoe. This style can be worn by so many women. Percy is great for a date night, or a bride who needs an ivory lace shoe to compliment her wedding gown. Your foot will be secure in this peep toe platform with closed pump heel. If you are interested in additional cushioning for the big day, we suggest Tip Toes or Heavenly Heelz by Foot Petals. Sizes available range from 7-11.">
									<input type="hidden" name="ProImageName" value="shoe_16.jpg">
									<input type="hidden" name="quantity" value="1">
																		
									<input type="button" id="detailsBtn" name="product4" onClick="submitForm('4', 'product46.php')" value="Details" />
									<input type="button" id="addChartBtn" name="product4" onClick="submitForm('4','productFunction.php')" value="Add Cart" />									
								</form>
							</td>
							<td class="product_details">
								<form id="product5" name="product5" action="productFunction.php" method="post">
									<input type="hidden" name="ProCode" value="P0047">	
									<input type="hidden" name="ProPrice" value="73">
									<input type="hidden" name="ProDesc" value="Vice-93 white lace is a unique shoe by Blossom that you can wear again and again after the big event! The shimmery platform style features a rhinstone covered ankle strap. Vice is sure to stand out on the dance floor and keep you secure. Vice is adorned with glitter fabric on the toe bed, the heel and the ankle strap. The fabric over the toe is an off white laces and features rhinestone coverd straps around the edges. This subtle white could compliment a white or light ivory gown. Be sure to check out our selection of Foot Petal products in the Shoe Cushion section of the website.">
									<input type="hidden" name="ProImageName" value="shoe_17.jpg">
									<input type="hidden" name="quantity" value="1">
																		
									<input type="button" id="detailsBtn" name="product5" onClick="submitForm('5', 'product47.php')" value="Details" />
									<input type="button" id="addChartBtn" name="product5" onClick="submitForm('5','productFunction.php')" value="Add Cart" />									
								</form>
							</td>
							<td class="product_details">
								<form id="product6" name="product6" action="productFunction.php" method="post">
									<input type="hidden" name="ProCode" value="P0048">	
									<input type="hidden" name="ProPrice" value="125">
									<input type="hidden" name="ProDesc" value="This stylish and embellished bridal shoe by Dyeables is Rosa. The elegant peep toe pump style is sure to compliment nearly any wedding gown. Even better, the platform adds the perfect height while maintaining stabilty. Rosa is available in dyeable white satin or ivory satin. This bridal shoe looks fantastic in a variety of colors and can be customized before or after your wedding! If you are interested in additional cushioning for the big day, we suggest Tip Toes or Heavenly Heelz by Foot Petals. Sizes available range from 5-11. If you love this style but would like a higher heel, check out the Ida by Dyeables!">
									<input type="hidden" name="ProImageName" value="shoe_18.jpg">
									<input type="hidden" name="quantity" value="1">
																		
									<input type="button" id="detailsBtn" name="product6" onClick="submitForm('6', 'product48.php')" value="Details" />
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