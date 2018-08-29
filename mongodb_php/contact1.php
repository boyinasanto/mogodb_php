<html>
<head>

</head>

<body>
<?php
require 'vendor/autoload.php';

include_once("config.php");

if(isset($_POST['add'])) {
    $contact = array (

                'email' => $_POST['email'],
                'query' => $_POST['query'],

            );

    $errorMessage = '';
    foreach ($contact as $key => $value) {
        if (empty($value)) {
            $errorMessage .= $key . ' field is empty<br />';
        }
    }

    if ($errorMessage) {

        echo '<span style="color:red">'.$errorMessage.'</span>';
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else {

        $db->contacts->insertOne($contact);


        echo "<font color='green'><h3>your query was recieved </br> will get a response as soon as possible</h3>";
        echo "<br/><a href='userhome.php'>Home Page</a>";
    }
}
?>
</body>
</html>