<?php
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

	padding:100px;

	}

	input[type=email], input[type=password] {
	    width: 100%;
	    padding: 12px 20px;
	    margin: 8px 0;
	    display: inline-block;
	    border: 1px solid #ccc;
	    box-sizing: border-box;
	}

	button {
	    background-color:gray;
	    color: white;
	    padding:10px;
	    margin: 8px 0;
	    border: none;
	    cursor: pointer;
	    width: 100%;

	}

	button:hover {
	    opacity: 0.8;
	}



	.registration {
	    width: 100px;
	    border: 1px solid black;
	    padding: 5px;
	    margin: 1px;
	    background-color:gray;
	    font-color:white;
	    text-align:center;
	    text-decoration:none;
	    }
	    .registration a
	    {
	    color:white;
	    text-decoration:none;
	    }
	.container {
	    padding: 30px;
	border:2px solid black;
	position:relative;
	width:300px;


	}
	body
	{

	background-image:url("icap-bg.jpg");
	background-size:cover;
	background-position:fit;
background-repeat:no-repeat;
	background-attachment: fixed;
	}





</style>
    <body>

   <form  method="post" action="admin_login_action.php">

                <div class="container">
                 <label><b> Email</b></label>
                  <input type="email"  id="exampleInputEmail3" name="email" placeholder="Email" required>

                  <label><b>Password</b></label>
                <input type="password"  id="exampleInputPassword3" name="pass" placeholder="Password" required>
                <button type="submit" name="login" value="submit">Login</button></br></br>


	  </div>


        </form>
    </body>
</html>