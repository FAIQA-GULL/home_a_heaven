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



if (isset($_POST['add_product']))
{
	
$title      = $conn->real_escape_string($_POST['product_name']);
$description= $conn->real_escape_string($_POST['detail']);
$prev_price = $conn->real_escape_string($_POST['prev_price']);
$price      = $conn->real_escape_string($_POST['product_price']);
$product_category = $conn->real_escape_string($_POST['product_category']);
$sub_category = $conn->real_escape_string($_POST['sub_category']);


$folder = "image/".$_FILES['image']['name'];

$image   = $_FILES["image"]["name"];

$addProduct = "INSERT INTO `products`(`title`, `description`, `prev_price`, `price`, `image`, `category`, `sub_cat`) 

VALUES ('$title','$description','$prev_price','$price','$image','$product_category','$sub_category')";

	$addResult = mysqli_query($conn, $addProduct);
	
	if($addResult)
	{
		if(mysqli_affected_rows($conn) > 0)
		{
			
			
				echo '<script>alert("New Product data added")</script>';
	
			
		}
		
	}
	else
	{
		echo '<script>alert("connection error")</script>';
	}


if (move_uploaded_file($_FILES['image']['tmp_name'], $folder)) 
{
	echo "";
}
else
{
	echo "";
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
	.bt{
		background-color: #7796a8;
		border-radius: 0;
		font-family: Garamond, Baskerville, "Baskerville Old Face", "Hoefler Text", "Times New Roman", serif;

	}
	.upd{
		display: flex;
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
	.new_prod{
		background-color: #eee;
	}
	
	.new_prod input{
		font-size: 0.90rem;
		font-family: Garamond, Baskerville, "Baskerville Old Face", "Hoefler Text", "Times New Roman", serif;
	}

	
	.new_prod .selec{
		width: 150px;
		color: gray;
		font-size: 0.90rem;
		font-family: Garamond, Baskerville, "Baskerville Old Face", "Hoefler Text", "Times New Roman", serif;

	}
	.pull-right{
		display: flex;
		
	}
	.td_wid{
		width: 20%;
	}

	
	
</style>

<body>
	<div class="mainDiv">

	<nav id="mainNav">
		<div class="logo">
			 <a href="admin_panel.php"><img src="logo2.png" ></a>
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
	<center><h2 class="head">All Products</h2></center>
	<br>

    <form action="admin_products.php" method="post">
	<div class="pull-right">
		

		<!-- <input type="text" class="form-control" placeholder="Search" name="findpro"> -->

		<select class="form-control" name="select_category" required/>
			<option value="">Select Category</option>
			<?php 
			$select="SELECT * FROM category";
			$sel=mysqli_query($conn,$select);
			while($sele =mysqli_fetch_assoc($sel))
			{
			?>
			    <option value="<?php echo $sele['cat_name'];?>"><?php echo $sele['cat_name'];?></option>
			<?php
			}
			?>
		</select>


		<select class="form-control" name="sub_cat">
			<option value="">Sub Category</option>
			<?php 
			$select="SELECT * FROM sub_category";
			$sel=mysqli_query($conn,$select);
			while($sele =mysqli_fetch_assoc($sel))
			{
			?>
			    <option value="<?php echo $sele['sub_cat'];?>">
			    	<?php echo $sele['sub_cat'];?></option>
			<?php
			}
			?>
		</select>
		
		<input type="submit" name="search_category" class="btn btn-success" value="Search" >
		
	   
    </div>
</form>
	

	<br><br>


	<table class="table table-hover">

		

        
		<thead>
			<!-- <th>Sro.#</th> -->
			<th>Name</th>
			<th>Description</th>
			<th>Previous Price</th>
			<th>Price</th>
			<th>Image</th>
			<th>Category </th>
			<th>Sub Category</th>
			<th>Add/Update</th>
		</thead>
		<?php $sno = 1; ?>

		<tbody>
			
				<!-- <?php echo '<td>'.$sno++.'</td>' ?> -->
            <tr class="new_prod">
			<form action="admin_products.php" method="post" enctype="multipart/form-data">

				<td><input type="text" placeholder="Name" class="form-control" name="product_name" required></td>

				<td><input type="text" placeholder="Detail" class="form-control" name="detail" required></td>

				<td><input type="text" placeholder="Prev Price" class="form-control" name="prev_price" required></td>

				<td><input type="text" placeholder="Price" class="form-control" name="product_price" required></td>

				<td><input type="file" class="form-control" name="image" required></td>
				
				<td>
					<select class="form-control selec" name="product_category" required/>
						<option value="">Select Category</option>
						<?php
						$sql="SELECT * FROM category";
						$query=mysqli_query($conn,$sql);
						while($cat=mysqli_fetch_assoc($query))
		                    {
		                ?>
		                <option value="<?php echo $cat['cat_name']; ?>">

		                	<?php echo $cat['cat_name']; ?>

		                	
		                </option>

		                <?php 
		                    }
		                ?>

					</select>
					
				</td>



				<td>
					<select class="form-control selec" name="sub_category">
						<option value="">Sub Category</option>

						
						<?php
						$sql="SELECT * FROM sub_category";
						$query=mysqli_query($conn,$sql);
						while($cat=mysqli_fetch_assoc($query))
		                    {
		                ?>
		                <option value="<?php echo $cat['sub_cat']; ?>">

		                	<?php echo $cat['sub_cat']; ?>
		                	
		                </option>

		                <?php 
		                    }
		                ?>

					</select>
					
				</td>

				<td><input type="submit" class="btn btn-info bt" value="Add Products" name="add_product"></td>
			</form>
		</tr>
		<?php
		if(isset($_POST['search_category']))
			{

			 $select_category = $_POST['select_category'];
			 $sub_category    = $_POST['sub_cat'];
			 // switch( $select_category)
			 // {
			   // case '1':

			 // SELECT * FROM `products` WHERE category ='Living Room' OR category = 'Living Room' AND sub_cat ='Chair'

			 // SELECT * FROM products WHERE category IN ('Living Room' , 'Living Room' ) AND sub_cat ='Chair' 

			 // SELECT * FROM products WHERE category IN ('Living Room' , 'Living Room' ) AND sub_cat LIKE '%Chair%'

	$query1 ="SELECT * FROM `products`
	        
	        WHERE category IN('$select_category','$select_category') AND sub_cat LIKE '%".$sub_category."%'";
			   $result1=mysqli_query($conn,$query1);
			   // break;

			   
			   // case '2':
			   // $query1= "SELECT * FROM `products` WHERE cat_id='$select_category'";
			   // $result1=mysqli_query($conn,$query1);
      //          break;
               

      //          case '3':
      //          $query1= "SELECT * FROM `products` WHERE cat_id='$select_category'";
      //          $result1=mysqli_query($conn,$query1);
      //          break;
               

      //          case '4':
      //          $query1= "SELECT * FROM `products` WHERE cat_id='$select_category'";
      //          $result1=mysqli_query($conn,$query1);
      //          break;
               
      //          case '5':
      //          $query1= "SELECT * FROM `products` WHERE cat_id='$select_category'";
      //          $result1=mysqli_query($conn,$query1);
      //          break;
               
      //          case '6':
      //          $query1= "SELECT * FROM `products` WHERE cat_id='$select_category'";
      //          $result1=mysqli_query($conn,$query1);
      //          break;
               
      //          case '7':
      //          $query1= "SELECT * FROM `products` WHERE cat_id='$select_category'";
      //          $result1=mysqli_query($conn,$query1);
      //          break;
                    
                    
                    
            
            // default:
            // echo"invalid value";
            // case 'sub':
            //     echo"value is Sum:"
            //     break;

            // $query1= "SELECT * FROM `employee`";

            // $result1=mysqli_query($conn,$query1);
            // }
        }
        else
        	{
        		$query1= "SELECT * FROM `products`";
        		$result1=mysqli_query($conn,$query1);
        	}
        	

        	if ($result1)
        		{
        			if(mysqli_num_rows($result1))
        			{
        			//$row basically variable fatch array mean row and coloms
        			while($products=mysqli_fetch_array($result1))
                        {
            ?>

		<tr>

			    <td><?php echo $products['title'];?></td>
				<td><?php echo $products['description'];?></td>
				<td><del><?php echo $products['prev_price'];?></del></td>
				<td><?php echo $products['price'];?></td>
				
<td class="td_wid"><a href="admin_update_product_pic.php?product_id=<?php echo $products['product_id'];?>"><?php echo "<img src='image/".$products['image']."' height='-10%' width='50%' />"; ?></a></td>
				
				<td><?php echo $products['category'];?></td>
				<td><?php echo $products['sub_cat'];?></td>



				<td><a href="admin_update_product.php?product_id=<?php echo $products['product_id'];?>&title=<?php echo $products['title'];?>&detail=<?php echo $products['description'];?>&prev_price=<?php echo $products['prev_price'];?>&price=<?php echo $products['price'];
				    ?>&category=<?php echo $products['category'];?>&sub_cat=<?php echo $products['sub_cat'];?>" class="btn btn-warning upd">Update</a></td>
				

			</tr>
		<?php 
	        }
	    }
	}
		?>
		</tbody>
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