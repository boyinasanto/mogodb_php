<?php

include_once("config.php");

if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $medicine = array (
                'medicinename' => $_POST['medicinename'],
                'mg' => $_POST['mg'],
                'price' => $_POST['price'],
                'description' => $_POST['description']
            );


    $errorMessage = '';
    foreach ($medicine as $key => $value) {
        if (empty($value)) {
            $errorMessage .= $key . ' field is empty<br />';
        }
    }

    if ($errorMessage) {

        echo '<span style="color:red">'.$errorMessage.'</span>';
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else {

        $db->medicines->update(
                        array('_id' => new MongoDB\Client($id)),
                        array('$set' => $medicine)
                    );


        header("Location: adminhome.php");
    }
}
?>
<?php

$id = $_GET['id'];


$result = $db->medicines->findOne(

			[

            ],

			[

                $sort = array(['_id' =>1]),



			   ]
		);

$medicinename = $result['medicinename'];
$mg = $result['mg'];
$price = $result['price'];
$description = $result['description'];
?>
<html>
<head>
    <title>Edit Data</title>
</head>

<body>
    <a href="adminhome.php">Home</a>
    <br/><br/>

    <form name="form1" method="post" action="medicine_update.php">
        <table border="0">
            <tr>
                <td>Medicine name</td>
                <td><input type="text" name="medicinename" value="<?php echo $medicinename;?>"></td>
            </tr>
            <tr>
                <td>MG</td>
                <td><input type="mg" name="timing" value="<?php echo $mg;?>"></td>
            </tr>
            <tr>
                <td>Price</td>
                <td><input type="text" name="price" value="<?php echo $price;?>"></td>
            </tr>
            <tr>
			                <td>Description</td>
			                <td><input type="text" name="description" value="<?php echo $description;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>