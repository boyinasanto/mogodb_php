<?php

include_once("config.php");

if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $consultant = array (
                'doctor' => $_POST['doctor'],
                'timing' => $_POST['timing'],
                'specialization' => $_POST['specialization']
            );


    $errorMessage = '';
    foreach ($consultant as $key => $value) {
        if (empty($value)) {
            $errorMessage .= $key . ' field is empty<br />';
        }
    }

    if ($errorMessage) {

        echo '<span style="color:red">'.$errorMessage.'</span>';
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else {

        $db->consultants->update(
                        array('_id' => new MongoDB\Client($id)),
                        array('$set' => $consultant)
                    );


        header("Location: adminhome.php");
    }
}
?>
<?php

$id = $_GET['id'];


$result = $db->consultants->findOne(

			[

            ],

			[

                $sort = array(['_id' =>1]),



			   ]
		);

$doctor = $result['doctor'];
$timing = $result['timing'];
$specialization = $result['specialization'];
?>
<html>
<head>
    <title>Edit Data</title>
</head>

<body>
    <a href="adminhome.php">Home</a>
    <br/><br/>

    <form name="form1" method="post" action="consultation_update.php">
        <table border="0">
            <tr>
                <td>Doctor</td>
                <td><input type="text" name="doctor" value="<?php echo $doctor;?>"></td>
            </tr>
            <tr>
                <td>timing</td>
                <td><input type="text" name="timing" value="<?php echo $timing;?>"></td>
            </tr>
            <tr>
                <td>specialization</td>
                <td><input type="text" name="specialization" value="<?php echo $specialization;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>