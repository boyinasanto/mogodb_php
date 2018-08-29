
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
    background: url("online-consultation-sonal-hospital-header.jpg");
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
    width: 47%;
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
    padding: 50px;
border:1px solid black;
position:relative;
left:900%;
width:500px;


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
    <a href="contact_index.php">Contact</a>
     </div>

<div class="row">
  <div class="column side"><br><br>
  <h3>Doctor Consultation</h3>
  <p>Patients are not exclusively physically ill or exclusively emotionally distressed. Often they are both. At the start of a consultation it is usually not possible to distinguish between these states. It is the doctor's task to listen actively to the patient's story, seeking and noticing evidence for both physical illness and emotional distress</p>
  <p>Three functions of the medical consultation
1 Build the relationship
Greet the patient warmly and by name
Detect and respond to emotional issues
Active listening
2 Collect data
Do not interrupt patient
Elicit patient's explanatory model
Consider other factors
Develop shared understanding
3 Agree a management plan
Provide information
Appropriate use of reassurance
Negotiate a management plan
Make links
Negotiate behaviour change</p>
<p>involving patients Changes in society and health care in the past decade have resulted in real changes in what people expect from their doctors and in how doctors view patients.Many patients want more information than they are given. They also want to take some part in deciding about their treatment in the light of its chances of success and any side effects. Some patients, of course, do not wish to participate in decision making; they would prefer their doctor to decide on a single course of action and to advise them accordingly.</p>
  </div>
  <form action="consultation_add.html" method="post">
  <div class="column middle">
   <div class="container">


<button type="submit" name="add">Add</button>
</div>
   </div>
   </form>

<form action="consultation_index.php" method="post">
  <div class="column middle">
   <div class="container">


<button type="submit" name="update/delete">Update/delete</button>
</div>
   </div>
   </form>

  <div class="column side">

  </div>
</div>


</body>
</html>
