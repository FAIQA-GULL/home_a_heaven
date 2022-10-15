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
<link rel="stylesheet" type="text/css" media="screen and (max-width: 1175px)" href="css/phone.css">
</head>
<style type="text/css">
	.dropdown:hover .dropdown-menu {
	  display: block;

	}
	#form-control{
		width: 100%;
		border-radius: 0;
	}
	a{
		text-decoration: none !important;
		color: gray;


	}
	.links{
		text-decoration: none !important;
		color: gray;
		font-size: 1.2rem;
		font-family: Garamond, Baskerville, "Baskerville Old Face", "Hoefler Text", "Times New Roman", serif;

	}

		.mainDiv{
		height: 75%;
		width: 100%;
	}
	.head{

		font-size: 3.0rem;

		/*font-family: 'Playfair Display', serif;*/
		font-family: Garamond, Baskerville, "Baskerville Old Face", "Hoefler Text", "Times New Roman", serif;
		
		
	}
	label{
		/*font-family: 'Playfair Display', serif;*/
		font-family: Garamond, Baskerville, "Baskerville Old Face", "Hoefler Text", "Times New Roman", serif;
		/*font-weight: bold;*/
	}
	.btn{
		background-color: #7796a8;
		border-radius: 0;
		font-family: Garamond, Baskerville, "Baskerville Old Face", "Hoefler Text", "Times New Roman", serif;

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
.nav_input{
	width: 100%;
	border:1px solid #eee;
}

	
	
</style>

<body>

<div class="mainDiv">

	<nav id="mainNav">
		<div class="logo">
			 <a href="index.php"><img src="logo2.png" ></a>
		</div>
		<div class="phone">
		<div class="list">

			
			<ul class="mainUl">
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" id="menu1" href="#">Living Room<span class="caret"></span></a>

					<ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
						<li role="presentation"><a role="menuitem" tabindex="-1" href="index_nav_collection.php?collection=Shelf">Shelf</a></li>
						<br>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="index_nav_collection.php?collection=TV Consoles">TV Consoles</a></li>
						<br>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="index_nav_collection.php?collection=Table">Table</a></li>
						<br>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="index_nav_collection.php?collection=Chair">Chair</a></li>
						<br>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="index_nav_collection.php?collection=Rugs">Rugs</a></li>
						<br>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="index_nav_collection.php?collection=Lamps">Lamps</a></li>
						<br>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="index_nav_collection.php?collection=Bar Stool">Bar Stool</a></li>
						<br>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="index_nav_collection.php?collection=Shoe Rack">Shoe Rack</a></li>
						<br>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="index_nav_collection.php?collection=Iron Stone">Iron Stone</a></li>
					</ul>

				</li>
				
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" id="menu1" href="#">Decor<span class="caret"></span></a>

					<ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
						<li role="presentation"><a role="menuitem" tabindex="-1" href="index_nav_collection.php?collection=Candel Stands">Candel Stands</a></li>
						<br>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="index_nav_collection.php?collection=Wall Clocks">Wall Clocks</a></li>
						<br>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="index_nav_collection.php?collection=Lamps">Lamps</a></li>
						<br>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="index_nav_collection.php?collection=Key Hangers">Key Hangers</a></li>
						<br>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="index_nav_collection.php?collection=Planters">Planters</a></li>
						<br>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="index_nav_collection.php?collection=Antique Telephones">Antique Telephones</a></li>
						<br>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="index_nav_collection.php?collection=Vases">Vases</a></li>
						<br>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="index_nav_collection.php?collection=Table Decor">Table Decor</a></li>
						<br>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="index_nav_collection.php?collection=Stickers">Stickers</a></li>
						<br>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="index_nav_collection.php?collection=Newspaper Stands">Newspaper Stands</a></li>
						<br>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="index_nav_collection.php?collection=Wrist Watches">Wrist Watches</a></li>
						<br>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="index_nav_collection.php?collection=Other Decor">Other Decor</a></li>
					</ul>
				</li>

				<li><a href="index_nav_collection.php?collection=Shelves">Shelves</a></li>
				<li><a href="index_nav_collection.php?collection=Rugs">Rugs</a></li>
				<li><a href="index_nav_collection.php?collection=Lamps">Lamps</a></li>
				<li><a href="index_nav_collection.php?collection=Wall Clocks">Wall Clocks</a></li>

			</ul>
		</div>
	</div>
		<div class="icon">
			<div class="icon_div">
			<!-- <i class="fa fa-search"></i> -->
			
			<form action="search_product.php" method="post">
					<input type="submit" class="input2" name="search">
					<input type="text" name="findpro" >

				</form>
				
				<div class="dropdown" style="  padding-bottom: 0;"><a href="#" ><i class="fa fa-user"></i></a>
				
				<ul class="dropdown-menu" style="top: 30px; min-width: 10rem; left: -180px;" role="menu" aria-labelledby="menu1">
					
					  
						<div class="container">

							<br>
							<form method="POST" action="user_orders.php">

							<input type="" class="form-control nav_input" name="order_email" placeholder="Enter Email" required>
							<br>
							<input type="" class="form-control nav_input" name="order_pass" placeholder="Enter Password" required>
							<br>
							<!-- <li role="presentation"><a role="menuitem" tabindex="-1" href="search_user_orders.php" style="text-decoration: none; color: black;" ><center>Track Your Orders</center></a></li> -->
							
							<li role="presentation"><center>
								<input type="submit" role="menuitem" tabindex="-1" name="orders" class="btn" value="Track Your Orders"></center>
							</li>

							</form>
							<br>
							<li><a href="login.php" class="btn" style="border-radius: 20%; background-color: #eee; text-decoration: none; color: black;" > Log-In </a></li>

						</div>

				</ul>
			</div>
			
			<a href="index_cart.php" style="text-decoration: none; color: black;"><i class="fa fa-shopping-cart"></i><span id="demo">0</span></a>
			 <a href="javascript:void(0);" class="icon1" onclick="bFunction()">
    <i class="fa fa-bars"></i>
  </a>
			</div>
		</div>
		

	</nav>

	



	

  

    <br><br><br>






	<br><br><br>
<div class="container">
	<div class="row">

		<center>
			<h2 style="color: gray;" class="head">Enter Email</h2>

		</center>
	</div>
	<br><br><br>

	<div class="row">
		<div class="col-sm-6">
	
	<form method="post" action="check_forget_pass.php">
		  <?php echo display_error(); ?>
			

		<label>Email</label>
		<!-- <span></span> -->

		<input type="" class="form-control" id="form-control" name="user_email" required>
		
		<!-- d -->
		


		<br>
		<center>
		<a href="forget_password.php"  class="links">Forget your Password?</a>
		<br>
		<br>
		<input type="submit" class="btn btn-info btn-lg" name="forget" value="Submit">
	
		<br>
		<br>
		<a href="login.php" class="links">Back to Login</a>
	    </center>
	    </form>
		</div>
	
	</div>


	
</div>







<!-- <br><hr><br> -->


<div class="container">
	<br><!-- <hr> --><br>
		
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
	<!-- <th></th> -->
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