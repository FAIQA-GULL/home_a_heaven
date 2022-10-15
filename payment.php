
<?php 
include('conn.php');
include('functions.php');
if (!isLoggedIn()) {

  session_start();
  session_destroy();
  unset($_SESSION['user']);

  echo '<script>alert("You must log in first")</script>';
     
  echo '<script>window.location="index.php"</script>';
}


 if(isset($_POST["payment"]))
 {

	 $user_email = $_POST['user_email'];
	 $first = $_POST['first'];
	 $last = $_POST['last'];
	 $address = $_POST['address'];
	 $city   = $_POST['city'];
	$country = $_POST['country'];
	$postal  = $_POST['postal'];
 $phone = $_POST['phone'];
 $A_total = $_POST['total'];
$o_id = $_POST['o_id'];


 // $total = 0;

} 
				

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
	
	

	td{
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
	}
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
			 <a href="home_page.php"><img src="logo2.png" ></a>
		</div>


<!-- <br><br><br> -->
<form method="POST" action="home_confirm_order_msg.php">
<div class="container-fluide">
	<input type="hidden" name="final_total" value="<?php echo  $A_total;?>">
	<input type="hidden" name="final_order_id" value="<?php echo  $o_id;?>">
	<div class="row">
		
		<div class="col-sm-6" style=" margin-right: 0%;">
			
			<div class="col" style="margin-bottom: 0;">

			<div class="links_div">
				<a href="cart.php" class="active">Cart</a> > 
				<a href="check_out.php">Information</a> >
				<a href="continue_to_shipping.php">Shipping</a> >
				<label style="color: gray;">Payment</label>
			</div>
			<br>

			<div class="col-sm-12">
				
				<div class="row">
					<div class="col-sm-12">
				        <!-- <label style="font-size: 1.7rem;">Contact Information</label> -->
				        <fieldset style="border:1px solid #eee; font-size: 1.2rem;">
				        	<label style="color: gray;">Contact</label>

				        	<label style="margin-left: 10%;"><?php echo  $user_email;?></label>

				        	<!-- hidden email -->
				        	<input type="hidden" name="Email" value="<?php echo  $user_email;?>">
				        	<!-- ==== -->

				        	<label style="float: right;"><a onclick="Back()" style="text-decoration: none;">Change</a></label>
				        	
				        	<hr>

				        	<label style="color: gray;">Ship To</label>
				        	
				        	<label style="margin-left: 10%;"><?php echo $address;?>, <?php echo $city;?>, <?php echo $postal;?>, <?php echo $country;?></label>

				        	
				        	<!-- hidden ship-->
				        	<input type="hidden" name="Address" value="<?php echo $address;?>">
				        	<input type="hidden" name="City" value="<?php echo $city;?>">
				        	<input type="hidden" name="Postal" value="<?php echo $postal;?>">
				        	<input type="hidden" name="Country" value="<?php echo $country;?>">
				        	<!-- ==== -->

				        	<label style="float: right;"><a onclick="Back()" style="text-decoration: none;">Change</a></label>
				        	<hr>
				        	<label style="color: gray;">Method</label>
				        	<label style="margin-left: 10%;">Free Shipping! . <b>Free</b></label>


				        </fieldset>

			        </div>
				
			       <!--  <div class="col-sm-6">
				    <label style="font-size: 1.1rem; margin-top: 6px;">Already have an account? <a href="login.php">Login</a></label>
			        </div> -->
				</div>
				

				<!-- <div>

					<input type="text" class="form-control" placeholder="Email" name="user_email" value="<?php echo $_SESSION['user']['user_email'];?>">
					
					
					<input type="checkbox" name="" ><label style="font-size: 1.2rem;">Keep me up to date on news and exclusive offers</label>
			    </div> -->

			</div>


			<br>

			<div class="col-sm-12">

				<div><label style="font-size: 1.7rem;">Payment</label><br>
					<label style="color: gray; font-size: 1.3rem;">All transactions are secure and encrypted.</label>
				</div>

			
				<div  style="display: flex;">	
					
					<!-- <div style="width: 50%; margin-right: 10px;"> -->
						<input type="text" class="form-control" style="background-color: white; font-weight: bold;" name="Cash_On_Delivery" readonly value="Cash on Delivery (COD)">

						<!-- <fieldset style="border: 1px solid #eee; font-size: 1.1rem;" class="form-control">
							<input type="radio" name="" style="padding-right: 0.90em;">
							<label>Free Shipping!</label>
							<label style="float: right;">Free</label>
						</fieldset> -->
					    <!-- <input type="text" class="form-control" style="background-color: white;" name="first_name" placeholder="First name(Optional)" value="Free Shipping" readonly> -->
				    <!-- </div> -->

				   <!--  <div style="width: 50%;">
				    	<input type="text" class="form-control" name="last_name" placeholder="Last name">
				    </div> -->

				</div>
				<br>

				<div><label style="font-size: 1.7rem;">Billing address</label><br>
					<label style="color: gray; font-size: 1.3rem;">Select the address that matches your card or payment method.</label>
				</div>
				
				<fieldset style="border: 1px solid #eee;">

				<input type="radio" name="cars" value="same_shipping_method" style="margin-right: 1.5em;" placeholder="Address" checked><label style="font-size: 1.2rem; font-weight: bold;">Same as shipping address</label>
				<hr>
				<input type="radio" name="cars" value="different_shipping_method" style="margin-right: 1.5em;"  placeholder="Address"><label style="font-size: 1.2rem; font-weight: bold;">Use a different billing address</label>

				<div class="col-sm-12 desc" id="different_shipping_method" style="background-color: #eee;">

				    <div id="choice"  style="display: flex;">

					<div style="width: 50%; margin-right: 10px; margin-top: 10px;">
						<input type="text" class="form-control" name="diff_first" placeholder="First name(Optional)" >
					</div>

					<div style="width: 50%; margin-top: 10px;">
						<input type="text" class="form-control" name="diff_last" placeholder="Last name">
					</div>

					</div>
					<br>
					<input type="text" class="form-control" name="diff_address" placeholder="Address">
					<br>
					<input type="text" class="form-control" name="diff_city" placeholder="City">
					 <div id="choice"  style="display: flex;">
					<div style="width: 50%; margin-right: 10px; margin-top: 10px;">
						<!-- <input type="" class="form-control" name="" > -->
						<select class="form-control" style="height: 100%;" name="diff_country">
							<option value="">Select Country</option>
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
						</select>
					</div>
					<div style="width: 50%; margin-top: 10px;">
						<input type="text" class="form-control" name="diff_postal" placeholder="Postal code">
					</div>
					</div>
					<br>
					<input type="text" class="form-control" name="diff_phone" placeholder="Phone">
					<br>
			    </div>
				</fieldset>
			


				<!-- <br>	
				<input type="text" name="phone" class="form-control" placeholder="Phone"> -->
				<!-- <br>
				<input type="checkbox" name="">	Save this information for next time -->

			</div>
			<br>

			<input type="submit" class="btn btn-primary"  name="confirm_order" value="Complete Order">
			<a onclick="goBack()" style="text-decoration:none; padding-left: 1.0em;">Return to Shipping</a>
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

						<div style="border-radius: 30%; height: 80px;width: 80px;">
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
                		
                		<label style="margin-left: 50%; font-size: 1.3rem;">Rs.<?php echo number_format($total, 2); ?></label>
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
</table>
 -->
</body>
</html>

<!-- <?php 

if (isset($_POST['confirm_order']))
{
	$total    = $_POST['final_total'];
	$order_id = $_POST['final_order_id'];
	$Email    = $_POST['Email'];
	$Address  = $_POST['Address'];
	$City     = $_POST['City'];
	$Postal   = $_POST['Postal'];
	$Country  = $_POST['Country'];
	$Cash_On_Delivery = $_POST['Cash_On_Delivery'];
	$cars     = $_POST['cars'];

	$diff_first = $_POST['diff_first'];
	$diff_last = $_POST['diff_last'];
	$diff_address = $_POST['diff_address'];
	$diff_city = $_POST['diff_city'];
	$diff_country = $_POST['diff_country'];
	$diff_postal = $_POST['diff_postal'];
	$diff_phone = $_POST['diff_phone'];
	$user_id = $_SESSION['user']['user_id'];
	$discount_code = $_POST['discount_code'];


	 $check_pass = "SELECT * FROM order_info WHERE user_email = '$Email'";
	 $check = mysqli_query($conn, $check_pass);

	 if (mysqli_num_rows($check)>0)
	 {
	 	$row = mysqli_fetch_assoc($check);
	 	$pass = $row['order_pass'];

	 }
	 else
	 {
	 	$pass = rand(100,999);
	 }




	// INSERT INTO `order_info`(`o_id`, `user_email`, `address`, `city`, `postal_code`, `country`, `cash_method`, `billing_address`, `diff_first_name`, `diff_last_name`, `diff_address`, `diff_city`, `diff_country`, `diff_postal`, `diff_phone`, `discount_code`, `total`, `order_id`, `user_id`, `O_status`, `ctime`, `cdate`) VALUES

	$order = "INSERT INTO `order_info`(`user_email`, `order_pass`, `address`, `city`, `postal_code`, `country`, `cash_method`, `billing_address`, `diff_first_name`, `diff_last_name`, `diff_address`, `diff_city`, `diff_country`, `diff_postal`, `diff_phone`,`discount_code`, `total`, `order_id`, `user_id`) 

VALUES('$Email','$pass','$Address','$City','$Postal','$Country','$Cash_On_Delivery','$cars','$diff_first','$diff_last','$diff_address','$diff_city','$diff_country','$diff_postal','$diff_phone','$discount_code','$total','$order_id','$user_id')";
  $confirm = mysqli_query($conn , $order);
// echo '<script>alert("Your collection added")</script>';
// echo '<script>window.location="home_page.php"</script>';




foreach($_SESSION["shoping_cart"] as $keys => $values)
    {
    	 $productid  = $values["item_id"];
         $id        = $_SESSION['user']['user_id'];
         $pro_name   = $values["item_name"];
         $price      = $values["item_price"];
         $quantity   = $values['item_quantity'];
         $subtotal   = ($values["item_quantity"] * $values["item_price"]);
         $total      = $_POST['final_total'];
	     $order_id   = $_POST['final_order_id'];
         

 // INSERT INTO `cart`(`cart_id`, `product_id`, `user_id`, `pro_name`, `pro_price`, `quantity`, `subtotal`, `cdate`, `status`, `order_id`, `total`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11])

$sql = "INSERT INTO `cart`( `product_id`, `user_id`, `pro_name`, `pro_price`, `quantity`, `subtotal`, `status`, `order_id`, `total`) 

VALUES ('$productid','$id','$pro_name','$price','$quantity','$subtotal','disable','$order_id','$total')";

// print_r($sql);

                       $query = mysqli_query($conn , $sql);

                        // echo '<script>alert("item added")</script>';


   }

echo '<script>alert("Your order has been placed")</script>';
 echo '<script>window.location="home_confirm_order_msg.php"</script>';

	
}




?>
 -->






















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


<script type="text/javascript">
	$(document).ready(function() {
    $("div.desc").hide();
    $("input[name$='cars']").click(function() {
        var test = $(this).val();
        $("div.desc").hide();
        $("#" + test).show();
    });
});
</script>

<script>
function goBack() {
  window.history.back();
}
</script>

<script>
function Back() {
  window.history.go(-2);
}
</script>
<!-- 
<div id="myRadioGroup">
    
    2 Cars<input type="radio" name="cars" checked="checked" value="twoCarDiv"  />
    
    3 Cars<input type="radio" name="cars" value="threeCarDiv" />
    
  
    <div id="threeCarDiv" class="desc">
        3 Cars Selected
    </div>
</div> -->
<!-- 
<label>Radio 1</label>
<input type="radio" name="group" value="1" checked />
<label>Radio 2</label>
<input type="radio" name="group" value="2" />
<label>Radio 3</label>
<input type="radio" name="group" value="3" />

<div>
    
    <select id="drop2" class="no-display">
        <option>DropDown 2</option>
        <option>DropDown 2</option>
        <option>DropDown 2</option>
        <option>DropDown 2</option>
    </select>
    <select id="drop3" class="no-display">
        <option>DropDown 3</option>
    </select>
</div>

<style type="text/css">
	.no-display {display: none;}
</style>

<script type="text/javascript">
	var radio_buttons = document.getElementsByName("group");
var dropdowns = document.getElementsByTagName("select");

for (var i = 0; i < radio_buttons.length; i++) {
    radio_buttons[i].addEventListener("change", setDropDown);
}

function setDropDown() {
    setDropDownsForNoDisplay();
    if (this.checked) {
        setDropDownForDisplay(this.value);        
    }
}

function setDropDownsForNoDisplay() {
    for (var i = 0; i < dropdowns.length; i++) {
        dropdowns[i].classList.add("no-display");
    }
}

function setDropDownForDisplay(x) {
    if (x === "1") {
        document.getElementById("drop1").classList.remove("no-display");
    } else if (x === "2") {
        document.getElementById("drop2").classList.remove("no-display");
    } else if (x === "3") {
        document.getElementById("drop3").classList.remove("no-display");
    }
}
</script> -->