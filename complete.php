<?php
require "db.php";
session_start();
$id = $_GET['id'];
$sql = "UPDATE todos
		SET isdone = 1
		WHERE id='$id'";
runQuery($sql);
header('Location: verify.php');	
?>