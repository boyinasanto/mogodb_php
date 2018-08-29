<?php



require 'vendor/autoload.php';

	include_once("config.php");


$result = $db->consultantbook->find(
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
        <td>Doctor Name</td>
        <td>Time Slot</td>
        <td>Customer Name</td>
        <td>Customer Phone</td>
        <td>Customer Email</td>

    </tr>
    <?php
    foreach ($result as $res) {
        echo "<tr>";
        echo "<td>".$res['dname']."</td>";
        echo "<td>".$res['tslot']."</td>";
        echo "<td>".$res['cname']."</td>";
         echo "<td>".$res['cphone']."</td>";
          echo "<td>".$res['cemail']."</td>";

    }
    ?>
    </table>
</body>
</html>