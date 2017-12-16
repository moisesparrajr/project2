
<?php session_start()?>
<?php
$errors = "";

 if (isset($_POST['submit'])) {
    if (empty($_POST['task'])) {
      $errors = "You must fill in the task";
     
    }else{
      $task = $_POST['task'];
      $due = $_POST['due'];
      $sql = "INSERT INTO todos VALUES (null, '$email', NULL, CURDATE(), '$due', '$task', 0)";
      $results = runQuery($sql);
      header('location: verify.php');
    }

  }

 
?>

<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>
<style>
body {
  margin: 0;
  min-width: 250px;
  
}

h3 {
  color: #ffffff;
}


table, td, tr{
    /*border: 2px solid #4c677f;*/
    background: #cce6ff;
    border-collapse: collapse;
    border: 3px solid #add7ff;
    color: black;
    padding: 0 10px 0 10px;
}

th{
  background: #add7ff;

}

body {
  font-family: 'Lato', sans-serif;
  color: white !important;
  font-size: 16px;
  font-style: normal;
  font-variant: normal;
  font-weight: 500;
  line-height: 26.4px;
  background: linear-gradient(#99ceff, #1a90ff);
  height: 1000px;
  color: #7E807E;
  margin: 50px;
}


/* Include the padding and border in an element's total width and height */
* {
  box-sizing: border-box;
}

/* Remove margins and padding from the list */
ul {
  margin: 0;
  padding: 0;
}

/* Style the list items */
ul li {
  cursor: pointer;
  position: relative;
  padding: 12px 8px 12px 40px;
  list-style-type: none;
  background: #eee;
  font-size: 18px;
  transition: 0.2s;
  
  /* make the list items unselectable */
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Set all odd list items to a different color (zebra-stripes) */
ul li:nth-child(odd) {
  background: #f9f9f9;
}

/* Darker background-color on hover */
ul li:hover {
  background: #ddd;
}

/* When clicked on, add a background color and strike out text */
ul li.checked {
  background: #888;
  color: #fff;
  text-decoration: line-through;
}

/* Add a "checked" mark when clicked on */
ul li.checked::before {
  content: '';
  position: absolute;
  border-color: #fff;
  border-style: solid;
  border-width: 0 2px 2px 0;
  top: 10px;
  left: 16px;
  transform: rotate(45deg);
  height: 15px;
  width: 7px;
}


/* Style the close button */
.close {
  position: absolute;
  right: 0;
  top: 0;
  padding: 12px 16px 12px 16px;
}

.close:hover {
  background-color: #f44336;
  color: white;
}

/* Style the header */
.header {
  padding: 30px 40px;
  color: white;
  text-align: center;
}


/* Clear floats after the header */
.header:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the input */
input {
  border: none;
  width: 75%;
  padding: 10px;
  float: left;
  font-size: 16px;
}

/* Style the "Add" button */
.addBtn {
  padding: 0px 0;
  width: 15%;
  background: #cce6ff;
  color: #4c677f;
  float: left;
  text-align: center;
  font-size: 16px;
  cursor: pointer;
  transition: 0.3s;
  margin:10px;
  line-height: 1.7;

}

.inputTask{
  width:30%;
  background #add7ff; 
  margin:5px;

}


.addBtn:hover {
  background-color: #bbb;

}

.inputText{
  width: 100%
  line-height: .5;
  padding:2px;
}

#editInput{
  width: 60%;
  line-height: .5;
  padding:2px;
}
.btn-edit{
  padding: 2px;
  color: white;
  width: 40%;
  background: #4c677f;
  text-align: center;
  font-size: 16px;
  cursor: pointer;
  transition: 0.3s;
}

.edit{
  width:35%;
}

.btn-complete{
  padding: 2px;
  color: white;
  width: 10%;
  background: #4c677f;
  text-align: center;
  font-size: 16px;
  cursor: pointer;
  transition: 0.3s;
}

.task{
  width:40%;
}




</style>

<body>

<div class="container">
<h1>INCOMPLETE TASKS </h1>
<?php  


$sql = "SELECT * FROM todos WHERE isdone = 0";
$results = runQuery($sql);
if(count($results) > 0){

//
echo "
        <table>
              <tr>
                <th>Select</th>
                <th>Task</th>
                <th>Due Date</th>
                <th>x</th>
                <th>Edit</th>
              </tr>";

  foreach($results as $row){


  echo "<tr>";
  
  echo "<td><input type='checkbox' name='complete' value=" . $row['id'] ." />"  . "</td>";
  echo "<td class='task'>" . $row["message"]  . "</td>";
  echo "<td>" . $row["duedate"]  . "</td>";
          
  echo "<td><a href='dltTask.php?id=".$row['id']."'>DELETE</a></td>";

  echo "<td class='edit'><form action=\"edit.php?id=".$row['id']."\" method='POST' target='_self'>";
  echo "<input class='inputText' id='editInput' type='text' name='editTask'>";
  echo "<input class='btn-edit' id='editSubmit' type='submit' value='Edit Task'>";
  echo "</form></td>";


  echo '</tr>';

  }

  echo "</table>";

}else {
  echo "No results to be displayed";
}


?>


<!-- ======================= ADD NEW TASK (BUTTON) ======================= -->
<div>
<form method='post' action='taskDone.php' >
 <button type='submit' name='btn-complete' class='btn-complete'>COMPLETE</button>
</form> <br><br>

<form method="post" action="verify.php" class="header">  
    <input type="text" name="task" class="inputTask" placeholder="add task">
    <input type="text" name="due" class="inputTask" placeholder="Due Date: yyyy-mm-dd">
    <button type="submit" name="submit" id="addBtn" size="small" class="addBtn">Add</button>    
</form>
</div>
 
<?php if (isset($errors)) { ?>
  <p><?php echo $errors; ?></p>
<?php } ?>

</div>

<div class="container">
<!-- ===================================================================== -->

<!-- ======================== COMPLETED TASK LIST ======================== -->
<h1>COMPLETED TASKS </h1>

<?php  

// $sql = "SELECT * FROM todos WHERE email='$email'";

//select all the results from the table todos where the task is complete (isdone=1)
$sql = "SELECT * FROM todos WHERE isdone = 1";
$results = runQuery($sql);
if(count($results) > 0){

echo "
        <table border=\"1\">
              <tr>
                
                <th>Task</th>
                <th>Due Date</th>
              </tr>";

  foreach($results as $row){
  echo "<tr>

          <td>" . $row["message"]  . "</td>
          <td>" . $row["duedate"]  . "</td>
          
        </tr> ";

    $getMessage = $row['message'];
    $getDue = $row['duedate'];
    // echo " <input type='checkbox' value='".$row['message']."' /> ".$row['duedate'];
    
  }

  echo "</table>";


}else {
  echo "No results to be displayed";
}



//ADDING VALUE INTO INCOMPLETE TASK LIST
// INSERT INTO todos values(NULL, '$email', NULL, curdate(), 'post_[$duedate]', 'HELLO WORLD', 0);

// ===========================================================================

?>
</div>

<br>
<br>


</body>
</html>