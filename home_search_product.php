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
			<li><a href="home_nav_collection.php?collection=Shelves">Shelves</a></li>
				<li><a href="home_nav_collection.php?collection=Rugs">Rugs</a></li>
				<li><a href="home_nav_collection.php?collection=Lamps">Lamps</a></li>
				<li><a href="home_nav_collection.php?collection=Wall Clocks">Wall Clocks</a></li>


			</ul>
		</div>
		<div class="icon">
			<div class="icon_div">
			<!-- <i class="fa fa-search"></i> -->

				<form action="home_search_product.php" method="post">
					<input type="submit" class="input2" name="search">
					<input type="text" name="findpro" >

				</form>
			<a href="login.php"><i class="fa fa-user"></i></a>
			<i class="fa fa-shopping-cart"></i>
			</div>
		</div>
	</nav>

	 <br><br><br>


<!-- <hr class="hr_css"> -->

<div class="container" id="option">
	<?php
		
		if(isset($_POST['search']))
		{
			$findpro = $_POST["findpro"];

            // $sql = "SELECT * FROM products WHERE title = '$findpro' ";

            $sql = "SELECT * FROM `products` WHERE CONCAT(`title`, `description`, `prev_price` , `price`, `image`, `category`, `sub_cat`) LIKE '%".$findpro."%'";
            // print_r($sql);

           $result = mysqli_query($conn, $sql);
           $total_row= mysqli_num_rows($result); 
    

          
           		?>
	<div class="row">

		

		<center><h3 style="margin-top: 60%;">Your Search Result</h3></center>
		
		<br><br><br>

	</div>

	<hr class="hr_css">
		<br>
	<div class="row">

		<div class="col" >
			<select class="form-control" onchange="location = this.value;">
			<option>Filter</option>
		    
		    <option  value="index_nav_collection.php?collection=Shelf">Shelf</option>
			
			<option  value="index_nav_collection.php?collection=Table">Table</option>
		    
		    <option value="index_nav_collection.php?collection=TV Consoles">TV console</option>
		</select>
	    </div>

	   
	    <center>
	    <div class="col" style="color: gray;">
		   <i><?php echo $total_row; ?> Products</i>		
	    </div>
        </center>

        <div class="col" align="right" >
        		<select class="form-control" name="sort" onchange="location= this.value;">
        		
        		<option value="1">Sort</option>

        		<option value="home_nav_collection.php?collection=<?php echo $shelve;?>|best">Best Selling</option>

        		<option value="home_nav_collection.php?collection=<?php echo $shelve;?>|A" >

        	     Alphabetically A - Z

                </option>
        		
        		<option value="home_nav_collection.php?collection=<?php echo $shelve;?>|Z">Alphabetically Z - A</option>

        		<option value="home_nav_collection.php?collection=<?php echo $shelve;?>|PL">Price, Low to Hight</option>

        		<option value="home_nav_collection.php?collection=<?php echo $shelve;?>|PH">Price, Hight to Low</option>

        		<option value="home_nav_collection.php?collection=<?php echo $shelve;?>|Dn">Date, new to old</option>

        		<option value="home_nav_collection.php?collection=<?php echo $shelve;?>|Do">Date, old to new</option>
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
				<a href="home_product_detail.php?product_id=<?php echo $row['product_id'];?>&title=<?php echo $row['title'];?>">
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

<?php  } ?>
</div>




<div class="container">
	<br><hr><br>
		<!-- <div class="row">
			<h2>SUBCRIBE US !</h2>
		</div>
		<br>
		<div class="row">
			<h5>Get Special Discounts and Email Notification when Sale starts!</h5>
		</div> -->
		<br>
		<br><br>
		<!-- <div class="row">
		<input type="" placeholder="Email Address" class="form-control" style="width: 25%;border: 1px solid #eee;"  name="">
			<a href="#" class="btn btn-info btn-lg" style="border-radius: 0;">
           SUBSCRIBE 
        </a>
			
		</div> -->

		<!-- <br>
		<br><br><br> -->
		<div class="row">
			<a href="home_collection.php" style="text-decoration: none; color: gray; font-size: 1.2rem;">Search</a>
			
		</div>
</div>
	
<br>
<br><br>
<br>

<div class="footer" style="background-color: white;" align="center">
	<label style="color: gray;">© 2021, Home A Heaven</label>
</div>

</div>


</body>
</html>