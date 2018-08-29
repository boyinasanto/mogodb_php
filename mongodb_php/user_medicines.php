<?php
require 'vendor/autoload.php';
require_once 'library.php';
    if(chkLogin()){

        $name = $_SESSION["uname"];



    }
    else{
        header("Location: sample.php");
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
       background: url("1-3_low.jpg");
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

/* Middle column */
.column.middle {
    width:30%;

}

/* Clear floats after the columns */
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
width:600px;


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
   <a href="user_medicines.php">Medicine</a>
    <a href="contact.php">Contact Us</a>
     </div>

<div class="row">
  <div class="column side"><br><br>
  <h3>medicines</h3>
  <p>The correct use of a medicine is a sum of many things. Before you start to use a medicine, find out what is important in its use.</p>
  <p>Is the medicine suitable for me?</p>
  <p>How much should I take the medicine?</p>
  <p>If the dose is too small, the medicine will not bring about the desired effect. A too large a dose might cause adverse reactions or even a poisoning.
  If the medicine is a prescribed one, the prescribing physician will give you personalised instructions on its use. The instructions for use are attached to the package in a pharmacy.
  In over-the-counter medicines sold in pharmacies, the instructions for use are in the package.
  Doses for children are determined by age and possibly by weight.</p>
  <p>How should I take the medicine?</p>
  <p>The most common method is swallowing, but there are also medicines that are applied directly into the eye or ear or on the skin.</p>
  <p>At what time of day should I take the medicine?</p>
  <p>If a medicine is to be taken several times a day, you should check whether it should be taken at regular intervals. For example, one antibiotic tablet three times a day means that you should take a tablet every eight hours.</p>
  <p>Should I take the medicine during a meal or without?</p>
  <p>Food might increase, decrease or have no effect on the absorption of a medicine.
  Usually the timing of the taking of a medicine and meals has no effect on the efficacy of the medicine.
On an empty stomach means that the medicine must be taken at least an hour before a meal or 2 to 3 hours after it.</p>
  </div>

  <div class="column middle">
   <div class="container">
   <?php
   include_once("config.php");


   		$result = $db->medicines->find(

   			[

],


   			[

                   $sort = array(['_id' =>1]),



   			   ]
   		);

?>

    <table width='80%' border=1>
    <center><h2>Order Medicines</h3>

    <tr bgcolor='#CCCCCC'>
        <td>Medicine Name</td>
        <td>MG</td>
        <td>Price</td>
         <td>Description</td>

    </tr>
    <?php
    foreach ($result as $res) {
        echo "<tr>";
        echo "<td>".$res['medicinename']."</td>";
        echo "<td>".$res['mg']."</td>";
        echo "<td>".$res['price']."</td>";
         echo "<td>".$res['description']."</td>";


    }
    ?>
    </table>
     <form action="medicine_book.php" method="post">
	    <button type="submit" name="book">Book</button>
	    </form>

</center>

</div>
   </div>


  <div class="column side">

  </div>
</div>


</body>
</html>