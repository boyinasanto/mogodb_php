<?php
require 'vendor/autoload.php';

include("config.php");


$id = $_GET['id'];


$db->diagnosis->deleteOne(array('_id' => new MongoDB\BSON\ObjectID($id)));


header("Location:diagnosis_index.php");
?>