<?php
require 'vendor/autoload.php';

include("config.php");


$id = $_GET['id'];


$db->medicines->deleteOne(array('_id' => new MongoDB\BSON\ObjectID($id)));


header("Location:medicine_index.php");
?>