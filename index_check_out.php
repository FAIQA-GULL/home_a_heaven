<?php 
include('conn.php');
include('functions.php');


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="bst.css">

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="style_sheet.css">
</head>

<style type="text/css">
	

	body{
		font-family: Garamond, Baskerville, "Baskerville Old Face", "Hoefler Text", "Times New Roman", serif;

	}
	.dropdown:hover .dropdown-menu {
	  display: block;

	}
	
	.form-control{
		height:  50px;
	}
	
	

	/*td{
		color: gray;
	}
	td a{
		border:1px solid gray;
		padding: 10px;
		color: black;
		text-decoration: none !important;
		border-color: #eee;

	}
	td a:hover{
		background-color: #eee;
		color: black;
	}*/
	.btn-primary{
		width: 180px;
		height: 70px;
	}
/*	.btn{
		border-radius: 0;
	}*/
	.btn-outline-dark{
		border-color: #eee;
	}

		.vl {
		/*margin-top: 79px;*/
    border-left: 1px solid #e1e1e1;
    height: 2000px;
   }
   .links_div{
   	font-size: 1.2rem;
   }
   .links_div a{
   	text-decoration: none;

   }
   

   .uper_element{
/*border: 1px solid black;*/
height: 27px;
width: 27px;
background-color: grey;
border-radius: 100px;
position: absolute;
left: 70px;
margin-top: -12px;

}

#span{
color: white;
position: absolute;
left: 10px;
/*top: 3px;*/
font-size: 18px;
}
 .uper_element:hover{
 	position: absolute;
 }

</style>

<body>
<div class="mainDiv">


<div class="logo" style="margin-left: 10%;">
			 <a href="index.php"><img src="logo2.png" ></a>
		</div>
<form method="POST" action="index_continue_to_shipping.php" >
<div class="container-fluide" style="margin-right: 0;">
	<div class="row">
		
		<div class="col-sm-6" style=" margin-right: 0%;">
			
			<div class="col" style="margin-bottom: 0;">

			<div class="links_div">
				<a href="index_cart.php" class="active">Cart</a> > 
				<label>Information</label> >
				<label style="color: gray;">Shipping</label> >
				<label style="color: gray;">Payment</label>
			</div>
			<br>

			<div class="col-sm-12">
				
				<div class="row">
					<div class="col-sm-12">
				        <label style="font-size: 1.7rem;">Contact Information</label>
			        </div>
				
			       <!--  <div class="col-sm-6">
				    <label style="font-size: 1.1rem; margin-top: 6px;">Already have an account? <a href="login.php">Login</a></label>
			        </div> -->
				</div>
				

				<div>

					<input type="text" class="form-control" placeholder="Email" name="user_email" required>
					
					
					<input type="checkbox" name="" ><label style="font-size: 1.2rem;">Keep me up to date on news and exclusive offers</label>
			    </div>

			</div>


			<br>

			<div class="col-sm-12">

				<div><label style="font-size: 1.7rem;">Shipping Address</label></div>
			
				<div  style="display: flex;">	
					
					<div style="width: 50%; margin-right: 10px;">
					    <input type="text" class="form-control" name="first_name" placeholder="First name(Optional)" required>
				    </div>

				    <div style="width: 50%;">
				    	<input type="text" class="form-control" name="last_name" placeholder="Last name" required>
				    </div>

				</div>
				<br>
				<input type="text" class="form-control" name="address" placeholder="Address" required>
				<br>
				<input type="text" class="form-control" name="city" placeholder="City" required>
				<br>
				<div style="display: flex;">

					<div style="width: 50%; margin-right: 10px;">

					   <select id="country" name="country" class="form-control" required>

						<option value="Pakistan">Pakistan</option>
						<option value="United States">United States</option>
						<option>---</option>
						<option value="Afganistan">Afghanistan</option>
						<option value="Albania">Albania</option>
						<option value="Algeria">Algeria</option>
						<option value="American Samoa">American Samoa</option>
						<option value="Andorra">Andorra</option>
						<option value="Angola">Angola</option>
						<option value="Anguilla">Anguilla</option>
						<option value="Antigua & Barbuda">Antigua & Barbuda</option>
						<option value="Argentina">Argentina</option>
						<option value="Armenia">Armenia</option>
						<option value="Aruba">Aruba</option>
						<option value="Australia">Australia</option>
						<option value="Austria">Austria</option>
						<option value="Azerbaijan">Azerbaijan</option>
						<option value="Bahamas">Bahamas</option>
						<option value="Bahrain">Bahrain</option>
						<option value="Bangladesh">Bangladesh</option>
						<option value="Barbados">Barbados</option>
						<option value="Belarus">Belarus</option>
						<option value="Belgium">Belgium</option>
						<option value="Belize">Belize</option>
						<option value="Benin">Benin</option>
						<option value="Bermuda">Bermuda</option>
						<option value="Bhutan">Bhutan</option>
						<option value="Bolivia">Bolivia</option>
						<option value="Bonaire">Bonaire</option>
						<option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
						<option value="Botswana">Botswana</option>
						<option value="Brazil">Brazil</option>
						<option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
						<option value="Brunei">Brunei</option>
						<option value="Bulgaria">Bulgaria</option>
						<option value="Burkina Faso">Burkina Faso</option>
						<option value="Burundi">Burundi</option>
						<option value="Cambodia">Cambodia</option>
						<option value="Cameroon">Cameroon</option>
						<option value="Canada">Canada</option>
						<option value="Canary Islands">Canary Islands</option>
						<option value="Cape Verde">Cape Verde</option>
						<option value="Cayman Islands">Cayman Islands</option>
						<option value="Central African Republic">Central African Republic</option>
						<option value="Chad">Chad</option>
						<option value="Channel Islands">Channel Islands</option>
						<option value="Chile">Chile</option>
						<option value="China">China</option>
						<option value="Christmas Island">Christmas Island</option>
						<option value="Cocos Island">Cocos Island</option>
						<option value="Colombia">Colombia</option>
						<option value="Comoros">Comoros</option>
						<option value="Congo">Congo</option>
						<option value="Cook Islands">Cook Islands</option>
						<option value="Costa Rica">Costa Rica</option>
						<option value="Cote DIvoire">Cote DIvoire</option>
						<option value="Croatia">Croatia</option>
						<option value="Cuba">Cuba</option>
						<option value="Curaco">Curacao</option>
						<option value="Cyprus">Cyprus</option>
						<option value="Czech Republic">Czech Republic</option>
						<option value="Denmark">Denmark</option>
						<option value="Djibouti">Djibouti</option>
						<option value="Dominica">Dominica</option>
						<option value="Dominican Republic">Dominican Republic</option>
						<option value="East Timor">East Timor</option>
						<option value="Ecuador">Ecuador</option>
						<option value="Egypt">Egypt</option>
						<option value="El Salvador">El Salvador</option>
						<option value="Equatorial Guinea">Equatorial Guinea</option>
						<option value="Eritrea">Eritrea</option>
						<option value="Estonia">Estonia</option>
						<option value="Ethiopia">Ethiopia</option>
						<option value="Falkland Islands">Falkland Islands</option>
						<option value="Faroe Islands">Faroe Islands</option>
						<option value="Fiji">Fiji</option>
						<option value="Finland">Finland</option>
						<option value="France">France</option>
						<option value="French Guiana">French Guiana</option>
						<option value="French Polynesia">French Polynesia</option>
						<option value="French Southern Ter">French Southern Ter</option>
						<option value="Gabon">Gabon</option>
						<option value="Gambia">Gambia</option>
						<option value="Georgia">Georgia</option>
						<option value="Germany">Germany</option>
						<option value="Ghana">Ghana</option>
						<option value="Gibraltar">Gibraltar</option>
						<option value="Great Britain">Great Britain</option>
						<option value="Greece">Greece</option>
						<option value="Greenland">Greenland</option>
						<option value="Grenada">Grenada</option>
						<option value="Guadeloupe">Guadeloupe</option>
						<option value="Guam">Guam</option>
						<option value="Guatemala">Guatemala</option>
						<option value="Guinea">Guinea</option>
						<option value="Guyana">Guyana</option>
						<option value="Haiti">Haiti</option>
						<option value="Hawaii">Hawaii</option>
						<option value="Honduras">Honduras</option>
						<option value="Hong Kong">Hong Kong</option>
						<option value="Hungary">Hungary</option>
						<option value="Iceland">Iceland</option>
						<option value="Indonesia">Indonesia</option>
						<option value="India">India</option>
						<option value="Iran">Iran</option>
						<option value="Iraq">Iraq</option>
						<option value="Ireland">Ireland</option>
						<option value="Isle of Man">Isle of Man</option>
						<option value="Israel">Israel</option>
						<option value="Italy">Italy</option>
						<option value="Jamaica">Jamaica</option>
						<option value="Japan">Japan</option>
						<option value="Jordan">Jordan</option>
						<option value="Kazakhstan">Kazakhstan</option>
						<option value="Kenya">Kenya</option>
						<option value="Kiribati">Kiribati</option>
						<option value="Korea North">Korea North</option>
						<option value="Korea Sout">Korea South</option>
						<option value="Kuwait">Kuwait</option>
						<option value="Kyrgyzstan">Kyrgyzstan</option>
						<option value="Laos">Laos</option>
						<option value="Latvia">Latvia</option>
						<option value="Lebanon">Lebanon</option>
						<option value="Lesotho">Lesotho</option>
						<option value="Liberia">Liberia</option>
						<option value="Libya">Libya</option>
						<option value="Liechtenstein">Liechtenstein</option>
						<option value="Lithuania">Lithuania</option>
						<option value="Luxembourg">Luxembourg</option>
						<option value="Macau">Macau</option>
						<option value="Macedonia">Macedonia</option>
						<option value="Madagascar">Madagascar</option>
						<option value="Malaysia">Malaysia</option>
						<option value="Malawi">Malawi</option>
						<option value="Maldives">Maldives</option>
						<option value="Mali">Mali</option>
						<option value="Malta">Malta</option>
						<option value="Marshall Islands">Marshall Islands</option>
						<option value="Martinique">Martinique</option>
						<option value="Mauritania">Mauritania</option>
						<option value="Mauritius">Mauritius</option>
						<option value="Mayotte">Mayotte</option>
						<option value="Mexico">Mexico</option>
						<option value="Midway Islands">Midway Islands</option>
						 <option value="Moldova">Moldova</option>
						 <option value="Monaco">Monaco</option>
						 <option value="Mongolia">Mongolia</option>
						 <option value="Montserrat">Montserrat</option>
						 <option value="Morocco">Morocco</option>
						 <option value="Mozambique">Mozambique</option>
						 <option value="Myanmar">Myanmar</option>
						 <option value="Nambia">Nambia</option>
						 <option value="Nauru">Nauru</option>
						 <option value="Nepal">Nepal</option>
						 <option value="Netherland Antilles">Netherland Antilles</option>
						 <option value="Netherlands">Netherlands (Holland, Europe)</option>
						 <option value="New Caledonia">New Caledonia</option>
						 <option value="New Zealand">New Zealand</option>
						 <option value="Nicaragua">Nicaragua</option>
						 <option value="Niger">Niger</option>
						 <option value="Nigeria">Nigeria</option>
						 <option value="Niue">Niue</option>
						 <option value="Norfolk Island">Norfolk Island</option>
						 <option value="Norway">Norway</option>
						 <option value="Oman">Oman</option>
						 <option value="Pakistan">Pakistan</option>
						 <option value="Palau Island">Palau Island</option>
						 <option value="Palestine">Palestine</option>
						 <option value="Panama">Panama</option>
						 <option value="Papua New Guinea">Papua New Guinea</option>
						 <option value="Paraguay">Paraguay</option>
						 <option value="Peru">Peru</option>
						<option value="Phillipines">Philippines</option>
						<option value="Pitcairn Island">Pitcairn Island</option>
						<option value="Poland">Poland</option>
						<option value="Portugal">Portugal</option>
						<option value="Puerto Rico">Puerto Rico</option>
						<option value="Qatar">Qatar</option>
						<option value="Republic of Montenegro">Republic of Montenegro</option>
						<option value="Republic of Serbia">Republic of Serbia</option>
						<option value="Reunion">Reunion</option>
						<option value="Romania">Romania</option>
						<option value="Russia">Russia</option>
						<option value="Rwanda">Rwanda</option>
						<option value="St Barthelemy">St Barthelemy</option>
						<option value="St Eustatius">St Eustatius</option>
						<option value="St Helena">St Helena</option>
						<option value="St Kitts-Nevis">St Kitts-Nevis</option>
						<option value="St Lucia">St Lucia</option>
						<option value="St Maarten">St Maarten</option>
						<option value="St Pierre & Miquelon">St Pierre & Miquelon</option> <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
						<option value="Saipan">Saipan</option>
						<option value="Samoa">Samoa</option>
						<option value="Samoa American">Samoa American</option>
						<option value="San Marino">San Marino</option>
						<option value="Sao Tome & Principe">Sao Tome & Principe</option>
						<option value="Saudi Arabia">Saudi Arabia</option>
						<option value="Senegal">Senegal</option>
						<option value="Seychelles">Seychelles</option>
						<option value="Sierra Leone">Sierra Leone</option>
						<option value="Singapore">Singapore</option>
						<option value="Slovakia">Slovakia</option>
						<option value="Slovenia">Slovenia</option>
						<option value="Solomon Islands">Solomon Islands</option>
						<option value="Somalia">Somalia</option>
						<option value="South Africa">South Africa</option>
						<option value="Spain">Spain</option>
						<option value="Sri Lanka">Sri Lanka</option>
						<option value="Sudan">Sudan</option>
						<option value="Suriname">Suriname</option>
						<option value="Swaziland">Swaziland</option>
						<option value="Sweden">Sweden</option>
						<option value="Switzerland">Switzerland</option>
						<option value="Syria">Syria</option>
						<option value="Tahiti">Tahiti</option>
						<option value="Taiwan">Taiwan</option>
						<option value="Tajikistan">Tajikistan</option>
						<option value="Tanzania">Tanzania</option>
						<option value="Thailand">Thailand</option>
						<option value="Togo">Togo</option>
						<option value="Tokelau">Tokelau</option>
						<option value="Tonga">Tonga</option>
						<option value="Trinidad & Tobago">Trinidad & Tobago</option>
						<option value="Tunisia">Tunisia</option>
						<option value="Turkey">Turkey</option>
						<option value="Turkmenistan">Turkmenistan</option>
						<option value="Turks & Caicos Is">Turks & Caicos Is</option>
						<option value="Tuvalu">Tuvalu</option>
						<option value="Uganda">Uganda</option>
						<option value="United Kingdom">United Kingdom</option>
						<option value="Ukraine">Ukraine</option>
						<option value="United Arab Erimates">United Arab Emirates</option>
						<option value="United States of America">United States of America</option>
						<option value="Uraguay">Uruguay</option>
						<option value="Uzbekistan">Uzbekistan</option>
						<option value="Vanuatu">Vanuatu</option>
						<option value="Vatican City State">Vatican City State</option>
						<option value="Venezuela">Venezuela</option>
						<option value="Vietnam">Vietnam</option>
						<option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option><option value="Virgin Islands (USA)">Virgin Islands (USA)</option><option value="Wake Island">Wake Island</option>
						<option value="Wallis & Futana Is">Wallis & Futana Is</option>
						<option value="Yemen">Yemen</option>
						<option value="Zaire">Zaire</option>
						<option value="Zambia">Zambia</option>
						<option value="Zimbabwe">Zimbabwe</option>
					    
					    </select>
                    </div>

					<!-- <input type="" class="form-control" style="width: 50%;" name=""> -->
					<div style="width: 50%;">
					<input type="text" class="form-control" placeholder="Postal Code" name="postal_code" required>
					</div>
				
				</div>

				<br>	
				<input type="text" name="phone" class="form-control" placeholder="Phone" required>
				<br>
				<input type="checkbox" name="">	Save this information for next time

			</div>
			<br>

			<input type="submit" class="btn btn-primary"  name="Order" value="Continue To Shipping">
			<a href="index_cart.php" style="text-decoration:none;  padding-left: 1.0em;" >Return to Cart</a>
		  </div>
		</div>


		<div class="vl"></div>


		<div class="col-sm-4" style="background-color: #fafafa;  margin-left: 0%; margin-right: 0%;"> 

			<div class="col" >

				<!-- session wil be here -->
				<?php 

				 // echo $image = $_POST['image']; 
				 // echo $item_name= $_POST
	 $sno = 1;
        if(!empty($_SESSION["shoping_cart"]))
        {
        	$total = 0;
          $num1 = rand(1000,9999); 
  
        	foreach($_SESSION["shoping_cart"] as $keys => $values)
        		{?>

				<div class="row" style="margin-top: 10%; ">

					<div style="width: 50%; display: flex;">

						<div style=" border-radius: 30%; height: 80px;width: 80px;">
							<!-- <img src="image/living0.jpg" style="border-radius: 20%;"> -->
							<input type="hidden" name="image" value="<?php echo "<img src='image/".$values['item_image']."' style='border-radius: 20%;' height ='100px' width='100px' />"; ?>">

							<div class="uper_element"><span id="span"><?php echo $values["item_quantity"]; ?></span></div>



							<?php echo "<img src='image/".$values['item_image']."' style='border-radius: 20%;' />"; ?>
						</div>

						<label style="margin-top: 10%; margin-left: 2px;"><b>
							<input type="hidden" name="product_name" value="<?php echo $values["item_name"]; ?>">

							<?php echo $values["item_name"]; ?></b></label>

					</div>

					<div style="width: 50%;">
						<label style="margin-top: 10%; margin-left: 40%; font-size: 1.2rem;">
							<input type="hidden" name="subtotal" value="<?php echo  number_format($values["item_quantity"] * $values["item_price"],2); ?>">

							Rs. <?php echo  number_format($values["item_quantity"] * $values["item_price"],2); ?></label>
					</div>
				</div>



				<?php

				   $total = $total + ($values["item_quantity"] * $values["item_price"]);  

			          } 
			    } ?>

				<!-- end at here -->






                <hr>
                <div class="row">
                	<form action="#">
                	<input type="text" class="form-control" placeholder="Discount Code" style="width: 70%;" name="discount_code">
                	<a href="#" class="btn btn-info" style="font-size: 1.1rem; margin-left:  10px;" name="" >Apply</a>
                </form>
                	
                </div>
                <hr>
                <div class="row">
                	<div style="width: 50%">

                		<label style="font-size: 1.3rem; color: gray;">Subtotal</label>
                		<br>
                		<label style="font-size: 1.3rem; color: gray;">Shipping</label>
                	</div>
                	<div style="width: 50%;">
                		
                		<label style="margin-left: 50%;  font-size: 1.3rem;">Rs.<?php echo number_format($total, 2); ?></label>
                		<br>
                		<label style="margin-left: 50%; font-size: 1.3rem; ">Free</label>
                		
                	</div>
                	
                </div>
                <hr>

                <div class="row">
                	<div style="width: 50%;">
                		<label style="font-size: 1.3rem; color: black;">
                			Total
                			
                		</label>
                		
                	</div>
                	<div style="width: 50%;  display: flex;">
                		<div style="width: 10%;">
                		<p style=" color: gray; font-size: 0.80rem; margin-top: 20px; ">PRK</p>
                	    </div>
                	
                	    <div style="width: 40%;">
                	    	<label style=" margin-left:20%;  font-size: 1.8rem;"><b>

                	    		<input type="hidden" name="total" value="<?php echo number_format($total, 2); ?>">

                	    		Rs.<?php echo number_format($total, 2); ?></b></label>
                	    </div>
                	</div>
                </div>
				
			</div>
			
		</div>

	</div>
</div>
</form>

</div>










<!-- 
<table id="myTable">
	
<?php 

if(!empty($_SESSION["shoping_cart"]))
        {
        foreach($_SESSION["shoping_cart"] as $keys => $values)
        		{ 



?>
	<tr>
		<input type="hidden" name="" value="<?php echo ($values["item_id"]); ?>">
		<input type="hidden" name="" value="<?php echo $values["item_name"]; ?>" >
		<input type="hidden" name="" value="<?php echo $values["item_image"]; ?>">
		<input type="hidden" name="" value="<?php echo $values["item_quantity"]; ?>">
	</tr>
<?php }}?>	
</table> -->

</body>
</html>

<!-- <script>
function myFunction() {
  var x = document.getElementById("myTable").rows.length;
  document.getElementById("demo").innerHTML =x;
}
</script>

<script type="text/javascript">
	window.onload=function(){
myFunction();
};
</script> -->