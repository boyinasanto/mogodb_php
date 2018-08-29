<?php
require 'vendor/autoload.php';

include("config.php");


$id = $_GET['id'];


$db->consultants->deleteOne(array('_id' => new MongoDB\BSON\ObjectID($id)));


header("Location:consultation_index.php");
?>