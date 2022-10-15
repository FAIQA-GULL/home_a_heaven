
<?php 
include('conn.php');
include('functions.php');


 if(isset($_POST["Order"]))
 {

	 $user_email = $_POST['user_email'];
	 $first = $_POST['first_name'];
	 $last = $_POST['last_name'];
	 $address = $_POST['address'];
	 $city   = $_POST['city'];
	 $country = $_POST['country'];
	 $postal  = $_POST['postal_code'];
     $phone = $_POST['phone'];


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
			 <a href="index.php"><img src="logo2.png" ></a>
		</div>
<form method="POST" action="index_payment.php">
<div class="container-fluide">
	<div class="row">
		
		<div class="col-sm-6" style=" margin-right: 0%;">
			
			<div class="col" style="margin-bottom: 0;">

			<div class="links_div">
				<a href="index_cart.php" class="active">Cart</a> > 
				<a href="index_check_out.php">Information</a> >
				<label style="color: gray;">Shipping</label> >
				<label style="color: gray;">Payment</label>
			</div>
			<br>

			<div class="col-sm-12">
				
				<div class="row">
					<div class="col-sm-12">
				        <!-- <label style="font-size: 1.7rem;">Contact Information</label> -->
				        <fieldset style="border:1px solid #eee; font-size: 1.1rem;">
				        	<label style="color: gray;">Contact : </label>

				        	<label style="margin-left: 10%;"><?php echo  $user_email;?></label>
				        	<label style="float: right;"><a  onclick="goBack()" style="text-decoration: none;">Change</a></label>
				        	
				        	<hr>

				        	<label style="color: gray;">Ship To : </label>
				        	<label style="margin-left: 10%;"><?php echo $address;?>, <?php echo $city;?>, <?php echo $postal;?>, <?php echo $country;?></label>
				        	<label style="float: right;"><a  onclick="goBack()" style="text-decoration: none;">Change</a></label>


				        </fieldset>

			        </div>

			        <!-- hidden data  -->

			        <input type="hidden" name="user_email" value="<?php echo  $user_email;?>">
			        <input type="hidden" name="first" value="<?php echo  $first;?>">
			        <input type="hidden" name="last" value="<?php echo  $last;?>">
			        <input type="hidden" name="address" value="<?php echo  $address;?>">
			        <input type="hidden" name="city" value="<?php echo  $city;?>">
			        <input type="hidden" name="country" value="<?php echo  $country;?>">
			        <input type="hidden" name="postal" value="<?php echo  $postal;?>">
			        <input type="hidden" name="phone" value="<?php echo  $phone;?>">
			        <!-- ======================= -->

			        

				
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

				<div><label style="font-size: 1.7rem;">Shipping Method</label></div>
			
				<div  style="display: flex;">	
					
					<!-- <div style="width: 50%; margin-right: 10px;"> -->
						<fieldset style="border: 1px solid #eee; font-size: 1.1rem;" class="form-control">
							<input type="radio" style="padding-right: 0.90em;" value="Free Shipping! <b>Free</b>" checked>
							<label>Free Shipping!</label>
							<label style="float: right; font-weight: bold;">Free</label>
						</fieldset>
					 

				</div>
				
				<br>
			

			</div>
			<br>

			<input type="submit" class="btn btn-primary"  name="payment" value="Continue To Payment">
			<a  onclick="goBack()" style="text-decoration:none; padding-left: 1.0em;" >Return to Information</a>
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
	 $total = 0;
          $num1 = rand(1000,9999);
        if(!empty($_SESSION["shoping_cart"]))
        {
        	 
  
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
				   $order_id=$num1;

			          } 
			    } ?>

				<!-- end at here -->
				<input type="hidden" name="o_id" value="<?php echo $order_id;?>">

				<input type="hidden" name="total" value="<?php echo $total; ?>">






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

                	    		<input type="hidden" name="" value="<?php echo number_format($total, 2); ?>">

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










</body>
</html>

<script>
function goBack() {
  window.history.back();
}
</script>