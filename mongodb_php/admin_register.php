<?php
require 'vendor/autoload.php';
    require_once 'library1.php';
    if(chkLogin()){
        header("Location: adminhome.php");
    }
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
form {

width:300px;
margin:auto;
padding:50px;

}

input[type=text], input[type=text] {
    width: 100%;
    padding: 10px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

input[type=email],input[type=password]{
    width: 100%;
    padding: 10px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    }
button {
    background-color:gray;
    color: white;
    padding: 9px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;

}

button:hover {
    opacity: 0.8;
}

.container {
width:300px;
    padding:25px;
position:relative;
border:2px solid black;

}
h2
{
text-align:center;
}


body
{
font-family: arial;
background-image:url("icap-bg.jpg");
background-size: cover;
background-position:fit;
background-repeat:no-repeat;")
}

</style>

    <body>

        <form  action="admin_registration_action.php" method="post">
          <div class="container">

    <label><b>Email:</b></label>
             <input type="email"  id="inputEmail3" name="email" placeholder="Email" required>
         <label><b>  Password:</b></label>

         <input type="password"  id="pass" name="pass" placeholder="Password" required>
        <label><b> Confirm Password:</b></label>
              <input type="password"  id="cpass" name="cpass" onblur="chk()" placeholder="Confirm Password" required>

    <button type="submit" name="reg" value="submit">SIGN UP</button>


		                       <b> Already registered!! <a href="admin_login.php">Login Here</a> </b>


      </form>
        <script src="myscript.js" type="text/javascript"></script>
    </body>
</html>