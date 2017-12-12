<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
<head>
  <meta charset = "utf-8" />
  <title>Log In</title>
  <style type="text/css">

input[type=text], input[type=password] {
    width: 40%;
    padding: 9px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

body {
  font-family: "Open Sans";
  font-size: 16px;
  font-style: normal;
  font-variant: normal;
  font-weight: 500;
  line-height: 26.4px;
  background-color: #ACD1D1;
  color:white;
}

/*signup button*/
button {
    font-family: "Open Sans";
    color: white;
    background-color: #ADA5A5;
    padding: 8px 13px;
    margin: 8px 0;
    border: 1px solid #ccc;
    border-radius:;
    cursor: pointer;
    width: 20%;
}


button:hover { 
  background-color: solid;
}

 /*placeholder text size*/
input,
input::-webkit-input-placeholder {
    font-size: 13px;
    line-height: 1;
}

.signupbutton {
    float: center;
    width: 100%<br>;
}


.container {
    padding: 2px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}


@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}


</style>
<a style="color:white"href="https://web.njit.edu/~mp473/yui/signup.php"><medium><p align="right">sign up</p></medium></span></a>
<center>
<br>
<br>
<br>
<br>
<br>
<br>
<h2><b>hello there!</b></h2>
  <div class="container"> 
    <form class="form-horizontal" action="./db_add.php" method="POST" target="_blank">
       <div class="control-group">
         
            <div class="controls">
    <input required="" type="text" placeholder="Email" name="email" required ><br><span></span>
    
    <input required="" type="password" placeholder="Password" name="password" required><br>

    <div class="clearfix">

      <button type="submit" class="signin" href=""><b>SIGN IN</b></button>
      <br>
    <a href="https://web.njit.edu/~mp473/yui/signup.php">
  <center>
  </div>
  </head>
</html>