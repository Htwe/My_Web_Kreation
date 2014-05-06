<html>
<head>
<title>Yes I Do | Size Chart</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
<script src='js/jquery.zoom.js'></script>
<script>
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
	$(document).ready(function(){		
		$('#ex').zoom({ on:'click' });	
	});
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
				  <li><a href="index.php"><span><strong>Home</strong></span></a>
                  <ul>
						<li><a href="#"><strong>Wedding Dresses</strong></a></li>
						<li><a href="#"><strong>Shoes</strong></a></li>
						<li><a href="#"><strong>Accessories</strong></a></li>

					</ul>
                    </li>				  
				  <li class="active"><a href="#"><span><strong>Knowledge</strong></span></a>
					<ul>
						<li><a href="sizeChart.php"><strong>Size Chart</strong></a></li>
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
				<div class="size_chart">
					<h1 align="center">Choose your size Here</h1>
                    <img src="image/Knowledge/sizeChart.jpg" style="padding-left:200px"/><br><br>
                    <table class="sizeC">
			  <tr>
							<td id="first_col">Standard Size</td>
							<td colspan="4" style="text-align:center;">S</td>
							<td colspan="4" style="text-align:center;">M</td>
							<td colspan="4" style="text-align:center;">L</td>
							<td colspan="4" style="text-align:center;">XL</td>
						</tr>
						<tr>
							<td id="first_col">US Size</td>
							<td colspan="2" style="text-align:center;">2</td>
							<td colspan="2" style="text-align:center;">4</td>
							<td colspan="2" style="text-align:center;">6</td>
							<td colspan="2" style="text-align:center;">8</td>
							<td colspan="2" style="text-align:center;">10</td>
							<td colspan="2" style="text-align:center;">12</td>
							<td colspan="2" style="text-align:center;">14</td>
							<td colspan="2" style="text-align:center;">16</td>
						</tr>
						<tr>
							<td id="first_col">Europe Size</td>
							<td colspan="2" style="text-align:center;">32</td>
							<td colspan="2" style="text-align:center;">34</td>
							<td colspan="2" style="text-align:center;">36</td>
							<td colspan="2" style="text-align:center;">38</td>
							<td colspan="2" style="text-align:center;">40</td>
							<td colspan="2" style="text-align:center;">42</td>
							<td colspan="2" style="text-align:center;">44</td>
							<td colspan="2" style="text-align:center;">46</td>
						</tr>
						<tr>
							<td id="first_col">UK size</td>
							<td colspan="2" style="text-align:center;">4</td>
							<td colspan="2" style="text-align:center;">6</td>
							<td colspan="2" style="text-align:center;">8</td>
							<td colspan="2" style="text-align:center;">10</td>
							<td colspan="2" style="text-align:center;">12</td>
							<td colspan="2" style="text-align:center;">14</td>
							<td colspan="2" style="text-align:center;">16</td>
							<td colspan="2" style="text-align:center;">18</td>
						</tr>
						<tr>
							<td id="first_col"></td>
							<td>inch</td>
							<td>cm</td>
							<td>inch</td>
							<td>cm</td>
							<td>inch</td>
							<td>cm</td>
							<td>inch</td>
							<td>cm</td>
							<td>inch</td>
							<td>cm</td>
							<td>inch</td>
							<td>cm</td>
							<td>inch</td>
							<td>cm</td>
							<td>inch</td>
							<td>cm</td>							
						</tr>
						<tr>
							<td id="first_col">Bust</td>
							<td>321/2</td>
							<td>83</td>
							<td>331/2</td>
							<td>84</td>
							<td>341/2</td>
							<td>88</td>
							<td>351/2</td>
							<td>90</td>
							<td>361/2</td>
							<td>93</td>
							<td>38</td>
							<td>97</td>
							<td>391/2</td>
							<td>100</td>
							<td>41</td>
							<td>104</td>	
						</tr>
						<tr>
							<td id="first_col">Waist</td>
							<td>251/2</td>
							<td>65</td>
							<td>261/2</td>
							<td>68</td>
							<td>271/2</td>
							<td>70</td>
							<td>281/2</td>
							<td>72</td>
							<td>291/2</td>
							<td>75</td>
							<td>31</td>
							<td>79</td>
							<td>321/2</td>
							<td>83</td>
							<td>34</td>
							<td>86</td>	
						</tr>
						<tr>
							<td id="first_col">Hips</td>
							<td>353/4</td>
							<td>91</td>
							<td>363/4</td>
							<td>92</td>
							<td>373/4</td>
							<td>96</td>
							<td>383/4</td>
							<td>98</td>
							<td>393/4</td>
							<td>101</td>
							<td>411/4</td>
							<td>105</td>
							<td>423/4</td>
							<td>108</td>
							<td>441/4</td>
							<td>112</td>	
						</tr>
						<tr>
							<td id="first_col">Shoulder to Floor(without shoes)</td>
							<td>58</td>
							<td>147</td>
							<td>58</td>
							<td>147</td>
							<td>59</td>
							<td>150</td>
							<td>59</td>
							<td>150</td>
							<td>60</td>
							<td>152</td>
							<td>60</td>
							<td>152</td>
							<td>61</td>
							<td>155</td>
							<td>61</td>
							<td>155</td>	
						</tr>
						<tr>
							<td id="first_col">Net Height</td>
							<td>63</td>
							<td>160</td>
							<td>63</td>
							<td>160</td>
							<td>65</td>
							<td>165</td>
							<td>65</td>
							<td>165</td>
							<td>67</td>
							<td>170</td>
							<td>67</td>
							<td>170</td>
							<td>69</td>
							<td>175</td>
							<td>69</td>
							<td>175</td>	
						</tr>
					</table>
					<br/>
					<table class="sizeC">
						<tr>
							<td id="first_col">Plus Size</td>
							<td colspan="4" style="text-align:center;">S</td>
							<td colspan="4" style="text-align:center;">M</td>
							<td colspan="4" style="text-align:center;">L</td>
							<td colspan="4" style="text-align:center;">XL</td>
						</tr>
						<tr>
							<td id="first_col">US Size</td>
							<td colspan="2" style="text-align:center;">18</td>
							<td colspan="2" style="text-align:center;">20</td>
							<td colspan="2" style="text-align:center;">22</td>
							<td colspan="2" style="text-align:center;">24</td>
							<td colspan="2" style="text-align:center;">26</td>
							<td colspan="2" style="text-align:center;">28</td>
							<td colspan="2" style="text-align:center;">30</td>							
						</tr>
						<tr>
							<td id="first_col">Europe Size</td>
							<td colspan="2" style="text-align:center;">48</td>
							<td colspan="2" style="text-align:center;">50</td>
							<td colspan="2" style="text-align:center;">52</td>
							<td colspan="2" style="text-align:center;">54</td>
							<td colspan="2" style="text-align:center;">56</td>
							<td colspan="2" style="text-align:center;">58</td>
							<td colspan="2" style="text-align:center;">60</td>							
						</tr>
						<tr>
							<td id="first_col">UK size</td>
							<td colspan="2" style="text-align:center;">20</td>
							<td colspan="2" style="text-align:center;">22</td>
							<td colspan="2" style="text-align:center;">24</td>
							<td colspan="2" style="text-align:center;">26</td>
							<td colspan="2" style="text-align:center;">28</td>
							<td colspan="2" style="text-align:center;">30</td>
							<td colspan="2" style="text-align:center;">32</td>							
						</tr>
						<tr>
							<td id="first_col"></td>
							<td>inch</td>
							<td>cm</td>
							<td>inch</td>
							<td>cm</td>
							<td>inch</td>
							<td>cm</td>
							<td>inch</td>
							<td>cm</td>
							<td>inch</td>
							<td>cm</td>
							<td>inch</td>
							<td>cm</td>
							<td>inch</td>
							<td>cm</td>													
						</tr>
						<tr>
							<td id="first_col">Bust</td>
							<td>43</td>
							<td>109</td>
							<td>45</td>
							<td>114</td>
							<td>47</td>
							<td>119</td>
							<td>49</td>
							<td>124</td>
							<td>51</td>
							<td>130</td>
							<td>53</td>
							<td>135</td>
							<td>55</td>
							<td>140</td>								
						</tr>
						<tr>
							<td id="first_col">Waist</td>
							<td>361/4</td>
							<td>92</td>
							<td>381/2</td>
							<td>98</td>
							<td>403/4</td>
							<td>104</td>
							<td>43</td>
							<td>109</td>
							<td>451/4</td>
							<td>115</td>
							<td>471/2</td>
							<td>121</td>
							<td>491/2</td>
							<td>127</td>							
						</tr>
						<tr>
							<td id="first_col">Hips</td>
							<td>451/2</td>
							<td>116</td>
							<td>471/2</td>
							<td>121</td>
							<td>491/2</td>
							<td>126</td>
							<td>511/2</td>
							<td>131</td>
							<td>531/2</td>
							<td>136</td>
							<td>551/2</td>
							<td>141</td>
							<td>571/2</td>
							<td>146</td>							
						</tr>
						<tr>
							<td id="first_col">Shoulder to Floor(without shoes)</td>
							<td>61</td>
							<td>155</td>
							<td>61</td>
							<td>155</td>
							<td>61</td>
							<td>155</td>
							<td>61</td>
							<td>155</td>
							<td>61</td>
							<td>155</td>
							<td>61</td>
							<td>155</td>
							<td>61</td>
							<td>155</td>							
						</tr>						
					</table>
					<br/>
					<h2>Kid's Size Chart</h2>
					<table class="sizeC">
						<tr>
							<td id="first_col">US</td>
							<td>2</td>
							<td>3</td>
							<td>4</td>
							<td>5</td>
							<td>6</td>							
							<td>8</td>
							<td>9</td>
							<td>10</td>
							<td>11</td>
							<td>12</td>
							<td>13</td>
							<td>14</td>							
						</tr>						
						<tr>
							<td id="first_col">Bust</td>
							<td>21</td>
							<td>22</td>
							<td>23</td>
							<td>24</td>
							<td>25</td>
							<td>27</td>
							<td>28</td>
							<td>28.5</td>
							<td>29</td>
							<td>30</td>
							<td>31</td>
							<td>32</td>															
						</tr>
						<tr>
							<td id="first_col">Waist</td>
							<td>20</td>
							<td>20.5</td>
							<td>21</td>
							<td>21.5</td>
							<td>22</td>
							<td>23.5</td>
							<td>24</td>
							<td>24.5</td>
							<td>25</td>
							<td>25.5</td>
							<td>26</td>
							<td>27</td>														
						</tr>
						<tr>
							<td id="first_col">Hips</td>
							<td>22</td>
							<td>23</td>
							<td>24</td>
							<td>25</td>
							<td>26</td>
							<td>28</td>
							<td>29</td>
							<td>30</td>
							<td>31</td>
							<td>32</td>
							<td>33</td>
							<td>34</td>													
						</tr>
						<tr>
							<td id="first_col">Height from Head to Floor(inch)</td>
							<td>35-36</td>
							<td>36-40</td>
							<td>40-44</td>
							<td>44-46</td>
							<td>46-48</td>
							<td>50-51</td>
							<td>51-54</td>
							<td>54-56</td>
							<td>56-57</td>
							<td>57-58</td>
							<td>58-60</td>
							<td>60-61</td>													
						</tr>						
					</table>
					<br/>
					<h1>Measure Tips</h1>					
					<div style="width:900px; height: 260px; color:#000">
					<hr style="width:900px; border:2px solid #980000;align:left; color:black;"/>
						<p style="font-size:14px; color:#0000000;"><strong>Bust: </strong>This is not the same as your lingerie size. Instead, this is a measurement of the fullest part of your bust. While keeping your arms relaxed and at your sides, run the tape across the widest part of your back and fullest part of your bust.</p>
						<p style="font-size:14px; color:#0000000;"><strong>Sleeve: </strong>Place the tape in your armpit. Measure your straight arm and stop at your wrist.</p>
						<p style="font-size:14px; color:#0000000;"><strong>Waist: </strong>This is your natural waistline, or the smallest part of your waist. It is typically found an inch or two above your belly button. Do not suck in your waist, although you may be tempted to. You want to be able to breathe on your wedding day-and eat a slice to cake, too.</p>
						<p style="font-size:14px; color:#0000000;"><strong>Hips: </strong>This is a measurement of the fullest part of your hips. Run the tape across the hipbone.</p>
						<p style="font-size:14px; color:#0000000;"><strong>Shoulder to the floor: </strong>Stand straight with feet together. Measure from the center of your collarbone straight down to the floor.</p>
						<p style="font-size:14px; color:#0000000;"><strong>Height: </strong>Stand straight with feet together. Begin at the top of the head and pull tape down to the floor.</p>
					</div>
					
				</div>
				<div class="clr"></div>
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