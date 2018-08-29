<html>
<head>

</head>

<body>
<?php
require 'vendor/autoload.php';

include_once("config.php");

if(isset($_POST['Submit'])) {
    $dbook = array (

                'tname' => $_POST['tname'],
                'tslot' => $_POST['tslot'],
                'cname' => $_POST['cname'],
                'cphone' => $_POST['cphone'],
                'cemail' => $_POST['cemail'],
            );

    $errorMessage = '';
    foreach ($dbook as $key => $value) {
        if (empty($value)) {
            $errorMessage .= $key . ' field is empty<br />';
        }
    }

    if ($errorMessage) {

        echo '<span style="color:red">'.$errorMessage.'</span>';
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else {

        $db->daignosisbook->insertOne($dbook);


        echo "<font color='green'><h3>your testing slot is successfully booked</h3>";
        echo "<br/><a href='userhome.php'><h3>Home Page</h3></a>";
    }
}
?>
</body>
</html>