<?php



require 'vendor/autoload.php';

	include_once("config.php");


		$result = $db->medicinebook->find(

			[
],



			[

                $sort = array(['_id' =>1]),



			   ]
		);

?>

<html>
<head>
    <title> </title>
</head>

<body>
<a href="book.php">Bookings page</a><br/><br/>

    <table width='60%' border=1px solid black>

    <tr bgcolor='gray'>
        <td>Medicine Name</td>
        <td>MG</td>
        <td>Customer Name</td>
        <td>Customer Phone</td>
        <td>Customer Email</td>
        <td>Customer Address</td>

    </tr>
    <?php
    foreach ($result as $res) {
        echo "<tr>";
        echo "<td>".$res['mname']."</td>";
        echo "<td>".$res['mg']."</td>";
        echo "<td>".$res['cname']."</td>";
         echo "<td>".$res['cphone']."</td>";
          echo "<td>".$res['cemail']."</td>";
          echo "<td>".$res['address']."</td>";

    }
    ?>
    </table>
</body>
</html>