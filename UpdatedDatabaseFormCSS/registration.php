<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login/Registration</title>
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
</script>


</head>

<body onLoad="Slider();">
<div class="main">
	<!---Header--->
	<div class="header">
		<div class="header_resize">
			<div class="logo">
				<a href="index.html"><img src="image/logo.png" width="130" height="100" alt=""/></a>
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
					<img id="2"  src="image/slide2.jpg" width="960" height="360" border="0"/>
					<img id="3"  src="image/slide3.jpg" width="960" height="360" border="0"/>
					<img id="4"  src="image/slide4.jpg" width="960" height="360" border="0"/>
					<img id="5"  src="image/slide5.jpg" width="960" height="360" border="0"/>									
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
			<div class="main">
            
			</div>
			<div class="sidebar">
				<div class="gadget">
				  <h2><span>Dresses & Accessories</span></h2>
				  <div class="clr"></div>
				  <ul class="sidebar_menu">
					<li><h4>Dresses</h4>
						<ul class="slidebar_submenu">
							<li><a href="#">Wedding Dresses</a></li>
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
            <div class="formSection">
            <form name='login' action="registration.php" method="POST"  >
  <fieldset>
<legend>Sign in</legend>
 
<p>
<label for="LoginAddress">Username</label> 
<input type="text" name="login" size="50" placeholder="Enter your email address" required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="please enter correct email address"/> 
</p>
<p>
<label for="password">Password</label>
<input type="password" name="login_password" id="login_password"  required="required" />
</p>
<p>
<input type="submit" name="login" value="Sign in" /> 
</p>
</fieldset>
</form>
</br>
</br>




            
            <form name='registration' action="registration.html" onSubmit="OnSubmitForm()" method="POST"  >
  <fieldset>
<legend>Register For Free</legend>

  
<p>
<label for="name"><b>*</b>First Name</label> 
<input type="text" name="firstname" size="50" required="required" pattern="[a-zA-Z][a-zA-Z ]{4,}" title="Please enter your first name" /> 
</p>
<p>
<label for="name"><b>*</b>Last Name</label> 
<input type="text" name="lastname" size="50" required="required" pattern="[a-zA-Z][a-zA-Z ]{4,}" title="Please enter your last name" /> 
</p>
<p>
<label for="email"><b>*</b>Email</label>  
<input type="text" name="email" size="50" placeholder="We wont spam you :)" required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="please enter correct email address"/> 
</p>
<p>
<label for="password"><b>*</b>Password</label>
<input type="password" name="password" id="password" placeholder="Be clever" required="required" />
</p>
<p>
<label for="confirm"><b>*</b>Confirm Password</label>
<input type="password" name="password_confirm" id="password_confirm"  placeholder="Say it again" required="required" oninput="check(this)"/></p>     
           
 <script language='javascript' type='text/javascript'>
function check(input) {
if (input.value != document.getElementById('password').value) {
input.setCustomValidity('Password Must be Matching.');
} else {
// input is valid -- reset the error message
input.setCustomValidity('');
}
}
</script> 
<p>              
<label for="Occupation"><b>*</b>Occupation</label>  
<input type="text" name="occupation" size="60"  required="required"/>
</p>
<p>
<label for="ContactNumber">Contact Number</label>  
<input type="tel" name="contactnumber" size="60" />
</p>
<p> 
<label for="address">Address</label>  
<textarea name="address" id="address"></textarea />
</p>
<p>
<label for="country">Country</label>  
<select name="country"> 
<option selected="" value="Default">(Please select a country)</option>  
<option value="AF">Afghanistan</option>
<option value="AX">��land Islands</option>
<option value="AL">Albania</option>
<option value="DZ">Algeria</option>
<option value="AS">American Samoa</option>
<option value="AD">Andorra</option>
<option value="AO">Angola</option>
<option value="AI">Anguilla</option>
<option value="AQ">Antarctica</option>
<option value="AG">Antigua and Barbuda</option>
<option value="AR">Argentina</option>
<option value="AM">Armenia</option>
<option value="AW">Aruba</option>
<option value="AU">Australia</option>
<option value="AT">Austria</option>
<option value="AZ">Azerbaijan</option>
<option value="BS">Bahamas</option>
<option value="BH">Bahrain</option>
<option value="BD">Bangladesh</option>
<option value="BB">Barbados</option>
<option value="BY">Belarus</option>
<option value="BE">Belgium</option>
<option value="BZ">Belize</option>
<option value="BJ">Benin</option>
<option value="BM">Bermuda</option>
<option value="BT">Bhutan</option>
<option value="BO">Bolivia, Plurinational State of</option>
<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
<option value="BA">Bosnia and Herzegovina</option>
<option value="BW">Botswana</option>
<option value="BV">Bouvet Island</option>
<option value="BR">Brazil</option>
<option value="IO">British Indian Ocean Territory</option>
<option value="BN">Brunei Darussalam</option>
<option value="BG">Bulgaria</option>
<option value="BF">Burkina Faso</option>
<option value="BI">Burundi</option>
<option value="KH">Cambodia</option>
<option value="CM">Cameroon</option>
<option value="CA">Canada</option>
<option value="CV">Cape Verde</option>
<option value="KY">Cayman Islands</option>
<option value="CF">Central African Republic</option>
<option value="TD">Chad</option>
<option value="CL">Chile</option>
<option value="CN">China</option>
<option value="CX">Christmas Island</option>
<option value="CC">Cocos (Keeling) Islands</option>
<option value="CO">Colombia</option>
<option value="KM">Comoros</option>
<option value="CG">Congo</option>
<option value="CD">Congo, the Democratic Republic of the</option>
<option value="CK">Cook Islands</option>
<option value="CR">Costa Rica</option>
<option value="CI">C��te d'Ivoire</option>
<option value="HR">Croatia</option>
<option value="CU">Cuba</option>
<option value="CW">Cura��ao</option>
<option value="CY">Cyprus</option>
<option value="CZ">Czech Republic</option>
<option value="DK">Denmark</option>
<option value="DJ">Djibouti</option>
<option value="DM">Dominica</option>
<option value="DO">Dominican Republic</option>
<option value="EC">Ecuador</option>
<option value="EG">Egypt</option>
<option value="SV">El Salvador</option>
<option value="GQ">Equatorial Guinea</option>
<option value="ER">Eritrea</option>
<option value="EE">Estonia</option>
<option value="ET">Ethiopia</option>
<option value="FK">Falkland Islands (Malvinas)</option>
<option value="FO">Faroe Islands</option>
<option value="FJ">Fiji</option>
<option value="FI">Finland</option>
<option value="FR">France</option>
<option value="GF">French Guiana</option>
<option value="PF">French Polynesia</option>
<option value="TF">French Southern Territories</option>
<option value="GA">Gabon</option>
<option value="GM">Gambia</option>
<option value="GE">Georgia</option>
<option value="DE">Germany</option>
<option value="GH">Ghana</option>
<option value="GI">Gibraltar</option>
<option value="GR">Greece</option>
<option value="GL">Greenland</option>
<option value="GD">Grenada</option>
<option value="GP">Guadeloupe</option>
<option value="GU">Guam</option>
<option value="GT">Guatemala</option>
<option value="GG">Guernsey</option>
<option value="GN">Guinea</option>
<option value="GW">Guinea-Bissau</option>
<option value="GY">Guyana</option>
<option value="HT">Haiti</option>
<option value="HM">Heard Island and McDonald Islands</option>
<option value="VA">Holy See (Vatican City State)</option>
<option value="HN">Honduras</option>
<option value="HK">Hong Kong</option>
<option value="HU">Hungary</option>
<option value="IS">Iceland</option>
<option value="IN">India</option>
<option value="ID">Indonesia</option>
<option value="IR">Iran, Islamic Republic of</option>
<option value="IQ">Iraq</option>
<option value="IE">Ireland</option>
<option value="IM">Isle of Man</option>
<option value="IL">Israel</option>
<option value="IT">Italy</option>
<option value="JM">Jamaica</option>
<option value="JP">Japan</option>
<option value="JE">Jersey</option>
<option value="JO">Jordan</option>
<option value="KZ">Kazakhstan</option>
<option value="KE">Kenya</option>
<option value="KI">Kiribati</option>
<option value="KP">Korea, Democratic People's Republic of</option>
<option value="KR">Korea, Republic of</option>
<option value="KW">Kuwait</option>
<option value="KG">Kyrgyzstan</option>
<option value="LA">Lao People's Democratic Republic</option>
<option value="LV">Latvia</option>
<option value="LB">Lebanon</option>
<option value="LS">Lesotho</option>
<option value="LR">Liberia</option>
<option value="LY">Libya</option>
<option value="LI">Liechtenstein</option>
<option value="LT">Lithuania</option>
<option value="LU">Luxembourg</option>
<option value="MO">Macao</option>
<option value="MK">Macedonia, the former Yugoslav Republic of</option>
<option value="MG">Madagascar</option>
<option value="MW">Malawi</option>
<option value="MY">Malaysia</option>
<option value="MV">Maldives</option>
<option value="ML">Mali</option>
<option value="MT">Malta</option>
<option value="MH">Marshall Islands</option>
<option value="MQ">Martinique</option>
<option value="MR">Mauritania</option>
<option value="MU">Mauritius</option>
<option value="YT">Mayotte</option>
<option value="MX">Mexico</option>
<option value="FM">Micronesia, Federated States of</option>
<option value="MD">Moldova, Republic of</option>
<option value="MC">Monaco</option>
<option value="MN">Mongolia</option>
<option value="ME">Montenegro</option>
<option value="MS">Montserrat</option>
<option value="MA">Morocco</option>
<option value="MZ">Mozambique</option>
<option value="MM">Myanmar</option>
<option value="NA">Namibia</option>
<option value="NR">Nauru</option>
<option value="NP">Nepal</option>
<option value="NL">Netherlands</option>
<option value="NC">New Caledonia</option>
<option value="NZ">New Zealand</option>
<option value="NI">Nicaragua</option>
<option value="NE">Niger</option>
<option value="NG">Nigeria</option>
<option value="NU">Niue</option>
<option value="NF">Norfolk Island</option>
<option value="MP">Northern Mariana Islands</option>
<option value="NO">Norway</option>
<option value="OM">Oman</option>
<option value="PK">Pakistan</option>
<option value="PW">Palau</option>
<option value="PS">Palestinian Territory, Occupied</option>
<option value="PA">Panama</option>
<option value="PG">Papua New Guinea</option>
<option value="PY">Paraguay</option>
<option value="PE">Peru</option>
<option value="PH">Philippines</option>
<option value="PN">Pitcairn</option>
<option value="PL">Poland</option>
<option value="PT">Portugal</option>
<option value="PR">Puerto Rico</option>
<option value="QA">Qatar</option>
<option value="RE">R��union</option>
<option value="RO">Romania</option>
<option value="RU">Russian Federation</option>
<option value="RW">Rwanda</option>
<option value="BL">Saint Barth��lemy</option>
<option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
<option value="KN">Saint Kitts and Nevis</option>
<option value="LC">Saint Lucia</option>
<option value="MF">Saint Martin (French part)</option>
<option value="PM">Saint Pierre and Miquelon</option>
<option value="VC">Saint Vincent and the Grenadines</option>
<option value="WS">Samoa</option>
<option value="SM">San Marino</option>
<option value="ST">Sao Tome and Principe</option>
<option value="SA">Saudi Arabia</option>
<option value="SN">Senegal</option>
<option value="RS">Serbia</option>
<option value="SC">Seychelles</option>
<option value="SL">Sierra Leone</option>
<option value="SG">Singapore</option>
<option value="SX">Sint Maarten (Dutch part)</option>
<option value="SK">Slovakia</option>
<option value="SI">Slovenia</option>
<option value="SB">Solomon Islands</option>
<option value="SO">Somalia</option>
<option value="ZA">South Africa</option>
<option value="GS">South Georgia and the South Sandwich Islands</option>
<option value="SS">South Sudan</option>
<option value="ES">Spain</option>
<option value="LK">Sri Lanka</option>
<option value="SD">Sudan</option>
<option value="SR">Suriname</option>
<option value="SJ">Svalbard and Jan Mayen</option>
<option value="SZ">Swaziland</option>
<option value="SE">Sweden</option>
<option value="CH">Switzerland</option>
<option value="SY">Syrian Arab Republic</option>
<option value="TW">Taiwan, Province of China</option>
<option value="TJ">Tajikistan</option>
<option value="TZ">Tanzania, United Republic of</option>
<option value="TH">Thailand</option>
<option value="TL">Timor-Leste</option>
<option value="TG">Togo</option>
<option value="TK">Tokelau</option>
<option value="TO">Tonga</option>
<option value="TT">Trinidad and Tobago</option>
<option value="TN">Tunisia</option>
<option value="TR">Turkey</option>
<option value="TM">Turkmenistan</option>
<option value="TC">Turks and Caicos Islands</option>
<option value="TV">Tuvalu</option>
<option value="UG">Uganda</option>
<option value="UA">Ukraine</option>
<option value="AE">United Arab Emirates</option>
<option value="GB">United Kingdom</option>
<option value="US">United States</option>
<option value="UM">United States Minor Outlying Islands</option>
<option value="UY">Uruguay</option>
<option value="UZ">Uzbekistan</option>
<option value="VU">Vanuatu</option>
<option value="VE">Venezuela, Bolivarian Republic of</option>
<option value="VN">Viet Nam</option>
<option value="VG">Virgin Islands, British</option>
<option value="VI">Virgin Islands, U.S.</option>
<option value="WF">Wallis and Futuna</option>
<option value="EH">Western Sahara</option>
<option value="YE">Yemen</option>
<option value="ZM">Zambia</option>
<option value="ZW">Zimbabwe</option> 
</select>
</p>
<p>  
<label for="zip">ZIP Code</label>  
<input type="text" name="zip"/>  
</p>
 
 
<p>
<input type="submit" name="Register" value="Submit" />  
<input type="reset" name="Reset" value="Reset"/>
</p>  
</fieldset>

</form>

<?php

if (isset($_POST['Register']) )
{

    $Uname = $_POST['email'];
	$Fname =$_POST['firstname'];
	$Lname =$_POST['lastname'];
    $Email = $_POST['email'];
$Occ  = $_POST['occupation'];
$Contact = $_POST['contactnumber'];
$Address = $_POST['address'];
$Country = $_POST['country'];
$Zip = $_POST['zip'];

$Psw  = $_POST['password_confirm'];

 include('Functions.php');

$objFunction = new Functions();
$objFunction->Insert_User($Uname,$Fname,$Lname,$Email,$Occ,$Contact,$Address,$Country,$Zip,$Psw); 
echo "<script type='text/javascript'> alert('added successfully') 

</script>";
//header("Location: login.php");
}

?>
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
<script>
	$('.testimonials-slider').bxSlider({
		slideWidth: 296,
		minSlides: 1,
		maxSlides: 1,
		slideMargin: 32,
		auto: true,	
		autoControls: true
	  });
</script>
</body>
</html>
