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

// UPDATE `order_info` SET `o_id`=[value-1],`user_email`=[value-2],`address`=[value-3],`city`=[value-4],`postal_code`=[value-5],`country`=[value-6],`cash_method`=[value-7],`billing_address`=[value-8],`diff_first_name`=[value-9],`diff_last_name`=[value-10],`diff_address`=[value-11],`diff_city`=[value-12],`diff_country`=[value-13],`diff_postal`=[value-14],`diff_phone`=[value-15],`discount_code`=[value-16],`total`=[value-17],`order_id`=[value-18],`user_id`=[value-19],`O_status`=[value-20],`ctime`=[value-21],`cdate`=[value-22] WHERE 1

// UPDATE `cart` SET `cart_id`=[value-1],`product_id`=[value-2],`user_id`=[value-3],`pro_name`=[value-4],`pro_price`=[value-5],`quantity`=[value-6],`subtotal`=[value-7],`cdate`=[value-8],`ctime`=[value-9],`status`=[value-10],`order_id`=[value-11],`total`=[value-12] WHERE 1

// UPDATE attendance ,user_info SET attendance.attendance='$attendance', user_info.user_name='$pname',user_info.NIC='$NIC' WHERE user_info.user_id='$id' AND attendance.user_id = '$id'



if(isset($_GET["action"]))
{
	if($_GET["action"] == "confirm_order")
	{
		$order_id = $_GET['order_id'];
		
        $confirm_order ="UPDATE order_info , cart SET order_info.O_status='confirmed' , cart.status = 'confirmed' WHERE order_info.order_id = '$order_id' AND cart.order_id = '$order_id' ";
        print_r($confirm_order);

                $query = mysqli_query($conn , $confirm_order) ;
                echo '<script>alert("Order Confirmed")</script>';
				// echo '<script>window.location="admin.php"</script>';

		
		
	}
}


if(isset($_GET["action"]))
{
	if($_GET["action"] == "cancel_order")
	{
		$order_id = $_GET['order_id'];
		
        $confirm_order ="UPDATE order_info , cart SET order_info.O_status='canceled' , cart.status = 'canceled' WHERE order_info.order_id = '$order_id' AND cart.order_id = '$order_id' ";
        print_r($confirm_order);

                $query = mysqli_query($conn , $confirm_order) ;
                echo '<script>alert("Order Canceled")</script>';
				// echo '<script>window.location="admin.php"</script>';

		
		
	}
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

	<nav id="mainNav" class="mainNav1">
		
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
	<center><h2 class="head">Completed Order</h2></center>
	<br>

	<table class="table">
		<thead >
			<th>Sro.#</th>
			<th>Order Time</th>
			<th>Order ID</th>
			<th>Order Details</th>
		<!-- 	<th>Confirm Order</th>
			<th>Cancel Order</th> -->
		</thead>
		<?php 
		$sno = 1;
		// SELECT `o_id`, `user_email`, `address`, `city`, `postal_code`, `country`, `cash_method`, `billing_address`, `diff_first_name`, `diff_last_name`, `diff_address`, `diff_city`, `diff_country`, `diff_postal`, `diff_phone`, `discount_code`, `total`, `order_id`, `user_id`, `O_status`, `ctime`, `cdate` FROM `order_info` WHERE 1

		$sql="SELECT * FROM order_info WHERE O_status ='completed'";
		$query =mysqli_query($conn,$sql);
		while($row=mysqli_fetch_assoc($query))
		{

		?>
		<tbody>
			<tr>
				<?php echo '<td>'.$sno++.'</td>'?>
				<td><?php echo $row['cdate'];?></td>
				<td><?php echo $row['order_id'];?></td>
				<!-- <td><?php echo $row[''];?></td> -->
				<td><a href="veiw_order.php?order_id=<?php echo $row['order_id'];?>" class="btn btn-info">Veiw</a></td>
				<!-- <td><a href="admin_panel.php?action=confirm_order&order_id=<?php echo $row['order_id'];?>" class="btn btn-success">Confirm</a></td>
				<td><a href="admin_panel.php?action=cancel_order&order_id=<?php echo $row['order_id'];?>" class="btn btn-danger">Cancel</a></td> -->
				

			</tr>
		</tbody>
	<?php }?>
	</table>
</div>

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