<?php

require 'vendor/autoload.php';

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
<html>
    <head>

    </head>

    <body>
    <center>
        <form  method="post" action="consultation_submit.php" name="form1" >

		             <table border="2" width="30%" cellpadding="5">

		                     <tr>
		                         <th colspan="2">Book Consultation</th>
		                     </tr>
		               <tr>
					                   <td>Doctor Name</td>
					                   <td><input type="text" name="dname"></td>
					               </tr>
					               <tr>
					                   <td>Time Slot</td>
					                   <td><input type="text" name="tslot"></td>
					               </tr>
					               <tr>
					   			      <td>Customer Name</td>
					   			       <td><input type="text" name="cname"></td>
					               </tr>
					               <tr>
					   			       <td>Customer Phone</td>
					   			       <td><input type="text" name="cphone"></td>
					               </tr>
					               <tr>
					                   <td>Customer Email</td>
					                   <td><input type="text" name="cemail"></td>
					               </tr>
					               <tr>
					                   <td></td>
					                   <td><input type="submit" name="Submit" value="Add"></td>
					               </tr>
					           </table>
					       </form>
					       </center>
					   </body>
</html>

