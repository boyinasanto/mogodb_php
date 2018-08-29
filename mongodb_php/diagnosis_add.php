<html>
<head>
    <title>Add Diagnosis</title>
</head>

<body>
<?php
require 'vendor/autoload.php';
$connection = new MongoDB\Client();

$db = $connection->test;

if(isset($_POST['Submit'])) {
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

        $db->diagnosis->insertOne($diagnosist);


        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='adminhome.php'>home</a>";
    }
}
?>
</body>
</html>