<?php



require 'vendor/autoload.php';

	include_once("config.php");


		$result = $db->medicines->find(

			[
],



			[

                $sort = array(['_id' =>1]),



			   ]
		);

?>

<html>
<head>
    <title>Homepage</title>
</head>

<body>
<a href="medicines.php"><b>medicines page</b></a><br/><br/>

    <table width='60%' border=1px solid black>

    <tr bgcolor='gray'>
        <td><b>Medicine Name</b></td>
        <td><b>MG</b></td>
        <td><b>Price</b></td>
         <td><b>Description</b></td>
       <td><b>Action</b></td>
    </tr>
    <?php
    foreach ($result as $res) {
        echo "<tr>";
        echo "<td>".$res['medicinename']."</td>";
        echo "<td>".$res['mg']."</td>";
        echo "<td>".$res['price']."</td>";
         echo "<td>".$res['description']."</td>";
        echo "<td><a href=\"medicine_update.php?id=$res[_id]\">Update</a> | <a href=\"medicine_delete.php?id=$res[_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";

    }
    ?>
    </table>
</body>
</html>