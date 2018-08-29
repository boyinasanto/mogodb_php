<?php



require 'vendor/autoload.php';

	include_once("config.php");


		$result = $db->diagnosis->find(

			[

],


			[

                $sort = array(['_id' =>1]),



			   ]
		);

?>

<html>
<head>
    <title>diagnosis page</title>
</head>

<body>
<a href="diagnosis.php">diagnosis page</a><br/><br/>

    <table width='60%' border=1px solid black>

    <tr bgcolor='gray'>
        <td>Test name</td>
        <td>Timing</td>

        <td>Action</td>
    </tr>
    <?php
    foreach ($result as $res) {
        echo "<tr>";
        echo "<td>".$res['test']."</td>";
        echo "<td>".$res['timing']."</td>";

        echo "<td><a href=\"diagnosis_update.php?id=$res[_id]\">Update</a> | <a href=\"diagnosis_delete.php?id=$res[_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";

    }
    ?>
    </table>
</body>
</html>