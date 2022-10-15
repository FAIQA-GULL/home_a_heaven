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
	$user_id =$conn->real_escape_string($_POST['user_id']);
	$user_type=$conn->real_escape_string($_POST['user_type']);
	



    //UPDATE `user_info` SET `user_id`=[value-1],`first_name`=[value-2],`last_name`=[value-3],`user_email`=[value-4],`user_password`=[value-5],`user_contact`=[value-6],`address`=[value-7],`user_type`=[value-8] WHERE 1

	

	$addQuery = "UPDATE `user_info` SET `user_type`='$user_type' WHERE `user_id`='$user_id'";
	// print_r($addQuery);

	

	$prod_sql = mysqli_query($conn, $addQuery);

	if($prod_sql)
	{
		if(mysqli_affected_rows($conn) > 0)
		{
			echo '<script>alert("Data updated ")</script>';
			echo '<script>window.location="admin_users.php"</script>';
		}
		else
		{
			echo '<script>alert("no data updated ")</script>';
			echo '<script>window.location="admin_users.php"</script>';
		}
	}
	else
	{
		echo "connection error";
	}
}             


// delete process

if(isset($_POST['delete_data']))
{
	$user_id =$conn->real_escape_string($_POST['user_id']);

	$addQuery = "DELETE FROM user_info WHERE user_id ='$user_id'";

	$addResult = mysqli_query($conn, $addQuery);

	if($addResult)
	{
		if(mysqli_affected_rows($conn) > 0)
		{
			echo '<script>alert("Data DELETED ")</script>';
			echo '<script>window.location="admin_users.php"</script>';
		}
		else
		{
			echo '<script>alert("no data updated ")</script>';
			echo '<script>window.location="admin_users.php"</script>';
		}
	}
	else
	{
		echo "connection error";
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


<hr class="hr_css">

<div class="container">
	<br><br>
	<!-- <h1>Welcome Admin</h1>	 -->
	<center><h2 class="head">Update User</h2></center>
	<br>


		<?php 

		  $user_id     = $_GET['user_id'];
		  $first_name  = $_GET['first_name'];		
		  $last_name   = $_GET['last_name'];
		  $user_email  = $_GET['user_email'];
		  $user_contact= $_GET['user_contact'];
		  $user_address= $_GET['user_address'];
		 $user_type   = $_GET['user_type'];


		?>

	<div class="row">
		<div class="col">

			<form action="admin_update_user.php" method="post">

				<input type="hidden" name="user_id" value="<?php echo $user_id;?>">
		
		<label>First Name</label>
		
		<input type="text" name="name" class="form-control" value="<?php echo $first_name;?>">
		
		<label>Last Detail</label>
		
		<input type="text" name="" class="form-control" value="<?php echo  $last_name;?>">
		
		<label>User Email</label>
		
		<input type="text" name="" class="form-control" value="<?php echo $user_email;?>">
		
		<label>User Contact</label>
		
		<input type="text" name="" class="form-control" value="<?php echo $user_contact;?>">

		<label>User Address</label>
		<input type="text" name="" class="form-control" value="<?php echo $user_address;?>">
		<label>User Type</label>
		
		<select class="form-control" name="user_type" required/>
			<option value="">UserType Of User This User is = "<?php echo $user_type;?>"</option>

			<?php 

			$sql="SELECT DISTINCT user_type FROM user_info";
			$pr=mysqli_query($conn,$sql);
			while($cat=mysqli_fetch_assoc($pr))
		                    {
		                ?>
		                <option value="<?php echo $cat['user_type']; ?>">

		                	<?php echo $cat['user_type']; ?>
		                	
		                </option>

		                <?php 
		                    }
		                ?>
		</select>
		<br>
		<input type="submit" name="update_data" class="btn btn-warning" value="Update User">
		<input type="submit" name="delete_data" class="btn btn-danger" value="Delete User">
		<a href="admin_users.php" class="btn btn-success">Back to Users</a>
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























