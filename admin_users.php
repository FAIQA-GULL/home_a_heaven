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
	.btn{
		
		border-radius: 0;
		font-family: Garamond, Baskerville, "Baskerville Old Face", "Hoefler Text", "Times New Roman", serif;

	}
	.head{
		color: gray;
		font-family: Garamond, Baskerville, "Baskerville Old Face", "Hoefler Text", "Times New Roman", serif;

	}
	 .table{

		font-family: Garamond, Baskerville, "Baskerville Old Face", "Hoefler Text", "Times New Roman", serif;

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
	<center><h2 class="head">All Users </h2></center>
	<br>

	<table class="table table-hover">
		<thead>
			<th>Sr.#</th>
			<th>User First Name</th>
			<th>User Last Name</th>
			<th>User Email</th>
			<th>User Contact</th>
			<th>User Address</th>
			<th>User Type</th>
			<th>Update</th>
			<th>Delete</th>
		</thead>
		<?php 
		$sno=1;
		$query="SELECT * FROM user_info";
		$result=mysqli_query($conn,$query);
		while($user =mysqli_fetch_assoc($result))
	        {



		?>
		<tbody>
			<tr>
				<?php echo '<td>'.$sno++.'</td>'?>
				<td><?php echo $user['first_name'];?></td>
				<td><?php echo $user['last_name'];?></td>
				<td><?php echo $user['user_email'];?></td>
				<td><?php echo $user['user_contact'];?></td>
				<td><?php echo $user['address'];?></td>
				<td><?php echo $user['user_type'];?></td>
				
				<td><a href="admin_update_user.php?user_id=<?php echo $user['user_id'];?>&first_name=<?php echo $user['first_name'];?>&last_name=<?php echo $user['last_name'];?>&user_email=<?php echo $user['user_email'];?>&user_contact=<?php echo $user['user_contact'];?>&user_address=<?php echo $user['address'];?>&user_type=<?php echo $user['user_type'];?>" class="btn btn-warning">Update</a></td>
				<td><a href="admin_update_user.php?user_id=<?php echo $user['user_id'];?>" class="btn btn-danger">Delete</a></td>

			</tr>
			
		</tbody>
	<?php } ?>
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