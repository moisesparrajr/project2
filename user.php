<?php session_start()?>
<?php
$errors = "";

 if (isset($_POST['submit'])) {
    if (empty($_POST['task'])) {
      $errors = "You must fill in the task";
      echo "empty";
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
<style>
body {
  margin: 0;
  min-width: 250px;
  background-color: #ACD1D1;
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
  background-color: #ACD1D1;
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
  padding: 10px;
  width: 25%;
  background: #d9d9d9;
  color: #555;
  float: left;
  text-align: center;
  font-size: 16px;
  cursor: pointer;
  transition: 0.3s;
}

.addBtn:hover {
  background-color: #bbb;
}
</style>
</head>
<body>


<h1>INCOMPLETE TASKS </h1>
<?php  

// $sql = "SELECT * FROM todos WHERE email='$email'";

//select all the results from the table todos where the task is complete (isdone=1)
$sql = "SELECT * FROM todos WHERE isdone = 0";
$results = runQuery($sql);
if(count($results) > 0){

echo "
        <table border=\"1\">
              <tr>
                <th>Select</th>
                <th>Task</th>
                <th>Due Date</th>
              </tr>";

  foreach($results as $row){
  echo "<tr>";
  // echo '<td>
  //       <form action="taskDone.php?" method="post">
  //         <input type="hidden" name="id" value="'.$row["id"].'">
  //         <input type="checkbox" name="complete" align="center">
  //       </form>
  //     </td>';
  echo "<td><input type='checkbox' name='complete' value=" . $row['id'] ." />"  . "</td>";
  echo "<td>" . $row["message"]  . "</td>";
  echo "<td>" . $row["duedate"]  . "</td>";
          
  echo "<td><a href='dltTask.php?id=".$row['id']."'>DELETE</a></td>";

 echo '<td>
        <form action="actions.php?controller=editController" method="post">
          <input type="hidden" name="id" value="'.$row["id"].'">
          <input type="submit" name="edit" value="Edit" align="center">
        </form>
      </td>';

        echo '</tr>';


    $getMessage = $row['message'];
    $getDue = $row['duedate'];

          // <td><a href=\"dltTask.php\?id={$row['id']}">Delete</a></td>"     
  }

  echo "</table>";


}else {
  echo "No results to be displayed";
}



?>

<!-- ======================= ADD NEW TASK (BUTTON) ======================= -->
<form method="post" action="taskDone.php" >
  <button type="submit" name="btn-complete" class="signin" href=""><b>COMPLETE</b></button>
</form>

<form method="post" action="verify.php" class="header">
    <input type="text" name="task" class="task_input" placeholder="add task">
    <input type="text" name="due" class="task_input" placeholder="Due Date: yyyy-mm-dd">
    <button type="submit" name="submit" id="addBtn" class="addBtn">Add</button>
</form>

<?php if (isset($errors)) { ?>
  <p><?php echo $errors; ?></p>
<?php } ?>


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
                <th>Select</th>
                <th>Task</th>
                <th>Due Date</th>
              </tr>";

  foreach($results as $row){
  echo "<tr>

          <td><input type='checkbox' name='check' id='' /> " . "</td> 
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



<br>
<br>





<div id="myDIV" class="header">
  <h2 style="margin:5px">To do list</h2>
  <input type="text" id="myInput" placeholder="add task">
  <span onclick="newElement()" class="addBtn">Add</span>
</div>

<ul id="myUL">

</ul>

<script>
// Create a "close" button and append it to each list item
var myNodelist = document.getElementsByTagName("LI");
var i;
for (i = 0; i < myNodelist.length; i++) {
  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  myNodelist[i].appendChild(span);
}

// Click on a close button to hide the current list item
var close = document.getElementsByClassName("close");
var i;
for (i = 0; i < close.length; i++) {
  close[i].onclick = function() {
    var div = this.parentElement;
    div.style.display = "none";
  }
}

// Add a "checked" symbol when clicking on a list item
var list = document.querySelector('ul');
list.addEventListener('click', function(ev) {
  if (ev.target.tagName === 'LI') {
    ev.target.classList.toggle('checked');
  }
}, false);

// Create a new list item when clicking on the "Add" button
function newElement() {
  var li = document.createElement("li");
  var inputValue = document.getElementById("myInput").value;
  var t = document.createTextNode(inputValue);
  li.appendChild(t);
  if (inputValue === '') {
    alert("You must write something!");
  } else {
    document.getElementById("myUL").appendChild(li);
  }
  document.getElementById("myInput").value = "";

  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  li.appendChild(span);

  for (i = 0; i < close.length; i++) {
    close[i].onclick = function() {
      var div = this.parentElement;
      div.style.display = "none";
    }
  }
}
</script>

</body>
</html>