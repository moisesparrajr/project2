<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans"/>
<head>
  <meta charset = "utf-8" />
  <title>Sign Up</title>
  <style type="text/css">

input[type=text], input[type=password] {
    width: 30%; /*width of the text boxes*/ 
    padding: 10px 10px;
    margin: 8px 0;
    display: inline-block;
    border: 1.5px solid #ccc;
    box-sizing: border-box;
}
input[id=email], input[id=password]{
    width: 60%; /*width of the text boxes*/ 
    padding: 10px 10px;
    margin: 8px 0;
    display: inline-block;
    border: 1.5px solid #ccc;
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
  color: white;
}


/*signup button*/
button {
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
    line-height: 2;
}

.signupbutton {
    float: center;
    width: 100%<br>;
}


.container {
    padding: 4px;
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
<a style="color:white" href="login.php"><medium><p align="right">log in</p></medium></span></a>
<center>
<br>
<br>
<br>
<br>
<form class="form-horizontal" action="actions.php" method="POST" target="_blank">
  <h3><b>create an account</b></h3>

   <div class="form-group">
    <input required type="text" id="fname" placeholder="first name" name="firstname" required>
    
    <input required type="text" id="lname" placeholder="last name" name="lastname" required><br>

    <input required type="text" id="email" placeholder="email@email.com" name="email" required><br>

    <input required type="password" id="password" placeholder="password" name="password" required><br>

    <input required type="text" id="birthday" placeholder="yyyy-mm-dd" name="birthday" required>

    <input required type="text" id="phone" placeholder="xxx-xxx-xxxx" name="phone" required><br>

    <input type="radio" name="gender" value="male"><small>Male</small>
    <input type="radio" name="gender" value="female"><small>Female</small><br>

      <button type="submit" class="signupbutton" name="signup" href="login.php"><b>SIGN UP</b></button>
      <br>
    <center>
    </form>
<h3>
  <center>
  </form>
  </div>
  </head>

</html>



