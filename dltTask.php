
<?php

require "db.php";

if(isset($_GET['id'])){
	$getID = $_GET['id'];
	echo $getID . "we got ID";
	$sql = "DELETE FROM todos WHERE id='$getID'";
	$results = runQuery($sql);
	echo "item deleted";
	header('location: verify.php');
}else {
	echo "No item was deleted. ";
}

?>


