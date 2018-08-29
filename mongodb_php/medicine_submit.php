<html>
<head>

</head>

<body>
<?php
require 'vendor/autoload.php';

include_once("config.php");

if(isset($_POST['Submit'])) {
    $mbook = array (

                'mname' => $_POST['mname'],
                'mg' => $_POST['mg'],
                'cname' => $_POST['cname'],
                'cphone' => $_POST['cphone'],
                'cemail' => $_POST['cemail'],
                'address' => $_POST['address'],
            );

    $errorMessage = '';
    foreach ($mbook as $key => $value) {
        if (empty($value)) {
            $errorMessage .= $key . ' field is empty<br />';
        }
    }

    if ($errorMessage) {

        echo '<span style="color:red">'.$errorMessage.'</span>';
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else {

        $db->medicinebook->insertOne($mbook);


        echo "<font color='green'><h3>your order of medicines is successfully booked</h3>";
        echo "<br/><a href='userhome.php'><h3>Home Page</h3></a>";
    }
}
?>
</body>
</html>