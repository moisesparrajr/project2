<?php
require "db.php";
//Set Variables
$id = $_GET['id'];
$editTask = $_POST['editTask'];
//Generate Form for input
// echo "<form action='edit_form.php' method='POST' target='_self'>";
// echo "<input type='text' name='editTask'>";
// echo "<input type='submit' value='Edit Task'>";
// echo "</form>";
//Update Message Query
$sql = "UPDATE todos
		SET message='$editTask'
		WHERE id='$id'";
runQuery($sql);
header('Location: verify.php');
		
		
?>