<html>
<head>

</head>

<body>
<?php
require 'vendor/autoload.php';

include_once("config.php");

if(isset($_POST['Submit'])) {
    $cbook = array (

                'dname' => $_POST['dname'],
                'tslot' => $_POST['tslot'],
                'cname' => $_POST['cname'],
                'cphone' => $_POST['cphone'],
                'cemail' => $_POST['cemail'],
            );

    $errorMessage = '';
    foreach ($cbook as $key => $value) {
        if (empty($value)) {
            $errorMessage .= $key . ' field is empty<br />';
        }
    }

    if ($errorMessage) {

        echo '<span style="color:red">'.$errorMessage.'</span>';
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else {
        //insert data to database table/collection named 'users'
        $db->consultantbook->insertOne($cbook);

        //display success message
        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='index.php'>View Result</a>";
    }
}
?>
</body>
</html>