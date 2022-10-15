<?php 
include('conn.php');
include('functions.php');


$order_id = $_GET['order_id'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Order Deatil</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="bst.css">

	

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="style_sheet.css">
</head>
<style type="text/css">
	.form-control
	{
		width: 20%;
		border:none;
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


	.dropdown:hover .dropdown-menu {
	  display: block;

	}
		.nav_input{
	width: 100%;
	border:1px solid #eee;
}

/*======================================*/


</style>
<body>

<div class="mainDiv">

		<nav id="mainNav">
		<div class="logo">
			 <a href="home_page.php"><img src="logo2.png" ></a>
		</div>
		<div class="list">
			<ul class="mainUl">
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" id="menu1" href="#">Living Room<span class="caret"></span></a>

				<ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
						<li role="presentation"><a role="menuitem" tabindex="-1" href="home_nav_collection.php?collection=Shelf">Shelf</a></li>
						<br>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="home_nav_collection.php?collection=TV Consoles">TV Consoles</a></li>
						<br>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="home_nav_collection.php?collection=Table">Table</a></li>
						<br>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="home_nav_collection.php?collection=Chair">Chair</a></li>
						<br>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="home_nav_collection.php?collection=Rugs">Rugs</a></li>
						<br>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="home_nav_collection.php?collection=Lamps">Lamps</a></li>
						<br>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="home_nav_collection.php?collection=Bar Stool">Bar Stool</a></li>
						<br>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="home_nav_collection.php?collection=Shoe Rack">Shoe Rack</a></li>
						<br>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="home_nav_collection.php?collection=Iron Stone">Iron Stone</a></li>
					</ul>
				</li>
				
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" id="menu1" href="#">Decor<span class="caret"></span></a>

					<ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
						<li role="presentation"><a role="menuitem" tabindex="-1" href="home_nav_collection.php?collection=Candel Stands">Candel Stands</a></li>
						<br>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="home_nav_collection.php?collection=Wall Clocks">Wall Clocks</a></li>
						<br>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="home_nav_collection.php?collection=Lamps">Lamps</a></li>
						<br>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="home_nav_collection.php?collection=Key Hangers">Key Hangers</a></li>
						<br>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="home_nav_collection.php?collection=Planters">Planters</a></li>
						<br>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="home_nav_collection.php?collection=Antique Telephones">Antique Telephones</a></li>
						<br>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="home_nav_collection.php?collection=Vases">Vases</a></li>
						<br>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="home_nav_collection.php?collection=Table Decor">Table Decor</a></li>
						<br>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="home_nav_collection.php?collection=Stickers">Stickers</a></li>
						<br>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="home_nav_collection.php?collection=Newspaper Stands">Newspaper Stands</a></li>
						<br>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="home_nav_collection.php?collection=Wrist Watches">Wrist Watches</a></li>
						<br>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="home_nav_collection.php?collection=Other Decor">Other Decor</a></li>
					</ul>
				</li>
				<li><a href="home_nav_collection.php?collection=Shelves">Shelves</a></li>
				<li><a href="home_nav_collection.php?collection=Rugs">Rugs</a></li>
				<li><a href="home_nav_collection.php?collection=Lamps">Lamps</a></li>
				<li><a href="home_nav_collection.php?collection=Wall Clocks">Wall Clocks</a></li>

			</ul>
		</div>
		<div class="icon">
			<div class="icon_div">
				<form action="home_search_product.php" method="post">
					<input type="submit" class="input2" name="search">
					<input type="text" name="findpro" >

				</form>
				
				<div class="dropdown" style="  padding-bottom: 0;"><a href="#" ><i class="fa fa-user"></i></a>
				
				<ul class="dropdown-menu" style="top: 30px; min-width: 10rem; left: -180px;" role="menu" aria-labelledby="menu1">
					
					  
						<div class="container">

							<br>
							<form method="POST" action="home_user_order.php">

							<input type="" class="form-control nav_input" name="order_email" placeholder="Enter Email" required>
							<br>
							<input type="" class="form-control nav_input" name="order_pass" placeholder="Enter Password" required>
							<br>
							
							<li role="presentation"><center>
								<input type="submit" role="menuitem" tabindex="-1" name="orders" class="btn" value="Track Your Orders"></center>
							</li>

							</form>
							<br>
							<li><a href="logout.php" class="btn" style="border-radius: 20%; background-color: #eee; text-decoration: none; color: black;" > Log-Out </a></li>

						</div>

				</ul>
			</div>
			<a href="cart.php" style="text-decoration: none; color: black;"><i class="fa fa-shopping-cart"></i><span id="demo">0</span></a>
			</div>
		</div>
	</nav>

	

  

    <br>


  

   

 <div class="container" id="option">
	
		<center><h2 class="head">Order Detail</h2>

	
		

	</center>

	<hr class="hr_css">
		<br>
	<div class="row">
		<div class="col"></div>

	


	    <center>
	    <div class="col" style="color: gray;">
		<h4 class="head" style="color: gray;">Order ID <?php echo $order_id;?></h4>
	    </div>
        </center>

        <div class="col" align="right" >
        	
        </div>

      
    </div>
    
      <!-- <hr class="hr_css"> -->





<div class="row">
	<table class="table">
		<thead>
		<th>Sro.#</th>
			<th>Product Name</th>
			<th>Price</th>
			<th>Quantity</th>
			<th>Subtotal</th>

		</thead>
		<tbody>
	<?php 
		$sno = 1;
		$total = 0;

		$sql="SELECT order_info.user_email, order_info.address, order_info.postal_code
		, order_info.billing_address, order_info.diff_address, order_info.diff_postal
		, order_info.total , order_info.order_id , order_info.ctime ,order_info.cdate
		, cart.product_id , cart.pro_name , cart.pro_price , cart.quantity, cart.subtotal , cart.order_id 

		FROM order_info JOIN cart 
		ON order_info.order_id=cart.order_id 
		WHERE  order_info.order_id ='$order_id'";

			$query =mysqli_query($conn,$sql);
		while($row=mysqli_fetch_assoc($query))
		{

		?>

	<tr>
				<?php echo '<td>'.$sno++.'</td>'?>
				<td><?php echo $row['pro_name'];?></td>
				<td><?php echo $row['pro_price'];?></td>
				<td><?php echo $row['quantity'];?></td>
				<td><?php echo $row['subtotal'];?></td>
		
		

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

	
}

?>
      <tr>
        	<td colspan="4" align="right"> Total</td>
        	<td><?php echo number_format($total, 2);?></td>
        </tr>
</tbody>
</table>


</div>


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
			
		</div>
	</div>
</div>



<div class="container">
	<br><hr><br>
	
		<br>
		<br><br>
		
		<div class="row">
			<a href="search_product.php" style="text-decoration: none; color: gray; font-size: 1.2rem;">Search</a>
			
		</div>
</div>
	
<br>
<br><br>
<br>

<div class="footer" style="background-color: white;" align="center">
	<label style="color: gray;">© 2021, Home A Heaven</label>
</div>

</div>



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

</body>
</html>



<script>
function myFunction() {
  var x = document.getElementById("myTable").rows.length;
  document.getElementById("demo").innerHTML =x;
}
</script>

<script type="text/javascript">
	window.onload=function(){
myFunction();
};
</script>