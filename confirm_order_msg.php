<?php 
include('conn.php');
include('functions.php');





if (isset($_POST['confirm_order']))
{
	if(!empty($_SESSION['user']))
	{
		$user_id = $_SESSION['user']['user_id'];
	}
	else
	{
		$user_id = 0;
	}

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
	// $user_id = $_SESSION['user']['user_id'];
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


	 






	// INSERT INTO `order_info`(`o_id`, `user_email`, `order_pass`, `address`, `city`, `postal_code`, `country`, `cash_method`, `billing_address`, `diff_first_name`, `diff_last_name`, `diff_address`, `diff_city`, `diff_country`, `diff_postal`, `diff_phone`, `discount_code`, `total`, `order_id`, `user_id`, `O_status`, `ctime`, `cdate`) VALUES 

	$order = "INSERT INTO `order_info`(`user_email`, `order_pass`, `address`, `city`, `postal_code`, `country`, `cash_method`, `billing_address`, `diff_first_name`, `diff_last_name`, `diff_address`, `diff_city`, `diff_country`, `diff_postal`, `diff_phone`,`discount_code`, `total`, `order_id`, `user_id`)

VALUES('$Email','$pass','$Address','$City','$Postal','$Country','$Cash_On_Delivery','$cars','$diff_first','$diff_last','$diff_address','$diff_city','$diff_country','$diff_postal','$diff_phone','$discount_code','$total','$order_id','$user_id')";
  $confirm = mysqli_query($conn , $order);
// echo '<script>alert("Your collection added")</script>';
// echo '<script>window.location="home_page.php"</script>';




foreach($_SESSION["shoping_cart"] as $keys => $values)
    {
    	
    	if(!empty($_SESSION['user']))
    	    {
    	    	$id = $_SESSION['user']['user_id'];
    	    }
    	    else
    	    {
    	       	$id = 0;
    	    }


    	 $productid  = $values["item_id"];
         // $id        = $_SESSION['user']['user_id'];
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
  // unset($_SESSION["shoping_cart"]);
// echo '<script>window.location="confirm_order_msg.php"</script>';

 
	
}












if (isset($_POST['confirm'])) {
	  unset($_SESSION["shoping_cart"]);
	  echo '<script>window.location="index.php"</script>';
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
		border: none;
	}
	.form-control{
		width: 40%;
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
	.btn-info{
		background-color: #7796a8;
		width: 120px;
	}
	.btn{
		border-radius: 0;
	}
	.btn-outline-dark{
		border-color: #eee;
	}

	input[type=text]{
  width: 0px;
  box-sizing: border-box;
  border: none;
  border-radius: 0;
  font-size: 16px;
  /*background-color: blue;*/
  background-image: url('searchicon.png');
  background-repeat: no-repeat;
  background-position: 5px 5px; 
  background-repeat: no-repeat;
  padding: 5px 5px 8px 30px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;

}

input[type=text]:focus{	
    width: 100%;
    border: 2px  #ccc;

}
/*.icon i{
	padding-left: 5px;
}*/


</style>
<body>



<br><br><br>
<div class="container">
	<div class="row">
		<form method="post">

		<center>
			<h1 style="font-size: 2.5rem; color: gray;">Your Order Is placed </h1>
			<br>
			<h2 style="font-size: 2.0rem; color: gray;" >Remember this Email and Password to Track Orders</h2>
			<br>
			<div style="display: flex; justify-content: space-around;">
			<h3>Email</h3>
			<h4><?php echo $Email;?> </h4>
		    </div>
		    <div style="display: flex; justify-content: space-around;">
			
			<h3>Password</h3>
			<h4><?php echo $pass;?></h4>
		    </div>
			<input type="Submit" name="confirm" class="btn btn-success" value=" OK ">

		</center>
	</form>
	</div>
	<br><br><br>
	

 	</div>


</body>
</html>




