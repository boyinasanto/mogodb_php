<?php



require 'vendor/autoload.php';

	include_once("config.php");


		$result = $db->contacts->find(

			[

],


			[

                $sort = array(['_id' =>1]),



			   ]
		);

?>

<html>
<head>
    <title>Contactpage</title>
</head>

<body>
<a href="adminhome.php"><b>Home page</b></a><br/><br/>

    <table width='60%' border=1px solid black>

    <tr bgcolor='gray'>
        <td>Email</td>
        <td>Query</td>

    </tr>
    <?php
    foreach ($result as $res) {
        echo "<tr>";
        echo "<td>".$res['email']."</td>";
        echo "<td>".$res['query']."</td>";

    }
    ?>
    </table>
</body>
</html>