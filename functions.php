<?php 
session_start();

// connect to database
$conn = mysqli_connect('localhost', 'root', '', 'home_a_heaven');

// variable declaration
$username = "";
$email    = "";
$desgn    = "";

$enumber  = "";
$errors   = array(); 

// call the register() function if register_btn is clicked
if (isset($_POST['register_btn'])) {
	register();
}

// REGISTER USER
function register(){
	// call these variables with the global keyword to make them available in function
	global $conn, $errors, $username, $email , $desgn ;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$first_name  =  $_POST['first_name'];
	$last_name   =  $_POST['last_name'];
	$email       =  $_POST['email'];
	// $desgn       =  $_POST['desgn'];
	// $enumber     =  $_POST['enumber'];
	$password_1  =  $_POST['password_1'];
	// $password_2  =  $_POST['password_2'];

	// form validation: ensure that the form is correctly filled
	if (empty($first_name)) { 
		array_push($errors, "First is required"); 
	}
	if (empty($last_name)) { 
		array_push($errors, "last Name is required"); 
	}
	
	if (empty($email)) { 
		array_push($errors, "User Email is required"); 
	}
	
	if (empty($password_1)) { 
		array_push($errors, "Password is required"); 
	}
	// if ($password_1 != $password_2) {
	// 	array_push($errors, "The two passwords do not match");
	// 	echo "The two passwords do not match";
	// }

	// register user if there are no errors in the form
	if (count($errors) == 0) {
		// $password = md5($password_1);//encrypt the

		$password = $password_1;

		 // password before saving in the database

		if (isset($_POST['user_type'])) {
			$user_type = $_POST['user_type'];
			
			// INSERT INTO `user_info`(`user_id`, `user_name`, `user_email`, `user_password`, `user_contact`, `address`) VALUES

			$query = "INSERT INTO `user_info`( `user_name`, `user_email`, `user_password`, `user_contact`, `address`) 



					VALUES('$username', '$email', '$password','$enumber' , '$desgn')";

					mysqli_query($conn, $query);

			$_SESSION['success']  = "New user successfully created!!";
			
		}else{

			// INSERT INTO `user_info`(`user_id`, `first_name`, `last_name`, `user_email`, `user_password`, `user_contact`, `address`, `user_type`)

			$query = "INSERT INTO `user_info`( `first_name`, `last_name`, `user_email`, `user_password`, `user_type`) 

					  VALUES('$first_name', '$last_name', '$email','$password' , 'user')";
			mysqli_query($conn, $query);


			
			// get id of the created user
			$logged_in_user_id = mysqli_insert_id($conn);

			$_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
			
			echo '<script>alert("You are now Registered.. Please Login First")</script>';
			echo '<script>window.location="login.php"</script>';			
		}
	}
}

// return user array from their id
function getUserById($id){
	global $conn;
	$query = "SELECT * FROM user_info WHERE user_id=" . $id;
	$result = mysqli_query($conn, $query);

	$user = mysqli_fetch_assoc($result);
	return $user;
}

// escape string
function e($val){
	global $conn;
	return mysqli_real_escape_string($conn, trim($val));
}

function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<script>alert("';
		foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '")</script>';
	}
}	

function isLoggedIn()
{
	if (isset($_SESSION['user'])) {
		return true;
	}else{
		return false;
	}
}

if (isset($_POST['login_btn'])) {
	login();
}

// LOGIN USER
function login(){
	global $conn, $username, $errors; 

	// grap form values
	$username = $_POST['user_email'];
	$password = $_POST['password'];

	// make sure form is filled properly
	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	// attempt login if no errors on form
	if (count($errors) == 0) {
		// $password = md5($password);

		$query = "SELECT * FROM `user_info` WHERE `user_email`='$username' AND `user_password`='$password' LIMIT 1";
		$results = mysqli_query($conn, $query);

		if (mysqli_num_rows($results) == 1) { // user found
			// check if user is admin or user
			$logged_in_user = mysqli_fetch_assoc($results);
			if ($logged_in_user['user_type'] == 'admin') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: admin_panel.php');		  
			}else{
				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";

				echo '<script>alert("You are now logged in ")</script>';
			    echo '<script>window.location="home_page.php"</script>';	
			}
		}else {
			array_push($errors, "Wrong username/password combination");
		}
	}
}

