<?php
require 'vendor/autoload.php';
if($_POST)
{
$connection = new MongoDB\Client();
$db = $connection->test;
$id = new MongoDB\BSON\ObjectID($id);
$db->users->updateOne(array('_id'=> $id),
array('$set'=> array('name'=>$_POST["name"],'age'=>$_POST["age"],'email'=>$_POST["email"])));
header("Location:index.php");
}
?>
