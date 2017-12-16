<title>Home</title>
<?php session_start();?>

<!DOCTYPE html>
<html>
<head>
    <h1>IS218 Final Project</h1>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>

<?php
require "db.php";

 if (isset($_POST['submit'])) { 
  $_SESSION['getEmail'] = $_POST['email'];
  $_SESSION['getPass'] = $_POST['password'];
 } 

$email = $_SESSION['getEmail'];
$pass =  $_SESSION['getPass'];


$sql = "SELECT email FROM accounts WHERE email='$email'";
if(runQuery($sql)==true){	
	$sql = "SELECT password FROM accounts WHERE email='$email'";
	$pw = runQuery($sql);
	
	foreach($pw as $x){
		$pw = $x["password"];
	}
	
	if($pass == $pw){
		$sql = "SELECT fname,lname FROM accounts WHERE email='$email'";
		$results = runQuery($sql);		
		foreach($results as $row){
			echo "Hello" . $row["fname"]. " " . $row["lname"] . "<br><br>";
			echo "Welcome to the To Do Applicationt! <br><br>";
			include 'user.php';
		}			
	}
	else{
		echo "Password does not match!";
		// echo "<br><br><div class='alert alert-warning'> <strong>WARNING!</strong>
	 //    Redirecting you to previous page.</div>"; 
	 	echo "<br><br>Redirecting you to Login page. "; 
		header("refresh:4; url=login.php");
	}
			
}	
else{
	echo "Email does not exist!";
	// echo "<br><br><div class='alert alert-warning'> <strong>WARNING!</strong>
	//     Redirecting you to previous page.</div>";    
	echo "<br><br>Redirecting you to Login page. "; 
	header("refresh:4; url=login.php");
}
?>


</body>
</html>

