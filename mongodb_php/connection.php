<?php
require 'vendor/autoload.php';
    try{
    $connection = new MongoDB\Client();
    $db = $connection->logins;

    $userinfo = $db->userinfo;
    }
    catch (Exception $e){
        die("Error. Couldn't connect to the server. Please Check");
    }
    session_start();
?>