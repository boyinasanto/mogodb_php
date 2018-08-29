
<?php
require 'vendor/autoload.php';
    require_once 'library.php';

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
    background: url("Thumbnail_BookingsIntro_778x340.jpg");
	     background-size: cover;
		  background-position:center;
		  background-repeat:no-repeat;

	    padding: 200px;
    text-align: center;
    }


.topnav {
    overflow: hidden;
    background-color: #333;
    padding:15px;
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
    width: 30%;
    font-size:18.5px;
}


.column.middle {
    width:30%;

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
    padding: 60px;

position:relative;
left:1%;
width:300px;


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
  <a href="adminhome.php">Home </a>
    <a href="doctor_consultation.php">Doctor Consultation</a>
    <a href="diagnosis.php">Diagnostics</a>

     <a href="medicines.php">Medicine</a>
     <a href="book.php">Bookings</a>
     <a href="contact_index.php">contacts</a>
     </div>

<div class="row">
  <div class="column side">
  <form action="cbook.php" method="post">

   <div class="container">
<button type="submit" name="add">Consultation</button>
</div>
   </form>
   </div>

 <div class="column middle">
<form action="dbook.php" method="post">

   <div class="container">


<button type="submit" name="add">Diagnosis</button>
</div>

   </form>
   </div>

  <div class="column side">
  <form action="mbook.php" method="post">

     <div class="container">


  <button type="submit" name="add">Medicines</button>
  </div>

     </form>
   </div>


</div>


</body>
</html>
