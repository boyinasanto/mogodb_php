<?php
require 'vendor/autoload.php';
require_once 'connection1.php';
require_once 'library1.php';
?>
<?php

    if(chkLogin()){
        header("Location: adminhome.php");
    }
?>
<?php

    if(isset($_POST['login'])){



        $email = $_POST['email'];
        $upass = $_POST['pass'];
        $criteria = array("Email Address"=> $email);
        $query = $admininfo->findOne($criteria);

        if(empty($query)){
            echo "Email ID is not registered.";
            echo "Either <a href='reg.php'>Register</a> with the new Email ID or <a href='login.php'>Login</a> with an already registered ID";
        }
        else{

                $pass = $query["Password"];
                if(password_verify($upass,$pass)){
                    $var = setsession($email);



                    if($var){

                    header("Location:adminhome.php");
                    }
                    else{
                        echo "Some error";
                    }
                }
                else{
                    echo "You have entered a wrong password";
                    echo "<br>";
                    echo "Either <a href='reg.php'>Register</a> with the new Email ID or <a href='login.php'>Login</a> with an already registered ID";
                }



        }
    }


?>