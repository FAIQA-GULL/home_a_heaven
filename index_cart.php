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

	body{
		font-family: Garamond, Baskerville, "Baskerville Old Face", "Hoefler Text", "Times New Roman", serif;

	}
	.dropdown:hover .dropdown-menu {
	  display: block;

	}
	.form-control{
		border: none;
	}
	.form-control{
		width: 40%;
	}
	
	

	td{
		color: gray;
	}
	td a{
		border:1px solid gray;
		padding: 10px;
		color: black;
		text-decoration: none !important;
		border-color: #eee;

	}
	td a:hover{
		background-color: #eee;
		color: black;
	}
	.btn-info{
		background-color: #7796a8;
		width: 120px;
	}
	.btn{
		border-radius: 0;
	}
	.btn-outline-dark{
		border-color: #eee;
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



<br><br><br>
<div class="container">
	<div class="row">

		<center>
			<h2 style="font-size: 2.5rem; color: gray;">Your Cart</h2>

		</center>
	</div>
	<br><br><br>
	
<div class="row">
	<table class="table" >
		<thead>
			
			<th>Product</th>
			<th></th>
			<th>Price</th>
			<th>Quantity</th>
			<th>Total</th>

		</thead>
		<tbody id="myTable">
			<!--  there was an error that script is count total numbers of rows of table so its also counting <th> row of table thats why i put here id=mytable in <tabody> tag from <table> tag-->
	<?php 
	 $sno = 1;
	 // $image = array();
	 // $name = array();
	 // $id = array();
	 // $price = array();
	 $data= array();

        if(!empty($_SESSION["shoping_cart"]))
        {
        	$total = 0;
          $num1 = rand(1000,9999); 
  
        	foreach($_SESSION["shoping_cart"] as $keys => $values)
        		{

	

	            if (isset($_SESSION["shoping_cart"]))
	                { 
	                	?> 
		<tr>
			<!-- <?php echo "<td>".($sno++)."</td>"; ?> -->
			<form action="index_check_out.php" method="POST">

			<td><input type="hidden" name="image" value="<?php echo $values['item_image']; ?>">

				<?php echo "<img src='image/".$values['item_image']."' height='150px' width='150px'/>"; ?>
			</td>

			<td><input type="hidden" name="product_name" value="<?php echo  $values["item_name"]; ?>">
				<input type="hidden" name="product_id" value="<?php echo $values["item_id"]; ?>">

				<label style="font-size: 1.3rem; color: black; font-weight: bold;"><?php echo $values["item_name"]; ?></label> 
				<br><a  href="product_detail.php?action=delete&product_id=<?php echo  $values['item_id']; ?>">Remove</a>
			</td>

			<td style="font-size: 1.3rem;">
				<input type="hidden" name="product_price" value="<?php echo  $values["item_price"]; ?>">
				Rs. <?php echo  number_format($values["item_price"],2); ?>
			</td>

			<td style="font-size: 1.3rem;">

				<input type="" class="form-control" style="border: 1px solid; width: 53px; height: 53px; border-radius: 0; border-color: #eee; background-color: white;" name="quantity" min="1" max="30" value="<?php echo $values["item_quantity"]; ?>" readonly>
			</td>

			<td style="font-size: 1.3rem;">Rs. <?php echo number_format($values["item_quantity"] * $values["item_price"],2); ?></td>		
		</tr>
		
	
   
          <?php }

              $total = $total + ($values["item_quantity"] * $values["item_price"]); 
              // echo $item = $_POST['quantity'];
             
           } 
        }else{
        	?>
        	<center>
        		<h2 style="color: gray;">Cart is Empty!</h2>
        	</center>
        	<?php
        }

         ?>


</tbody>
  </table>

</div>

	<div class="pull-right">
 <div class="row">
 	<!-- <div class="pull-right"> -->
 	<table class="table">
 	<thead>
 		   <th></th>
 			<td style="font-size: 1.3rem; color: gray;">Subtotal :</td>

 	        <td style="font-size: 1.3rem;"><?php
 	                              if (!empty($total)) 
 	                              {
 	                              	echo number_format($total, 2);
 	                               	
 	                               }else{
 	                               	echo "";
 	                               }  ?>
 	        <br><br>
 	        <p style="display: flex; font-style: italic;">Shipping & taxes calculated at checkout</p>
 	        </td>
 	        <th></th>
 	        <br><br>
 	      
 	    
 	
    </thead>
 	
 	<tbody id="line2">
 		
 	<td><a href="collection.php" class="btn btn-outline-dark">Continue to Shoping </a></td>
    <br><br><br>
   <!--  <p>Shipping & taxes calculated at checkout</p> -->
    <td><a href="index_cart.php" class="btn btn-outline-dark">Update</a></td>
 	<td><input type="submit" class="btn btn-info" name="check_out" value="Check Out"></td>
 </form>

 	</tbody>
    </table>

 </div>
</div>




<!-- <table class="table">

    <th>image</th>
	

	<th>product name</th>
	

	<th>price</th>


	<?php 
	// while($data>0 )
	// $length=  count($data);
	 // print_r($image);
	 // print_r($name);
	 // print_r($id);
	 // print_r($price);
	// $arraydata = array(
	// 	'image'     => $_POST["product_id"],


	// );

	 foreach ($image as $value)
	// for($i=0;$i<$length ;$i++)
	{

?>
 <tbody>

<td><?php echo $value ;?></td>


	<?php
}?>

<?php
foreach ($name as $value)
	// for($i=0;$i<$length ;$i++)
	{

?>


<td><?php echo $value ;?></td>

</tbody>
	<?php
}?>

<?php 
foreach ($price as $value) {
?>
<td><?php echo $value; ?></td>
<?php	
	}

?>
</table>
 -->




</div>
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


