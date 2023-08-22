<?php
@session_start();

// initializing variables
$user_name = "";
$email    = "";
$errors = array(); 

// connect to the database
include_once "upworkdb.php";

// REGISTER USER
if (isset($_POST['reg_user'])){
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $mobNO =  mysqli_real_escape_string($db, $_POST['mobile']);

  $name = "/^[a-zA-Z ]+$/";
	$emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
	$number = "/^[0-9]+$/";
  

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username) || !preg_match($name,$username)) { array_push($errors, "enter valid username"); }
  if (empty($email) || !preg_match(	$emailValidation,$email)) { array_push($errors, "email id required"); }
  if (empty($password_1) ){ array_push($errors, "plz enter proper password"); }
  if (empty($mobNO) || !preg_match(	$number,$mobNO) || !(strlen($mobNO) == 10)) { array_push($errors, "enter valid mobile no"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
 
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "username already exist");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email id already exist");
    }
  }

 

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the databas
    $applyedfor = $_SESSION['apply'];
  	$query = "INSERT INTO users (ID, username, email, password, mobile, applyedfor,member_since,last_active)
    VALUES(NULL,'$username', '$email', '$password', '$mobNO', '$applyedfor',now(),now())";
  	mysqli_query($db,$query);
  	$_SESSION ['username'] = $username;
    //$_SESSION['applied'] = $applyedfor;
  	//$_SESSION['success'] = "You are now logged in";
  	header('location: profil.php');
  }
}



// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
    
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: profil.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
  $logintime = "UPDATE users SET last_active = now() where username = '$username'";
  mysqli_query($db, $logintime);
}



?>