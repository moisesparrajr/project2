
<?php

require "db.php";

if((isset($_POST['btn-complete'])) && (isset($_POST['complete']))){
	$getID = $_GET['id'];
	echo $getID . "we got ID";
	$sql = "UPDATE todos SET isdone=1 WHERE id='$getID'";
	$results = runQuery($sql);
	echo "item complete";
	header('location: verify.php');
}else {
	echo "No task was completed. ";
}


?>


