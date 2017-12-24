<!DOCTYPE html>
<html>
<head>
<h1>IS218 Final Project</h1>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Home</title>
<style type="text/css">
b{
	font-size: 18pt;
	text-align: center;
}

body {
  font-family: 'Lato', sans-serif;
  font-size: 16px;
  font-style: normal;
  font-variant: normal;
  font-weight: 500;
  line-height: 26.4px;
  background: linear-gradient(#99ceff, #1a90ff);
	height: 1000px;
  color: white;
}

</style>

</head>

<body>
</body>
</html>



<?php

require "db.php";

$email = $_POST["email"];
$fname = $_POST["firstname"]; 
$lname = $_POST["lastname"]; 
$phone = $_POST["phone"]; 
$pass = $_POST["password"]; 
$bday = $_POST["birthday"];
$gender = $_POST["gender"]; 

	$sql = "SELECT email FROM accounts WHERE email='$email'";
	if(runQuery($sql)==true){
		echo "Email already exists. Redirecting to Login page";
		header("refresh:4; url=login.php");
	}
	else{
		$sql = "INSERT INTO accounts VALUES('', '$email', '$fname', '$lname', '$phone', '$bday', '$gender', '$pass')";
		runQuery($sql);
		echo $_POST["firstname"] . " " . $_POST["lastname"] . "You are now registered! Redirecting to Login Page";
		header("refresh:4; url=login.php");
	}

// if(isset($_GET['id'])){
// 	$getID = $_GET['id'];
// 	echo $getID . "we got ID";
// 	$sql = "DELETE FROM todos WHERE id='$getID'";
// 	$results = runQuery($sql);
// 	echo "item deleted";
// 	header('location: verify.php');
// }else {
// 	echo $_GET['id'] . " it did not work";
// }


?>


<!-- INSERT INTO accounts VALUES('', '$email', '$fname', '$lname', '$pnumber', '$birthday', '$gender', '$password') -->