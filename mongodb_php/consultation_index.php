<?php



require 'vendor/autoload.php';

	include_once("config.php");


		$result = $db->consultants->find(

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
<a href="doctor_consultation.php"><b>consultation page</b></a><br/><br/>

    <table width='60%' border=1px solid black>

    <tr bgcolor='gray'>
        <td>Doctor</td>
        <td>Timing</td>
        <td>specialization</td>
        <td>Action</td>
    </tr>
    <?php
    foreach ($result as $res) {
        echo "<tr>";
        echo "<td>".$res['doctor']."</td>";
        echo "<td>".$res['timing']."</td>";
        echo "<td>".$res['specialization']."</td>";
        echo "<td><a href=\"consultation_update.php?id=$res[_id]\">Update</a> | <a href=\"consultation_delete.php?id=$res[_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";

    }
    ?>
    </table>
</body>
</html>