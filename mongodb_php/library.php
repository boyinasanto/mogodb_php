<?php
require 'vendor/autoload.php';
    session_start();
    function register($data){
        global $userinfo;
        $userinfo->insertOne($data);
        return true;
    }

    function chkemail($email){
        global $userinfo;
        $temp = $userinfo->findOne(array('Email Address'=> $email));
        if(empty($temp)){
        return true;
        }
        else{
            return false;
        }
    }
    function setsession($email){



        $_SESSION["userLoggedIn"] = 1;
        global $userinfo;
        $temp = $userinfo->findOne(array('Email Address'=> $email));
        $_SESSION["uname"] = $temp["First Name"];
        $_SESSION["email"] = $email;
        return true;

    }
    function chkLogin()
    {
if($_SESSION["userLoggedIn"]== 1)
{
            return true;
        }
        else
        {
            return false;
        }
    }
    function removeall(){
        unset($_SESSION["userLoggedIn"]);
        unset($_SESSION["uname"]);
        unset($_SESSION["email"]);
        return true;
    }

?>