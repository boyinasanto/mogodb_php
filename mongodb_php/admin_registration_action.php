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
 if(isset($_POST['reg'])){


        $email = $_POST['email'];
        $temp  = $_POST['pass'];
        $options = array('cost' => 10);
        $pass = password_hash($temp, PASSWORD_BCRYPT, $options);

        $arrays = array(


            "Email Address" => $email,
            "Password"      => $pass

        );

        $query = chkemail($email);
        if($query){
            register($arrays);
            header("Location: admin_login.php");
            }
       else{
        echo "Email already registered!";
           echo"<br>";
        echo "Please <a href='admin_register.php'>Register</a> with another email ID";
       }
}

?>