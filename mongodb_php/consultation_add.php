<html>
<head>
    <title>Add consultation</title>
</head>

<body>
<?php
require 'vendor/autoload.php';
$connection = new MongoDB\Client();

$db = $connection->test;

if(isset($_POST['Submit'])) {
    $consultant = array (

                 'doctor' => $_POST['doctor'],
                'timing' => $_POST['timing'],
                'specialization' => $_POST['specialization'],

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
        $db->consultants->insertOne($consultant);

        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='adminhome.php'>home</a>";
    }
}
?>
</body>
</html>