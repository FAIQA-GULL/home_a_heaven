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
</head>
<style type="text/css">
	.form-control
	{
		width: 20%;
		border:none;
	}

	/*.dropdown {
  position: relative;
  display: inline-block;
}


	.dropdown  .dropdown-menu{
		display: none;
		position: absolute;
		z-index: 1;

	}*/

	.dropdown:hover .dropdown-menu {
	  display: block;

	}
	/*.dropdown .dropdown-menu:hover li a{
		color: black;
		
	}*/


</style>
<body>
<div class="mainDiv">

	<nav id="mainNav">
		<div class="logo">
			 <a href="index.php"><img src="logo2.png" ></a>
		</div>
		<div class="list">

			
			<ul class="mainUl">
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" id="menu1" href="#">Living Room<span class="caret"></span></a>

					<ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Shelf</a></li>
						<br>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#">TV Consoles</a></li>
						<br>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Table</a></li>
						<br>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Chair</a></li>
						<br>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Rugs</a></li>
						<br>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Lamps</a></li>
						<br>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Bar Stool</a></li>
						<br>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Shoe Rack</a></li>
						<br>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Iron Stone</a></li>
					</ul>

				</li>
				
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" id="menu1" href="#">Decor<span class="caret"></span></a>

					<ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Shelf</a></li>
						<br>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#">TV Consoles</a></li>
						<br>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Table</a></li>
						<br>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Chair</a></li>
						<br>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Rugs</a></li>
						<br>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Lamps</a></li>
						<br>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Bar Stool</a></li>
						<br>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Shoe Rack</a></li>
						<br>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Iron Stone</a></li>
					</ul>
				</li>
				<li><a href="#Shelves">Shelves</a></li>
				<li><a href="#rug">Rugs</a></li>
				<li><a href="#lamps">Lamps</a></li>
				<li><a href="#clock">Wall Clocks</a></li>

			</ul>
		</div>
		<div class="icon">
			<div class="icon_div">
			<i class="fa fa-search"></i>
			<i class="fa fa-user"></i>
			<i class="fa fa-shopping-cart"></i>
			</div>
		</div>
	</nav>

	 <br><br><br>


<hr class="hr_css">

<div class="container" id="option">
	<div class="row">
		<center><h3 style="margin-top: 60%;">Shelves</h3></center>
		
		<br><br><br>

	</div>

	<hr class="hr_css">
		<br>
	<div class="row">

		<div class="col" >
		<select class="form-control">
			<option>Filter</option>
			<option>Shelf</option>
			<option>Table</option>
			<option>TV console</option>
		</select>
	    </div>

	    <?php

   
     	  $sql = "SELECT * FROM products WHERE category ='Leather Art'";
          $result=mysqli_query($conn,$sql);
          $total_row= mysqli_num_rows($result); 


	    ?>

	    <center>
	    <div class="col" style="color: gray;">
		   <i><?php echo $total_row; ?> Products</i>		
	    </div>
        </center>

        <div class="col" align="right" >
        	<select class="form-control">
        		<option>Sort</option>
        		<option>Best Selling</option>
        		<option>Alphabetically A - Z</option>
        		<option>Alphabetically Z - A</option>
        		<option>Price, Low to Hight</option>
        		<option>Price, Hight to Low</option>
        		<option>Date, new to old</option>
        		<option>Date, old to old</option>
        	</select>
        </div>

      
    </div>
    <br>
      <hr class="hr_css">



<br><br><br>


<div class="row">
	<?php

	while($row=mysqli_fetch_assoc($result))
	    { 


	?>

	<div class=" col-sm-4">
		<figure>
				<a href="product_detail.php">
				<?php echo "<img src='image/".$row['image']."'/>"; ?>
				<!-- <figcaption><h5>Shelves</h5></figcaption> -->
			</a>
			<center>
				<h5><?php  echo $row['title'];?></h5>
				<h6 style="color: gray;"><del> Rs.<?php echo $row['prev_price'];?>.00</del> Rs.<?php echo $row['price'];?>.00 Sale</h6>
			</center>
		</figure>		
	</div>
    
    <?php }?>




</div>


</div>




<div class="container">
	<br><br><br><hr><br><br><br>
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
			<input type="text" placeholder="Email Address" class="form-control"  style="width: 25%;" name="">
			<a href="#" class="btn btn-info btn-lg" style="border-radius: 0;">
           SUBSCRIBE 
        </a>
			
		</div>

		<br>
		<br><br><br>
		<div class="row">
			<input type="submit" class="btn btn-info" name="" value="Search">
			
		</div>
	</div>
	
<br>
<br><br>
<br>

<div class="footer" align="center">
	<label> All rights reserved by HOME A HEAVEN</label>
</div>

</div>


</body>
</html>