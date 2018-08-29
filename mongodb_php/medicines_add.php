<html>
<head>
    <title>Add Medicines</title>
</head>

<body>
<?php
require 'vendor/autoload.php';
$connection = new MongoDB\Client();

$db = $connection->test;

if(isset($_POST['Submit'])) {
    $medicine = array (

                 'medicinename' => $_POST['medicinename'],
                'mg' => $_POST['mg'],
                'price' => $_POST['price'],
                'description' => $_POST['description'],

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
        $db->medicines->insertOne($medicine);


        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='adminhome.php'>home</a>";
    }
}
?>
</body>
</html>