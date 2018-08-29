<?php
require 'vendor/autoload.php';
    session_start();
    function register($data){
        global $admininfo;
        $admininfo->insertOne($data);
        return true;
    }

    function chkemail($email){
        global $admininfo;
        $temp = $admininfo->findOne(array('Email Address'=> $email));
        if(empty($temp)){
        return true;
        }
        else{
            return false;
        }
    }
    function setsession($email){



        $_SESSION["userLoggedIn"] = 1;
        global $admininfo;
        $temp = $admininfo->findOne(array('Email Address'=> $email));

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

        unset($_SESSION["email"]);
        return true;
    }

?>