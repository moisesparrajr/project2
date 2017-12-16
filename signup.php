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

h3 {
  color: #ffffff;
}
small {
  color: #ffffff;
  font-size: 13px;
}

/*signup button*/
button{
   font-family: "Open Sans";
    color: white;
    background-color: #006699;
    padding: 11px 13px; /*elizabeth changed the first value */
    margin: 8px 0;
    border: 0px solid #ccc;
       border: 0px solid #ccc;
    border-radius:;
    cursor: pointer;
    width: 15%;

}

button:hover {
  background-color: solid;
}

 /*placeholder text size*/
input,
input::-webkit-input-placeholder {
    font-size: 13px;
    font-color: #7E807E;
    line-height: 2;
}

.signupbutton {
    float: center;
    width: 70%<br>;
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


body {
        font-family: 'Lato', sans-serif;
        font-size: 16px;
        font-style: normal;
        font-variant: normal;
        font-weight: 500;
        line-height: 26.4px;
        background: linear-gradient(#99ceff, #1a90ff);
        height: 1000px;
        color: #7E807E;
}


/*signup button*/
button{
   font-family: 'Lato', sans-serif;
    color: white;
    background-color: #006699;
    padding: 11px 13px; /*elizabeth changed the first value */
    margin: 8px 0;
    border: 0px solid #ccc;
       border: 0px solid #ccc;
    border-radius:;
    cursor: pointer;
    width: 15%;

}

button:hover {
  background-color: solid;
}

 /*placeholder text size*/
input,
input::-webkit-input-placeholder {
    font-size: 13px;
    font-color: #7E807E;
    line-height: 2;
}

.signupbutton {
    float: center;
    width: 70%<br>;
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



