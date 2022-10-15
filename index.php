<?php 
include('conn.php');
include('functions.php')
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



.col-sm-4 .figure{
	height: 100%;
	overflow: hidden;
	position: relative;

    }
    .figure img{
    	/*border-radius: 70%;*/
    	height: 250px;
    	transition: all .5s linear;
    	/*background-size: auto;*/
    	/*background-repeat: no-repeat;    	*/
    	}

    .figcaption{
	position: absolute;
	left: 0;
	top: 0;
	width: 100%;
	height: 100%;
	color: black;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	text-transform: uppercase;
	opacity: 0;
	transition: all 1s linear;
	/*background-color: green;*/
	opacity: 1;

}


.figure:hover img{
	transform: scale(1.2);
}

.figure:hover .figcaption{
	opacity: 1;
	background: rgba(0,0,0,0.7);
	color: white;
}



.text-center{
	margin-top: 80px;
	justify-content: center;
	align-items: center;
	/*background-color: pink;*/
}
.text-center .btn{
	font-size: 1.2rem;
	/*justify-content: center;
	text-align: center !important;*/
	padding: 10px 40px;
	border-radius: 0;
	background-color: #7796a8;
}

.text-center1{
	/*margin-top: 80px;*/
	justify-content: center;
	align-items: center;
	/*background-color: pink;*/
}
.text-center1 .btn{
	font-size: 1.2rem;
	/*justify-content: center;
	text-align: center !important;*/
	padding: 5px 80px;
	border-radius: 0;
	background-color: #7796a8;
	margin-bottom: 20px;
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
				<li><a href="#clock">Wall Clocks</a></li>

			</ul>
		</div>
			</div>
		<div class="icon">
			<div class="icon_div">

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


<!-- <hr class="hr_css"> -->


<!-- container -->

	<div class="container-fluide">
	<a href="collection.php" id="con_a">
		<img src="furniture - Copy.jpg">
	</a>

	</div>



<!-- option side portion -->


	<div class="container-fluid" id="option">

		<h2 align="center" id="living">COLLECTION LIST</h2>
		<div class="row" >

		<div class="col-sm-4">
		
		<!-- <div class="second-pg-div"> -->
			
			<figure class="figure">
				<a href="index_nav_collection.php?collection=Shelves">
				<img src="image/shelf3.jpg" onclick="breakfast.php">
				<figcaption class="figcaption"><h5>Shelves</h5></figcaption>
			</a>
			
			</figure>
		</div>
		<div class="col-sm-4">
			
			<figure class="figure">
				<a href="index_nav_collection.php?collection=Living Room">
				<img src="image/living0.jpg" onclick="breakfast.php">	
				<figcaption class="figcaption"><h5>Living Rooms</h5></figcaption>
			</a>
			
			</figure>
		</div>
		<div class="col-sm-4">

			<figure class="figure">
				<a href="index_nav_collection.php?collection=Wall Clocks">
				<img src="image/time.jpg" onclick="breakfast.php">
				<figcaption class="figcaption"><h5>Wall Clock</h5></figcaption>
			</a>
			
			</figure>

		</div>

		<div class="col-sm-4">

			<figure class="figure">
				<a href="index_nav_collection.php?collection=Rugs">
				<img src="image/table.jpg" onclick="breakfast.php">
				<figcaption class="figcaption"><h5>Rugs</h5></figcaption>
			</a>
			
			</figure>

		</div>

		<div class="col-sm-4">

			<figure class="figure">
				<a href="index_nav_collection.php?collection=Table">
				<img src="image/living0.jpg" onclick="breakfast.php">
				<figcaption class="figcaption"><h5>Table</h5></figcaption>
			</a>
			
			</figure>

		</div>

		<div class="col-sm-4">

			<figure class="figure">
				<a href="index_nav_collection.php?collection=Chair">
				<img src="image/chair.jpg" onclick="breakfast.php">
				<figcaption class="figcaption"><h5>Chair</h5></figcaption>
			</a>
			
			</figure>

		</div>
<!-- 
		<div class="col-sm-3">

			<figure>
				<img src="image/time.jpg" onclick="breakfast.php">
				<figcaption><h5>Wall Clock</h5></figcaption>
			</figure>

		</div>

		<div class="col-sm-3">

			<figure>
				<img src="image/time.jpg" onclick="breakfast.php">
				<figcaption><h5>Wall Clock</h5></figcaption>
			</figure>

		</div> -->
	   </div>
	</div>

	<!-- decor -->

	<div class="container" id="option">

		<h2 align="center" id="decor">DECOR COLLECTION</h2>
		<div class="row">

			<?php 
			$sql="SELECT * FROM products WHERE category = 'Decor' AND product_id <=20 ";
			$dec=mysqli_query($conn,$sql);
			// print_r($sql);
			while($row=mysqli_fetch_assoc($dec))

			// for ($i = 15; $i <= $dec->num_rows; $i++) 
			{
			 // echo "The number is: $x <br>";
				// print_r($dec->fetch_assoc());
				// $row = $dec->fetch_assoc();

				// echo $row['title'];
				// echo $row['title'];
				// echo $row['title'];
				// echo $row['title'];	
				// echo $row['title'];
				?>

				 <div class="col-sm-4">
	        	<figure>
	        		<a href="product_detail.php?product_id=<?php echo $row['product_id'];?>&title=<?php echo $row['title'];?>">
	        		<?php echo "<img src='image/".$row['image']."'/>"; ?>
	        	</a>

	        		<!-- <img src="image/g5.jpg" onclick="breakfast.php"> -->
	        		
	        		<center>
	        			<h5><?php echo $row['title'];?></h5>
				        <h6 style="color: gray;"><del> Rs.<?php echo $row['prev_price'];?>.00</del> Rs.<?php echo $row['price'];?>.00 Sale</h6>
				    </center>

				</figure>
			</div>

			<?php
				
			}


			?>



	    <!--     <div class="col-sm-4">
	        	<figure>
	        		<img src="image/g5.jpg" onclick="breakfast.php">
	        		
	        		<center>
	        			<h5><?php echo $row['title'];?></h5>
				        <h6 style="color: gray;"><del><?php echo $row['prev_price'];?></del><?php echo $row['price'];?> Sale</h6>
				    </center>
				</figure>
			</div>
 -->
		<!-- <div class="col-sm-4">
		
		
			<figure>
				<img src="image/g5.jpg" onclick="breakfast.php">
			
				<center>
				<h5>Large Corner Shelf Walnut Brown</h5>
				<h6 style="color: gray;"><del> Rs.5,500.00</del> Rs.2,999.00 Sale</h6>
			</center>
			</figure>
		</div> -->
		<!-- <div class="col-sm-4">
			
			<figure>
				<img src="image/g0.jpg" onclick="breakfast.php">	
				
				<center>
				<h5>Large Corner Shelf Walnut Brown</h5>
				<h6 style="color: gray;"><del> Rs.5,500.00</del> Rs.2,999.00 Sale</h6>
			</center>
			</figure>
		</div> -->
		<!-- <div class="col-sm-4">
			<figure>
				<img src="image/g2.jpg" onclick="breakfast.php">
				
				<center>
				<h5>Large Corner Shelf Walnut Brown</h5>
				<h6 style="color: gray;"><del> Rs.5,500.00</del> Rs.2,999.00 Sale</h6>
			</center>
			</figure>
		</div> -->


		<!-- <div class="col-sm-4">
			<figure>
				<img src="image/g5.jpg" onclick="breakfast.php">
				
				<center>
				<h5>Large Corner Shelf Walnut Brown</h5>
				<h6 style="color: gray;"><del> Rs.5,500.00</del> Rs.2,999.00 Sale</h6>
			</center>
			</figure>
		</div> -->
		<!-- <div class="col-sm-4">
			
			<figure>
				<img src="image/g0.jpg" onclick="breakfast.php">	
				
				<center>
				<h5>Large Corner Shelf Walnut Brown</h5>
				<h6 style="color: gray;"><del> Rs.5,500.00</del> Rs.2,999.00 Sale</h6>
			</center>
			</figure>
		</div> -->
		<!-- <div class="col-sm-4">

			<figure>
				<img src="image/g2.jpg" onclick="breakfast.php">
				
				<center>
				<h5>Large Corner Shelf Walnut Brown</h5>
				<h6 style="color: gray;"><del> Rs.5,500.00</del> Rs.2,999.00 Sale</h6>
			</center>
			</figure>

		</div> -->

		<!-- <div class="col-sm-4">
			<figure>
				<img src="image/g5.jpg" onclick="breakfast.php">
				<center>
				<h5>Large Corner Shelf Walnut Brown</h5>
				<h6 style="color: gray;"><del> Rs.5,500.00</del> Rs.2,999.00 Sale</h6>
			</center>
			</figure>
		</div> -->
	<!-- 	<div class="col-sm-4">
			
			<figure>
				<img src="image/g0.jpg" onclick="breakfast.php">	
				
				<center>
				<h5>Large Corner Shelf Walnut Brown</h5>
				<h6 style="color: gray;"><del> Rs.5,500.00</del> Rs.2,999.00 Sale</h6>
			</center>
			</figure>
		</div> -->
		
	   </div>
	   <div class="text-center"> <a href="index_nav_collection.php?collection=Décor" class="btn btn-info vew_all_decor">Veiw All</a></div>
	</div>

<div id="Shelves"></div>
	<div class="container" id="option">

		<h2 align="center">Living Room</h2>
		<div class="row">

				<?php 
			$sql="SELECT * FROM products WHERE category = 'Living Room' AND product_id <=20 ";
			$dec=mysqli_query($conn,$sql);
			// print_r($sql);
			while($row=mysqli_fetch_assoc($dec))

			// for ($i = 15; $i <= $dec->num_rows; $i++) 
			{
				?>



	
	 <div class="col-sm-4">
	        	<figure>
	        		<a href="product_detail.php?product_id=<?php echo $row['product_id'];?>&title=<?php echo $row['title'];?>">
	        		<?php echo "<img src='image/".$row['image']."'/>"; ?>
	        	</a>

	        		<!-- <img src="image/g5.jpg" onclick="breakfast.php"> -->
	        		
	        		<center>
	        			<h5><?php echo $row['title'];?></h5>
				        <h6 style="color: gray;"><del> Rs.<?php echo $row['prev_price'];?>.00</del> Rs.<?php echo $row['price'];?>.00 Sale</h6>
				    </center>
				</figure>
			</div>


        <?php 
         }
        ?>




	   </div>
	    <div class="text-center"> <a href="index_nav_collection.php?collection=Living Room" class="btn btn-info vew_all_decor">Veiw All</a></div>
	</div>


<div id="clock"></div>
	<div class="container" id="option">

		<h2 align="center">Wall Clocks</h2>
		<div class="row">

				<?php 
			$sql="SELECT * FROM products WHERE category ='Wall Clocks' AND product_id <=30 ";
			$dec=mysqli_query($conn,$sql);
			// print_r($sql);
			while($row=mysqli_fetch_assoc($dec))

			// for ($i = 15; $i <= $dec->num_rows; $i++) 
			{
				?>



	
	 <div class="col-sm-4">
	        	<figure>
	        		<a href="product_detail.php?product_id=<?php echo $row['product_id'];?>&title=<?php echo $row['title'];?>">
	        		<?php echo "<img src='image/".$row['image']."'/>"; ?>
	        	    </a>

	        		<!-- <img src="image/g5.jpg" onclick="breakfast.php"> -->
	        		
	        		<center>
	        			<h5><?php echo $row['title'];?></h5>
				        <h6 style="color: gray;"><del> Rs.<?php echo $row['prev_price'];?>.00</del> Rs.<?php echo $row['price'];?>.00 Sale</h6>
				    </center>
				</figure>
			</div>


        <?php 
         }
        ?>
		
	   </div>
	    <div class="text-center"> <a href="index_nav_collection.php?collection=Wall Clocks" class="btn btn-info vew_all_decor">Veiw All</a></div>
	</div>



	<!-- ========================== -->
	<br>
	<br>
	<br>
	<br>
	<?php 
		$sql="SELECT * FROM products WHERE category ='Living Room' AND sub_cat='Table' AND product_id >35 && product_id <40 ";
			$dec=mysqli_query($conn,$sql);
			while($row=mysqli_fetch_assoc($dec)) 
			{
				?>


		
	<div class="container">
		
		<div class="row">
			<div class="col">
				<?php echo "<img src='image/".$row['image']."' height='400px' width='600px'/>"; ?>
				<!-- <img src="image/j1.jpg" height="400px" width="600px" > -->
			</div>
			<div class="col">
				<h1><?php echo $row['title'];?></h1>
				<h5><del> Rs.<?php echo $row['prev_price'];?>.00</del> Rs.<?php echo $row['price'];?>.00 Sale</h5>
				<div class="text-center1">
				<a href="product_detail.php?product_id=<?php echo $row['product_id'];?>&title=<?php echo $row['title'];?>" class="btn btn-info">Add to Cart</a></div>
				<ul class="ul">
					<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit dolor sit amet, consectetur </li>
					<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit </li>
					<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit sit amet, consectetur adipisicing </li>
					<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit </li>
					<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet</li>
					<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet</li>
					<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet</li>
				</ul>


				

				
				
			</div>
			
		</div>
	</div>

	<br>
	<br>
	<br>
	<br>
<?php }?>


	<!-- <div class="container">
			<div class="row">
				<div class="col">
				<img src="image/j1.jpg" height="400px" width="600px" >
			</div>
			<div class="col">
				<h1>Dining Room Set</h1>
				<h5><del> Rs.5,500.00</del> Rs.2,999.00 Sale</h5>
				<div class="text-center1">
				<a href="login.php" class="btn btn-info">Add to Cart</a></div>
				<ul class="ul">
					<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit dolor sit amet, consectetur </li>
					<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit </li>
					<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit sit amet, consectetur adipisicing </li>
					<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit </li>
					<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet</li>
					<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet</li>
					<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet</li>
				</ul>


				

				
				
			</div>
			
		</div>
	</div>
	<br>
	<br>
	<br>
	<br>


	<div class="container">
	


		<div class="row">
			<div class="col">
				<img src="image/j1.jpg" height="400px" width="600px" >
			</div>
			<div class="col">
				<h1>Dining Room Set</h1>
				<h5><del> Rs.5,500.00</del> Rs.2,999.00 Sale</h5>
				<div class="text-center1">
				<a href="login.php" class="btn btn-info">Add to Cart</a></div>
				<ul class="ul">
					<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit dolor sit amet, consectetur </li>
					<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit </li>
					<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit sit amet, consectetur adipisicing </li>
					<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit </li>
					<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet</li>
					<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet</li>
					<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet</li>
				</ul>				

				
				
			</div>
			
		</div>
		
	</div> -->


<br>
	<br>
	<br>
	<br>

	<div class="container">
		<div class="row">
			<h2>SUBCRIBE US !</h2>
		</div>
		<br>
		<div class="row">
			<h5>Get Special Discounts and Email Notification when Sale starts!</h5>
		</div>
		<br>
		<br><br>
		<div class="row">
			<input type="" placeholder="Email Address" class="form-control" style="width: 25%;border: 1px solid #eee;"  name="">
			<a href="#" class="btn btn-info btn-lg" style="border-radius: 0;">
           SUBSCRIBE 
        </a>
			
		</div>

		<br>
		<br><br><br>
		<div class="row">
			<a href="collection.php" style="text-decoration: none; color: gray; font-size: 1.2rem;">Search</a>
			
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