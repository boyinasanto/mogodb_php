<?php

include_once("config.php");

if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $diagnosist = array (
                'test' => $_POST['test'],
                'timing' => $_POST['timing'],

            );


    $errorMessage = '';
    foreach ($diagnosist as $key => $value) {
        if (empty($value)) {
            $errorMessage .= $key . ' field is empty<br />';
        }
    }

    if ($errorMessage) {

        echo '<span style="color:red">'.$errorMessage.'</span>';
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else {

        $db->diagnosis->update(
                        array('_id' => new MongoDB\Client($id)),
                        array('$set' => $diagnosist)
                    );


        header("Location: adminhome.php");
    }
}
?>
<?php

$id = $_GET['id'];


$result = $db->diagnosis->findOne(

			[

            ],

			[

                $sort = array(['_id' =>1]),



			   ]
		);

$test = $result['test'];
$timing = $result['timing'];

?>
<html>
<head>
    <title>Edit Data</title>
</head>

<body>
    <a href="adminhome.php">Home</a>
    <br/><br/>

    <form name="form1" method="post" action="diagnosis_update.php">
        <table border="0">
            <tr>
                <td>Test</td>
                <td><input type="text" name="test" value="<?php echo $test;?>"></td>
            </tr>
            <tr>
                <td>timing</td>
                <td><input type="text" name="timing" value="<?php echo $timing;?>"></td>
            </tr>

            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>