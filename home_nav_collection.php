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

// $shelve = $_GET['collection'];
$result = $_GET['collection'];
$result_explode = explode('|', $result);
$shelve = $result_explode[0];
$sort   = $result_explode[1];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Collection List</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="bst.css">

	

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="style_sheet.css">
<link rel="stylesheet" type="text/css" media="screen and (max-width: 1175px)" href="css/phone.css">
</head>
<style type="text/css">
	.mainDiv{
		height: 100%;
	}
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
		<div class="phone">
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
			<a href="javascript:void(0);" class="icon1" onclick="bFunction()">
    <i class="fa fa-bars"></i>
  </a>
			</div>
		</div>
		
	 
	</nav>

	

  

    <br><br><br>


    <!-- <hr class="hr_css"> -->

   

 <div class="container" id="option">
	<div class="row">
		<center><h3 style="margin-top: 60%;"><?php echo $shelve; ?></h3></center>
		
		<br><br><br>

	</div>

	<hr class="hr_css">
		<br>
	<div class="row">

		<div class="col" >
		<!-- <select class="form-control" onchange="location = this.value;">
			<option>Filter</option>
		    
		    <option  value="home_nav_collection.php?collection=Shelf">Shelf</option>
			
			<option  value="home_nav_collection.php?collection=Table">Table</option>
		    
		    <option value="home_nav_collection.php?collection=TV Consoles">TV console</option>
		</select> -->

		<select class="form-control" onchange="location = this.value;">
			<option>Filter</option>
			<?php
			  $op = "SELECT * FROM category JOIN sub_category ON category.cat_name = sub_category.cat_id WHERE sub_category.cat_id = '$shelve' OR sub_category.sub_cat ='$shelve'";

              $opt=mysqli_query($conn,$op);
              while($row=mysqli_fetch_assoc($opt))
              {



			?>
			<option value="home_nav_collection.php?collection=<?php echo $row['sub_cat'];?>|F"><?php echo $row['sub_cat'];?></option>

		    <?php }?>
		   
		</select>
	    </div>

	     <?php
	     // echo $filter = $_GET['filter'];

	     // if (isset($filter)) 
	     //   {

	     // 	$filter = $_GET['filter'];

	     // 	$sql = "SELECT * FROM products WHERE sub_cat ='$filter'";
	     // $result=mysqli_query($conn,$sql);
	     // $total_row= mysqli_num_rows($result);

	     	
	     // }else{


      // $shelve = $_GET['collection'];

	      if ($sort == "best") 
      {
      	$sql = "SELECT * FROM products WHERE sub_cat ='$shelve' OR category='$shelve' ORDER BY price";
          $result=mysqli_query($conn,$sql);

      }
      elseif ($sort == "A")
      {
      	$sql = "SELECT * FROM products WHERE sub_cat ='$shelve' OR category='$shelve' ORDER BY title";
        $result=mysqli_query($conn,$sql);
      
      }
       elseif ($sort == "Z")
      {
      	$sql = "SELECT * FROM products WHERE sub_cat ='$shelve' OR category='$shelve' ORDER BY title DESC";
        $result=mysqli_query($conn,$sql);
      
      }
       elseif ($sort == "PL")
      {
      	$sql = "SELECT * FROM products WHERE sub_cat ='$shelve' OR category='$shelve' ORDER BY price";
        $result=mysqli_query($conn,$sql);
      
      }
      elseif ($sort == "PH")
      {
      	$sql = "SELECT * FROM products WHERE sub_cat ='$shelve' OR category='$shelve' ORDER BY price DESC";
        $result=mysqli_query($conn,$sql);
      
      } 
      elseif ($sort == "Dn")
      {
      	$sql = "SELECT * FROM products WHERE sub_cat ='$shelve' OR category='$shelve' ORDER BY product_id DESC";
        $result=mysqli_query($conn,$sql);
      
      }
      elseif ($sort == "Do")
      {
      	$sql = "SELECT * FROM products WHERE sub_cat ='$shelve' OR category='$shelve' ORDER BY product_id";
        $result=mysqli_query($conn,$sql);
      
      }
      else
      {
    	$sql = "SELECT * FROM products WHERE sub_cat ='$shelve' OR category='$shelve'";
        $result=mysqli_query($conn,$sql);
      }
            $total_row= mysqli_num_rows($result);

    
     // $total_row= mysqli_num_rows($result);
     // print_r($sql);
     // print_r($total_row);  
     // }  

     ?>

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
<a href="home_product_detail.php?product_id=<?php  echo $row['product_id'];?>&title=<?php  echo $row['title'];?>">
				<?php echo "<img src='image/".$row['image']."'/>"; ?>
			</a>
			<center>
				<h5><?php  echo $row['title'];?></h5>
				<h6 style="color: gray;"><del> Rs.<?php echo $row['prev_price'];?>.00</del> Rs.<?php echo $row['price'];?>.00 Sale</h6>
			</center>
		</figure>		
	</div>

    <?php }
    ?>




</div>


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
			<a href="home_search_product.php" style="text-decoration: none; color: gray; font-size: 1.2rem;">Search</a>
			
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