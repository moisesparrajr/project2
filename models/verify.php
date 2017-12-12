<?php
require "db.php";
$email = $_POST["email"];
$password = $_POST["password"];
$sql = "SELECT email FROM accounts WHERE email='$email'";
if(runQuery($sql)==true){	
	$sql = "SELECT password FROM accounts WHERE email='$email'";
	$pw = runQuery($sql);
	
	foreach($pw as $x){
		$pw = $x["password"];
	}
	
	if($password == $pw){
		$sql = "SELECT fname,lname FROM accounts WHERE email='$email'";
		$results = runQuery($sql);		
		foreach($results as $row){
			echo $row["fname"] . " " . $row["lname"];
			echo "Welcome to IS 218 Project!";
			
		}			
	}
	else{
		echo "Password does not match!";
	}
			
}	
else{
	echo "Email does not exist!";
}