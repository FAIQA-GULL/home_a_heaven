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

$order_id = $_GET['order_id'];
// $o = "SELECT * FROM ";
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
<link rel="stylesheet" type="text/css" media="screen and (max-width: 1175px)" href="css/phone.css">
</head>
<style type="text/css">
	.btn-info{
		background-color: #7796a8;
		border-radius: 0;
		font-family: Garamond, Baskerville, "Baskerville Old Face", "Hoefler Text", "Times New Roman", serif;

	}.btn{
		border-radius: 0;
		font-family: Garamond, Baskerville, "Baskerville Old Face", "Hoefler Text", "Times New Roman", serif;
	}
	.head , .table{

		font-family: Garamond, Baskerville, "Baskerville Old Face", "Hoefler Text", "Times New Roman", serif;

	}
	

	
</style>

<body>
	<div class="mainDiv">

	<nav id="mainNav">
		<div class="logo">
			 <a href="admin_panel.php"><img src="logo2.png" ></a>
		</div>
		<div class="phone">
		<div class="list">

			
			<ul class="mainUl">
				<li><a href="admin_panel.php">Home</a></li>
				
				<li><a href="admin_users.php">Users</a></li>
				<li><a href="admin_products.php">Products</a></li>
				<li><a href="confirmed_orders.php">Confirmed Orders </a></li>
				<li><a href="canceled_orders.php">Canceled Orders</a></li>
				<li><a href="completed_orders.php">Completed Orders</a></li>
			</ul>
		</div>
	</div>
		<div class="icon">
			<div class="icon_div">
			<!-- <i class="fa fa-search"></i> -->
			<a href="logout.php"><i class="fa fa-user"></i></a>
			<a href="javascript:void(0);" class="icon1" onclick="bFunction()">
    <i class="fa fa-bars"></i>
  </a>
			<!-- <i class="fa fa-shopping-cart"></i> -->
			</div>
		</div>
	</nav>

	 <br><br><br>


<!-- <hr class="hr_css"> -->

<div class="container">
	<br><br>
	<!-- <h1>Welcome Admin</h1>	 -->
	<center><h2 class="head">Order Detail</h2></center>
	<center><h4 class="head" style="color: gray;">Order ID <?php echo $order_id;?></h4></center>
	<br>

	<table class="table">
		<thead >
			<th>Sro.#</th>
			<th>Product Name</th>
			<th>Price</th>
			<th>Quantity</th>
			<th>Subtotal</th>
			<!-- <th>Cancel Order</th> -->
		</thead>
		<tbody>
		<?php 
		$sno = 1;
		$total = 0;
		// SELECT `o_id`, `user_email`, `address`, `city`, `postal_code`, `country`, `cash_method`, `billing_address`, `diff_first_name`, `diff_last_name`, `diff_address`, `diff_city`, `diff_country`, `diff_postal`, `diff_phone`, `discount_code`, `total`, `order_id`, `user_id`, `O_status`, `ctime`, `cdate` FROM `order_info` WHERE 1

		// SELECT `cart_id`, `product_id`, `user_id`, `pro_name`, `pro_price`, `quantity`, `subtotal`, `cdate`, `ctime`, `status`, `order_id`, `total` FROM `cart` WHERE 1

		$sql="SELECT order_info.user_email, order_info.address, order_info.postal_code
		, order_info.billing_address, order_info.diff_address, order_info.diff_postal
		, order_info.total , order_info.order_id , order_info.ctime ,order_info.cdate
		, cart.product_id , cart.pro_name , cart.pro_price , cart.quantity, cart.subtotal , cart.order_id 

		FROM order_info JOIN cart 
		ON order_info.order_id=cart.order_id 
		WHERE order_info.cdate = CURDATE() AND order_info.order_id ='$order_id'";
		// print_r($sql);
		$query =mysqli_query($conn,$sql);
		while($row=mysqli_fetch_assoc($query))
		{

		?>
		
			<tr>
				<?php echo '<td>'.$sno++.'</td>'?>
				<!-- <td><?php echo $row['cdate'];?></td> -->
				<td><?php echo $row['pro_name'];?></td>
				<td><?php echo $row['pro_price'];?></td>
				<td><?php echo $row['quantity'];?></td>
				<td><?php echo $row['subtotal'];?></td>
				<!-- <td><a href="veiw_order.php?order_id=<?php echo $row['order_id'];?>" class="btn btn-info">Veiw</a></td> -->
				<!-- <td><a href="" class="btn btn-success">Confirm</a></td> -->
				<!-- <td><a href="" class="btn btn-danger">Cancel</a></td> -->
				

			</tr>
		
	<?php 
	$total           = $row['total']; 
	$billing_address = $row['billing_address'];
	if ($billing_address == "different_shipping_method") 
	{
			$address    = $row['diff_address'];
	        $postal     = $row['diff_postal'];

	}
	else
	{
		$address  = $row['address'];
	    $postal   = $row['postal_code'];

	}
	$user_email      = $row['user_email'];
	$date            = $row['cdate'];
	$time            = $row['ctime'];

	// $total + ($row['quantity'] * $row['pro_price']);
}?>
        <tr>
        	<td colspan="4" align="right"> Total</td>
        	<td><?php echo number_format($total, 2);?></td>
        </tr>
        </tbody>
	</table>
</div>

<br>
<div class="container">
	<center><h2 class="head">Shipping Detail</h2></center>
	<br>
	<div class="row">

		<div class="col">
			<table class="table" style="border-style: none;
    border-top: hidden;
    border-bottom: hidden;">
				<tr style="border-bottom: hidden;">
					<th>User Email</th>
					<td><?php echo $user_email;?></td>
				</tr>
				<tr  style="border-bottom: hidden;">
					<th>Billing Address</th>
					<td><?php echo $billing_address; ?></td>
				</tr>
				<tr  style="border-bottom: hidden;">
					<th>User Address</th>
					<td><?php echo $address;?></td>
				</tr>
				<tr  style="border-bottom: hidden;">
					<th>User Postal Code</th>
					<td><?php echo $postal; ?></td>
				</tr>
			</table>
			<!-- <label>User Email</label>
			<input type="text" name=""  class="form-control" value="<?php echo $user_email;?>" readonly>
			<label>Billing Address</label>
			<input type="text" class="form-control" value="<?php echo $billing_address; ?>" name="">

			<label>User Address</label>
			<input type="text" name="" class="form-control" value="<?php echo $address;?>">
			<label>User Postal Code</label>
			<input type="text" name="" class="form-control" value="<?php echo $postal; ?>"> -->

		</div>
	</div>
</div>
<br><br>
</div>


</body>
</html>

<script>
function bFunction() {
  var x = document.getElementById("mainNav");
  if (x.className === "mainNav1") {
    x.className += " responsive";
  } else {
    x.className = "mainNav1";
  }
}
</script>