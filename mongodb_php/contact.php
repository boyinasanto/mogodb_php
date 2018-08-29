
<?php

require 'vendor/autoload.php';
include_once("config.php");
require_once 'library.php';
		    if(chkLogin()){

		        $name = $_SESSION["uname"];



		    }
		    else{
		        header("Location: login.php");
		    }

		    if(isset($_POST['logout'])){

		        $var = removeall();
		        if($var){
		            header("Location:login.php");
		        }
		        else{
		            echo "Error!";
		        }

    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Health care</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
}

body {
  margin: 0;
}


.header {
    background: url("web-contact-us-blue-icons-cubes-website-internet-page-concept-isolated-white-background-44669495.jpg");
	     background-size: cover;
		  background-position:center;
		  background-repeat:no-repeat;

	    padding: 200px;
    text-align: center;
    }


.topnav {
    overflow: hidden;
    background-color: #333;
    padding:10px;
}

.topnavlogout {
    position:relative;
    left:90%;
    background-color: #333;
	    display:inline;
	    color: #f2f2f2;
	    text-align: center;
	    padding:10px;
    text-decoration: none;

}
.topnav a {
    position:relative;
    left:20%;
    display:inline;
    color: #f2f2f2;
    text-align: center;
    padding:20px;
    text-decoration: none;
}


.topnav a:hover {
    background-color: #ddd;
    color: black;
}


.column {
    float: left;
    padding: 10px;
}


.column.side {
    width: 10%;
}

.column.middle {
    width: 60%;
    font-size:20px;
}


.row:after {
    content: "";
    display: table;
    clear: both;
}

@media (max-width: 600px) {
    .column.side, .column.middle {
        width: 100%;
    }
}
form {

width:300px;
margin:auto;

padding:100px;

}
.container {
    padding: 50px;
border:1px solid black;
position:relative;
left:30%;
width:450px;


}
input[type=text], input[type=text] {
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


</style>
</head>
<body>

<div class="header">

</div>
<div class="topnav">
   <a href="userhome.php">Home </a>
   <a href="user_doctor_consultation.php">Doctor Consultation</a>
   <a href="user_diagnosis.php">Diagnostics</a>
    <a href="healthcal.php">Health Calculator</a>
    <a href="user_medicines.php">Medicines</a>
    <a href="contact.php">Contact Us</a>

</div>

<div class="row">
    <div class="column middle">
  <form action="contact1.php" method="post">

   <div class="container">

     <center> <h2> Contact Us </h2></center>
   <label><b> Email :</b></label> &nbsp &nbsp

   <input type="email" placeholder="Enter Email" name="email" required></br></br>
   <label><b> Enter your query :</b></label>
    <textarea rows="6" cols="40" placeholder="query" name="query"></textarea>


<button type="submit" name="add">Contact</button>

</div>
</form>
   </div>
</div>




</body>
</html>
