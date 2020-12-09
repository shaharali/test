<?php
include 'libs/connection.php';
$conn = connect();
 session_start();


//fro application
if (isset($_POST['apply'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];
	$name = $_POST['name'];

	$father = $_POST['father'];
	$mother = $_POST['mother'];
	$address = $_POST['address'];
	$examination = $_POST['examination'];
	$roll = $_POST['roll'];
	$year = $_POST['year'];
	$gpa = $_POST['gpa'];
	$payment = $_POST['payment'];


	$sql = "INSERT INTO testimonial (email, password, name, father, mother, address, examination, roll, year, gpa, payment) VALUES ('$email', '$password', '$name', '$father', '$mother', '$address', '$examination', '$roll', '$year', '$gpa', '$payment')";

if ($conn->query($sql) === TRUE) {	 
  $message =  "New record created successfully";
} else {
  $message =  "Error: " . $sql . "<br>" . $conn->error;
}
	$_SESSION['apply_message'] = $message;	
	header("Location:index.php");
}

//for login
if (isset($_POST['login'])) {
	$e = $_POST['email'];
	$p = $_POST['password'];	

	$sql = "SELECT * FROM testimonial WHERE email='$e' AND password = '$p'";

if ($conn->query($sql) == TRUE) {	 
  $_SESSION['login'] = 'true';
  $_SESSION['email'] = $email;
} else {
  $message =  "Error: " . $sql . "<br>" . $conn->error;
}

header("Location:index.php");
}

//logout
if (isset($_GET['logout'])) {
	session_destroy();
	header("Location:index.php");
}

//fro application
if (isset($_POST['admin_signup'])) {
	$email = $_POST['email'];
	$name = $_POST['name'];
	$father = $_POST['father'];
	$mother = $_POST['mother'];
	$address = $_POST['address'];

	$sql = "INSERT INTO admin (email, password, name, designation) VALUES ('$email', '$password', '$name', '$designation')";

if ($conn->query($sql) === TRUE) {	 
  $message =  "New record created successfully";
} else {
  $message =  "Error: " . $sql . "<br>" . $conn->error;
}
	$_SESSION['apply_message'] = $message;	
	header("Location:index.php");
}


//for Admin login
if (isset($_POST['admin_login'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];	

	$sql = "SELECT * FROM admin WHERE email='$email' AND password = '$password'";

if ($conn->query($sql) == TRUE) {	 
  $_SESSION['admin_login'] = 'true';
  $_SESSION['admin_email'] = $email;
} else {
  $message =  "Error: " . $sql . "<br>" . $conn->error;
}
header("Location:index.php");
}


//Admin logout
if (isset($_GET['admin_logout'])) {
	session_destroy();
	header("Location:index.php");
}

//approve
if (isset($_GET['approve_email'])) {
	$approve_email = $_GET['approve_email'];	

	$sql = "UPDATE testimonial SET approve = 1 WHERE email = '$approve_email'";

if ($conn->query($sql) === TRUE) {	 
  $message =  "approved successfully";

} else {
  $message =  "Error: " . $sql . "<br>" . $conn->error;
}
	$_SESSION['apply_message'] = $message;	
	 header("Location:index.php?approve");
}


$conn->close();

?>