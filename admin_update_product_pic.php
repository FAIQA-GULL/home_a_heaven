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

if(isset($_POST['update_data']))
{
	$product_id =$conn->real_escape_string($_POST['product_id']);

	$folder = "image/".$_FILES['image']['name'];
	$image   = $_FILES["image"]["name"];
	



    // UPDATE `products` SET `product_id`=[value-1],`title`=[value-2],`description`=[value-3],`prev_price`=[value-4],`price`=[value-5],`image`=[value-6],`category`=[value-7],`status`=[value-8] WHERE 1

	

	$addQuery = "UPDATE `products` SET `image`='$image' WHERE `product_id`='$product_id'";

	

	$prod_sql = mysqli_query($conn, $addQuery);

	if($prod_sql)
	{
		if(mysqli_affected_rows($conn) > 0)
		{
			echo '<script>alert("Data updated ")</script>';
			echo '<script>window.location="admin_products.php"</script>';
		}
		else
		{
			echo '<script>alert("no data updated ")</script>';
			echo '<script>window.location="admin_products.php"</script>';
		}
	}
	else
	{
		echo "connection error";
	}

	
	if (move_uploaded_file($_FILES['image']['tmp_name'], $folder))
		{
			echo "image uploaded ";
		}
		else
			{
				echo "image not uploaded";
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
	body{
		font-family: Garamond, Baskerville, "Baskerville Old Face", "Hoefler Text", "Times New Roman", serif;

	}
	.btn{
		
		border-radius: 0;
		font-family: Garamond, Baskerville, "Baskerville Old Face", "Hoefler Text", "Times New Roman", serif;

	}

	.head{
		color: gray;

		font-family: Garamond, Baskerville, "Baskerville Old Face", "Hoefler Text", "Times New Roman", serif;

	}
	.col{
		font-weight: bold;
	}

</style>

<body>
	<div class="mainDiv">

	<nav id="mainNav">
		<div class="logo">
			 <a href="page1.php"><img src="logo2.png" ></a>
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
	<center><h2 class="head">Update Product</h2></center>
	<br>


		<?php 

		 $product_id  = $_GET['product_id'];
		

		?>

	<div class="row">
		<div class="col">

			<form action="admin_update_product_pic.php" method="post" enctype="multipart/form-data">

				<input type="hidden" name="product_id" value="<?php echo $product_id;?>">
		
		<label>Choose file to Upload</label>
		
		<input type="file" name="image" class="form-control" >
		
		
		<br>
		<input type="submit" name="update_data" class="btn btn-warning" value="Update Product Image">
		<a href="admin_products.php" class="btn btn-success">Back to Products</a>
		</form>
	</div>

		
	</div>
		
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

























